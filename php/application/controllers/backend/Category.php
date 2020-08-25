<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller {
	function __construct(){
		parent::__construct();

		// $login = $this->session->userdata('logged_in');
		// if(!isset($login)){
		// 	redirect(site_url());
		// }
	}

	public function index(){
		if(count($_POST) > 0){
			$method 	=	'Creator_'.$this->input->post('action');
			$this->$method($_POST);

		}else{


			if (isset($this->segment[2])) {

				$method =	"Render_" . str_replace("-", "_", $this->segment[2]);

			} else {

				$method =	"Render_index";
			}
			$this->$method();
		}		
	}

	public function Render_mgmt()
	{
		$this->data['category'] = $this->Crud->get_allrecord('category');
		$this->render('back','category_mgmt');
	}

	public function Render_add()
	{
		$this->render('back','category_add');
	}

	public function Creator_add($formdata)
	{
		// _pre($formdata);


		$this->form_validation->set_rules('category_name'	, 'Category Name',	'required');
		$this->form_validation->set_rules('display_order'	, 'Display order',	'required|is_natural_no_zero');

		if ($this->form_validation->run() == FALSE)
        {
        	$this->data['error']['category_name']			=	form_error('category_name');
        	$this->data['error']['display_order']			=	form_error('display_order');

        	$this->Render_add();

        } else {

        	$data = array(
        					'category_name'		=>	$formdata['category_name'],
        					'display_order'		=>	$formdata['display_order'],
        					'meta_title'		=>	$formdata['meta_title'],
        					'meta_keyword'		=>	$formdata['meta_keyword'],
        					'meta_desc'			=>	$formdata['meta_desc'],
        				 );
        	// _pre($data);
        	$this->Crud->only_insert_data('category',$data);

        	redirect('category/mgmt');
        }
	}

	public function Render_edit($value='')
	{
		$this->data['category'] = $this->Crud->get_where('category',array('id'=>$_GET['id']))->row();
		$this->render('back','category_edit');
	}

	public function Creator_edit($formdata)
	{
		// _pre($formdata);


		$this->form_validation->set_rules('category_name'	, 'Category Name',	'required');
		$this->form_validation->set_rules('display_order'	, 'Display order',	'required|is_natural_no_zero');

		if ($this->form_validation->run() == FALSE)
        {
        	$this->data['error']['category_name']			=	form_error('category_name');
        	$this->data['error']['display_order']			=	form_error('display_order');

        	$this->Render_edit();

        } else {

        	
        	$data = array(
        					'category_name'		=>	$formdata['category_name'],
        					'display_order'		=>	$formdata['display_order'],
        					'meta_title'		=>	$formdata['meta_title'],
        					'meta_keyword'		=>	$formdata['meta_keyword'],
        					'meta_desc'			=>	$formdata['meta_desc'],
        				 );
        	// _pre($data);
        	
        	$where['id']	=	$_GET['id'];
        	$this->Crud->get_update('category',$where,$data);

        	redirect('category/mgmt');
        }
	}

	public function Render_delete()
	{
		$where['id']	=	$_GET['id'];
		$this->Crud->row_delete('category',$where);

		redirect('category/mgmt');
	}
}
