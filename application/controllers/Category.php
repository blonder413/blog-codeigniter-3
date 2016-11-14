<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('category_model');
	}
	
	public function add()
	{
		// $this->load->helper('form');
    	$this->load->library('form_validation');

    	/**
    	 * form_validation
    	 * @param name of the input field
    	 * @param name to be used in error message
    	 * @param rule
    	 */
    	$this->form_validation->set_rules(
			'category', 'Category', 'required|max_length[100]'
		);
		/*
    	$this->form_validation->set_rules(
			'image', 'Image', 'required'
		);
		*/
		$this->form_validation->set_rules(
			'description', 'Description', 'required'
		);
		
		if ( $this->input->post() ) {
			if ( $this->form_validation->run() ) {
				
				$config["upload_path"] = "./public/img/categories";
				$config["allowed_types"] = "png|jpg|jpeg";
//				$config["max_size"] = "10";
//				$config["max_width"] = "800";
//				$config["max_height"] = "600";
//				$config["encrypt_name"] = true;

				$this->load->library("upload", $config);
				
				if ( ! $this->upload->do_upload("image") ) {
					$error = ["error" => $this->upload->display_errors()];
					//$this->content = 'category/add'; // its your view name, change for as per requirement.
					//$this->layout('blue', $this->data);
				}
				/*
				echo "<pre>";
				print_r($this->upload);
				exit;
				*/
				$image = $this->upload->data();
				
				$file_name = $image["file_name"];
				
				$id = $this->category_model->create($file_name);
				
				$this->session->set_flashdata('css', 'success');
				$this->session->set_flashdata('mensaje', 'Registro creado exitosamente');
				redirect( base_url('category') );
			}
		}
		
    	$this->data = [
			"title"			=> "Create Category | Blonder413",
		];
/*
    	if ($this->form_validation->run() === FALSE) {
	        $this->load->view('article/add', $this->data);
	    } else {
	        $this->article_model->create();
	        $this->load->view('article/index');
	    }
*/
		$this->content = 'category/add'; // its your view name, change for as per requirement.
		$this->layout('blue', $this->data);
//		$this->load->view('article/add', $this->data);
	}
	
	
	/**
	 * borrar un registro de la base de datos
	 * @param int $id id de la categoría
	 * @param int $page número de página a la que debe redirigirse
	 */
	public function delete($id, $page)
	{
		$category = $this->category_model->find($id);
		
		if ( is_null($id) || count($category) == 0 ) {
			show_404();
		}
		
		$id = $this->category_model->delete($id);
		$this->session->set_flashdata('css', 'success');
		$this->session->set_flashdata('mensaje', 'Registro eliminado exitosamente');
		redirect( base_url("category/$page") );
	}
	/**
	 * @param int $id id de la categoría
	 * @param int $page número de la página a la que debe regresar
	 */
	public function edit($id, $page = null)
	{
		$category = $this->category_model->find($id);
		
		if ( is_null($id) || count($category) == 0 ) {
			show_404();
		}
		
		$this->form_validation->set_rules(
			'category', 'Category', 'required|max_length[100]'
		);
    	$this->form_validation->set_rules(
			'image', 'Image', 'required'
		);
		$this->form_validation->set_rules(
			'description', 'Description', 'required'
		);
		
		if ( $this->input->post() ) {
			if ( $this->form_validation->run() ) {
				$data = [
					"id"			=> $id,
					"category"			=> $this->input->post("category", true),
					"image"			=> $this->input->post("image", true),
					"description"	=> $this->input->post("description", true),
				];
				$id = $this->category_model->update($data);
				$this->session->set_flashdata('css', 'success');
				$this->session->set_flashdata('mensaje', 'Registro actualizado exitosamente');
				redirect( "category/index/" . $page );
			}
		}
		
		$this->data = [
			"page"			=> $page,
			"category"		=> $category,
			"title"			=> "Edit Category | Blonder413",
		];
		
		$this->content = 'category/edit'; // its your view name, change for as per requirement.
		$this->layout('blue', $this->data);
	}
	/**
	 * Lsitado de todas las categorías
	 */
	public function index()
	{
		if( $this->uri->segment(3) ) {
                $page = $this->uri->segment(3);
		} else {
			$page = 0;
		}
		
		$perPage = 2;
		
		$categories = $this->category_model->get( $page, $perPage );
		
		$config = config_pagination( base_url('category/index'), $this->category_model->count(), $perPage );
		
		$this->pagination->initialize($config);
		
		$this->data = [
			"page"			=> $page,
			'categories'	=> $categories,
			'title'			=> 'Categories | Blonder413',
			'total'			=> $this->category_model->count(),
		];
		
		$this->content = 'category/index'; // its your view name, change for as per requirement.
		$this->layout('blue', $this->data);
	}

}