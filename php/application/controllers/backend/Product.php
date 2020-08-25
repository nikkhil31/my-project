<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {
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
		$this->data['product'] = $this->Crud->get_allrecord('product');
		$this->render('back','product_mgmt');
	}

	public function Render_add()
	{
		$this->render('back','product_add');
	}

	public function Creator_add($formdata)
	{
		// _pre($formdata);


		$img1='image & product & png|PNG|JPEG|jpeg|JPG|jpg & 1920 & 749 & true & old_image';

		$this->form_validation->set_rules('product_name'	, 'Product Name',	'required');
		$this->form_validation->set_rules('small_desc'	, 'Small Description',	'required');
		$this->form_validation->set_rules('display_order'	, 'Display order',	'required|is_natural_no_zero');
		$this->form_validation->set_rules('category_id'	, 'Category',	'required');
		$this->form_validation->set_rules('image'  , 'Image',	'callback_image_check['.$img1.']');

		if ($this->form_validation->run() == FALSE)
        {
        	$this->data['error']['product_name']			=	form_error('product_name');
        	$this->data['error']['small_desc']				=	form_error('small_desc');
        	$this->data['error']['category_id']				=	form_error('category_id');
        	$this->data['error']['image']					=	form_error('image');
        	$this->data['error']['display_order']			=	form_error('display_order');

        	$this->Render_add();

        } else {

        	$data = array(
        					'product_name'		=>	$formdata['product_name'],
        					'display_order'		=>	$formdata['display_order'],
        					'small_desc'		=>	$formdata['small_desc'],
        					'category_id'		=>	$formdata['category_id'],
        					'is_featured'		=>	$formdata['is_feature'],
        					'is_lattest'		=>	$formdata['is_lattest'],
        					'title'				=>	$formdata['title1'].','.$formdata['title2'].','.$formdata['title3'].','.$formdata['title4'].','.$formdata['title5'],
        					'desc'				=>	$formdata['desc1'].','.$formdata['desc2'].','.$formdata['desc3'].','.$formdata['desc4'].','.$formdata['desc5'],
        					'image_path'		=>	$this->image_path[0],
        					'meta_title'		=>	$formdata['meta_title'],
        					'meta_keyword'		=>	$formdata['meta_keyword'],
        					'meta_desc'			=>	$formdata['meta_desc'],
        					'description'		=>	$formdata['description'],
        				 );
        	// _pre($data);
        	$this->Crud->only_insert_data('product',$data);

        	redirect('product/mgmt');
        }
	}

	public function Render_edit($value='')
	{
		$this->data['product'] = $this->Crud->get_where('product',array('id'=>$_GET['id']))->row();
		$this->render('back','product_edit');
	}

	public function Creator_edit($formdata)
	{
		// _pre($formdata);


		$img1='image & product & png|PNG|JPEG|jpeg|JPG|jpg & 1920 & 749 & true & old_image';

		$this->form_validation->set_rules('product_name'	, 'Product Name',	'required');
		$this->form_validation->set_rules('small_desc'	, 'Small Description',	'required');
		$this->form_validation->set_rules('display_order'	, 'Display order',	'required|is_natural_no_zero');
		$this->form_validation->set_rules('category_id'	, 'Category',	'required');
		$this->form_validation->set_rules('image'  , 'Image',	'callback_image_check['.$img1.']');

		if ($this->form_validation->run() == FALSE)
        {
        	$this->data['error']['product_name']			=	form_error('product_name');
        	$this->data['error']['small_desc']				=	form_error('small_desc');
        	$this->data['error']['category_id']				=	form_error('category_id');
        	$this->data['error']['image']					=	form_error('image');
        	$this->data['error']['display_order']			=	form_error('display_order');

        	$this->Render_edit();

        } else {

        	
        	$data = array(
        					'product_name'		=>	$formdata['product_name'],
        					'display_order'		=>	$formdata['display_order'],
        					'small_desc'		=>	$formdata['small_desc'],
        					'category_id'		=>	$formdata['category_id'],
        					'is_featured'		=>	$formdata['is_feature'],
        					'is_lattest'		=>	$formdata['is_lattest'],
        					'title'				=>	$formdata['title1'].','.$formdata['title2'].','.$formdata['title3'].','.$formdata['title4'].','.$formdata['title5'],
        					'desc'				=>	$formdata['desc1'].','.$formdata['desc2'].','.$formdata['desc3'].','.$formdata['desc4'].','.$formdata['desc5'],
        					'image_path'		=>	$this->image_path[0],
        					'meta_title'		=>	$formdata['meta_title'],
        					'meta_keyword'		=>	$formdata['meta_keyword'],
        					'meta_desc'			=>	$formdata['meta_desc'],
        					'description'		=>	$formdata['description'],
        				 );
        	// _pre($data);
        	
        	$where['id']	=	$_GET['id'];
        	$this->Crud->get_update('product',$where,$data);

        	redirect('product/mgmt');
        }
	}

	public function Render_delete()
	{
		$where['id']	=	$_GET['id'];
		$this->Crud->row_delete('product',$where);

		redirect('product/mgmt');
	}
}
