<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('article_model');
	}
	
	public function add()
	{
		// $this->load->helper('form');
    	// $this->load->library('form_validation');

    	/**
    	 * form_validation
    	 * @param name of the input field
    	 * @param name to be used in error message
    	 * @param rule
    	 */
    	
		$this->form_validation->set_rules(
			'title', 'Title', 'required|max_length[100]'
		);
		$this->form_validation->set_rules(
			'detail', 'Detail', 'required|max_length[100]'
		);
		$this->form_validation->set_rules(
			'abstract', 'Abstract', 'required'
		);
		$this->form_validation->set_rules(
			'type_id', 'Type', 'required'
		);
		$this->form_validation->set_rules(
			'category_id', 'Category', 'required'
		);
		$this->form_validation->set_rules(
			'tags', 'Tags', 'required'
		);
		
		if ( $this->input->post() ) {
			if ( $this->form_validation->run() ) {
				$id = $this->article_model->create();
				$this->session->set_flashdata('css', 'success');
				$this->session->set_flashdata('mensaje', 'Registro creado exitosamente');
				redirect( base_url('article') );
			}
		}
		
    	$this->data = [
			"title"			=> "Create Article | Blonder413",
		];
/*
    	if ($this->form_validation->run() === FALSE) {
	        $this->load->view('article/add', $this->data);
	    } else {
	        $this->article_model->create();
	        $this->load->view('article/index');
	    }
*/
		$this->content = 'article/add'; // its your view name, change for as per requirement.
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
		$article = $this->article_model->find($id);
		
		if ( is_null($id) || count($article) == 0 ) {
			show_404();
		}
		
		$id = $this->article_model->delete($id);
		$this->session->set_flashdata('css', 'success');
		$this->session->set_flashdata('mensaje', 'Registro eliminado exitosamente');
		redirect( base_url("article/index/$page") );
	}
	/**
	 * @param int $id id de la categoría
	 * @param int $page número de la página a la que debe regresar
	 */
	public function edit($id, $page = null)
	{
		$article = $this->article_model->find($id);
		
		if ( is_null($id) || count($article) == 0 ) {
			show_404();
		}
		
		$this->form_validation->set_rules(
			'title', 'Title', 'required|max_length[100]'
		);
		$this->form_validation->set_rules(
			'detail', 'Detail', 'required|max_length[100]'
		);
		$this->form_validation->set_rules(
			'abstract', 'Abstract', 'required'
		);
		$this->form_validation->set_rules(
			'type_id', 'Type', 'required'
		);
		$this->form_validation->set_rules(
			'category_id', 'Category', 'required'
		);
		$this->form_validation->set_rules(
			'tags', 'Tags', 'required'
		);
		
		if ( $this->input->post() ) {
			if ( $this->form_validation->run() ) {
				$id = $this->article_model->update($id);
				$this->session->set_flashdata('css', 'success');
				$this->session->set_flashdata('mensaje', 'Registro editado exitosamente');
				redirect( base_url('article') );
			}
		}
		
    	$this->data = [
			"article"		=> $article,
			"page"			=> $page,
			"title"			=> "Edit Article | Blonder413",
		];

		$this->content = 'article/edit'; // its your view name, change for as per requirement.
		$this->layout('blue', $this->data);
	}
	public function index()
	{
		if( $this->uri->segment(3) ) {
                $page = $this->uri->segment(3);
		} else {
			$page = 0;
		}
		
		$perPage = 20;
		
		$articles = $this->article_model->get( $page, $perPage );
		
		$config = config_pagination( base_url('article/index'), $this->article_model->count(), $perPage );
		
		$this->pagination->initialize($config);
		
		
		$this->data = [
			'articles'	=> $articles,
			"page"			=> $page,
			'title'		=> 'Articles | Blonder413',
			'total'			=> $this->article_model->count(),
		];
		
		$this->content = 'article/index'; // its your view name, change for as per requirement.
		$this->layout('blue', $this->data);
	}

}