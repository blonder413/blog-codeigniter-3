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
    	//$this->form_validation->set_rules('article_title', 'Title', 'required');
    	//$this->form_validation->set_rules('article_detail', 'Detail', 'required');
		
		if ( $this->input->post() ) {
			if ( $this->form_validation->run('add_article') ) {
				$id = $this->article_model->create();
				$this->session->set_flashdata('success', 'Registro creado exitosamente');
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
	
	public function index()
	{
		$articles = $this->article_model->get();
		
		$this->data = [
			'articles'	=> $articles,
			'title'		=> 'Articles | Blonder413',
			'total'			=> $this->article_model->count(),
		];
		
		$this->content = 'article/index'; // its your view name, change for as per requirement.
		$this->layout('blue', $this->data);
	}

}