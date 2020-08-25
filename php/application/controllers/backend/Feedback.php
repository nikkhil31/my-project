<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends MY_Controller {
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
		$this->data['feedback'] = $this->Crud->get_allrecord('feedback');
		$this->render('back','feedback_mgmt');
	}

	public function Render_add()
	{
		$this->render('back','feedback_add');
	}

	public function Creator_add($formdata)
	{
		// _pre($formdata);


		$this->form_validation->set_rules('feedback'	, 'Feedback',	'required');
		$this->form_validation->set_rules('company'	, 'Company',	'required');
		$this->form_validation->set_rules('name'	, 'name',	'required');
		$this->form_validation->set_rules('display_order'	, 'Display order',	'required|is_natural_no_zero');

		if ($this->form_validation->run() == FALSE)
        {
        	$this->data['error']['feedback']			=	form_error('feedback');
        	$this->data['error']['company']				=	form_error('company');
        	$this->data['error']['name']				=	form_error('name');
        	$this->data['error']['display_order']		=	form_error('display_order');

        	$this->Render_add();

        } else {

        	$data = array(
        					'feedback'		=>	$formdata['feedback'],
        					'company'		=>	$formdata['company'],
        					'name'			=>	$formdata['name'],
        					'display_order'	=>	$formdata['display_order'],
        				 );
        	// _pre($data);
        	$this->Crud->only_insert_data('feedback',$data);

        	redirect('feedback/mgmt');
        }
	}

	public function Render_edit($value='')
	{
		$this->data['feedback'] = $this->Crud->get_where('feedback',array('id'=>$_GET['id']))->row();
		$this->render('back','feedback_edit');
	}

	public function Creator_edit($formdata)
	{
		// _pre($formdata);


		$this->form_validation->set_rules('feedback'	, 'Feedback',	'required');
		$this->form_validation->set_rules('company'	, 'Company',	'required');
		$this->form_validation->set_rules('name'	, 'name',	'required');
		$this->form_validation->set_rules('display_order'	, 'Display order',	'required|is_natural_no_zero');

		if ($this->form_validation->run() == FALSE)
        {
        	$this->data['error']['feedback']			=	form_error('feedback');
        	$this->data['error']['company']				=	form_error('company');
        	$this->data['error']['name']				=	form_error('name');
        	$this->data['error']['display_order']		=	form_error('display_order');

        	$this->Render_edit();

        } else {

        	
        	$data = array(
        					'feedback'		=>	$formdata['feedback'],
        					'company'		=>	$formdata['company'],
        					'name'			=>	$formdata['name'],
        					'display_order'	=>	$formdata['display_order'],
        				 );
        	// _pre($data);
        	
        	$where['id']	=	$_GET['id'];
        	$this->Crud->get_update('feedback',$where,$data);

        	redirect('feedback/mgmt');
        }
	}

	public function Render_delete()
	{
		$where['id']	=	$_GET['id'];
		$this->Crud->row_delete('feedback',$where);

		redirect('feedback/mgmt');
	}
}
