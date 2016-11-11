<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
	
	public function add()
	{
		$this->load->helper('form');
    	$this->load->library('form_validation');

    	/**
    	 * form_validation
    	 * @param name of the input field
    	 * @param name to be used in error message
    	 * @param rule
    	 */
    	$this->form_validation->set_rules('article_title', 'Title', 'required');
    	$this->form_validation->set_rules('article_detail', 'Detail', 'required');

    	$this->data = [
			"title"			=> "Create Article | Blonder413",
		];

    	if ($this->form_validation->run() === FALSE) {
	        $this->load->view('article/add', $this->data);
	    } else {
	        $this->article_model->create();
	        $this->load->view('article/index');
	    }

//		$this->content = 'article/add'; // its your view name, change for as per requirement.
//		$this->layout($this->data);
//		$this->load->view('article/add', $this->data);
	}

}