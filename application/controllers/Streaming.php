<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Streaming extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('streaming_model');
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
			'streaming_title', 'Title', 'required|max_length[100]'
		);
    	$this->form_validation->set_rules(
			'streaming_description', 'Description', 'required'
		);
		$this->form_validation->set_rules(
			'streaming_embed', 'Embed', 'required'
		);
		$this->form_validation->set_rules(
			'streaming_start', 'Start', 'required'
		);
		
		if ( $this->input->post() ) {
			if ( $this->form_validation->run() ) {
				$id = $this->streaming_model->create();
				$this->session->set_flashdata('css', 'success');
				$this->session->set_flashdata('mensaje', 'Registro creado exitosamente');
				redirect( base_url('streaming') );
			}
		}
		
    	$this->data = [
			"title"			=> "Create Streaming | Blonder413",
		];
/*
    	if ($this->form_validation->run() === FALSE) {
	        $this->load->view('article/add', $this->data);
	    } else {
	        $this->article_model->create();
	        $this->load->view('article/index');
	    }
*/
		$this->content = 'streaming/add'; // its your view name, change for as per requirement.
		$this->layout('blue', $this->data);
//		$this->load->view('article/add', $this->data);
	}
	
	
	/**
	 * @param int $id id del streaming
	 */
	public function delete($id)
	{
		$streaming = $this->streaming_model->find($id);
		
		if ( is_null($id) || count($streaming) == 0 ) {
			show_404();
		}
		
		$id = $this->streaming_model->delete($id);
		$this->session->set_flashdata('css', 'success');
		$this->session->set_flashdata('mensaje', 'Registro eliminado exitosamente');
		redirect( base_url('streaming') );
	}
	/**
	 * @param int $id id del streaming
	 */
	public function edit($id)
	{
		$streaming = $this->streaming_model->find($id);
		
		if ( is_null($id) || count($streaming) == 0 ) {
			show_404();
		}
		
		$this->form_validation->set_rules(
			'title', 'Title', 'required|max_length[100]'
		);
    	$this->form_validation->set_rules(
			'description', 'Description', 'required'
		);
		$this->form_validation->set_rules(
			'embed', 'Embed', 'required'
		);
		$this->form_validation->set_rules(
			'start', 'Start', 'required'
		);
		
		if ( $this->input->post() ) {
			if ( $this->form_validation->run() ) {
				$data = [
					"id"			=> $id,
					"title"			=> $this->input->post("title", true),
					"description"	=> $this->input->post("description", true),
					"embed"			=> $this->input->post("embed", true),
					"start"			=> $this->input->post("start", true),
				];
				$id = $this->streaming_model->update($data);
				$this->session->set_flashdata('css', 'success');
				$this->session->set_flashdata('mensaje', 'Registro actualizado exitosamente');
				redirect( base_url('streaming') );
			}
		}
		
		$this->data = [
			"streaming"		=> $streaming,
			"title"			=> "Create Streaming | Blonder413",
		];
		
		$this->content = 'streaming/edit'; // its your view name, change for as per requirement.
		$this->layout('blue', $this->data);
	}
	
	public function index()
	{
		$streamings = $this->streaming_model->get();
		
		$this->data = [
			'streamings'	=> $streamings,
			'title'			=> 'Streamings | Blonder413',
			'total'			=> $this->streaming_model->count(),
		];
		
		$this->content = 'streaming/index'; // its your view name, change for as per requirement.
		$this->layout('blue', $this->data);
	}

}