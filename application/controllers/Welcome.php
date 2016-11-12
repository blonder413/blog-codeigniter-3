<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('category_model');
	}
	//-----------------------------------------------------------------------------------------------------------------
	public function about()
	{
		//$this->load->model('category_model');
		
		$categories = $this->category_model->get();
		
		$this->data = [
			'categories'	=> $categories,
			'title'			=> 'Acerca | Blonder413',
		];
		$this->content = 'welcome/about';
		$this->layout("blue", $this->data);
	}
	//-----------------------------------------------------------------------------------------------------------------
	public function article($slug)
	{
		$this->load->model('article_model');
//		$this->load->model('category_model');
		$this->load->model('comment_model');

		if (empty($slug) or is_null($slug)) {
			show_404();
		}

		$article 	= $this->article_model->findBySlug($slug);
		$categories = $this->category_model->get();

		$this->data = [
			"article" 		=> $article,
			"categories"	=> $categories,
			"title"			=> "$article->title | Blonder413",
		];

		$this->content = 'welcome/article'; // its your view name, change for as per requirement.
        $this->layout("blue", $this->data);

	}
	//-----------------------------------------------------------------------------------------------------------------
	public function index()
	{
		$this->load->model('article_model');
		//$this->load->model('category_model');
		$this->load->model('comment_model');
		$this->load->model('user_model');
		$this->load->library('pagination');

		if($this->uri->segment(3)) {
                $page = $this->uri->segment(3);
		} else {
			$page = 0;
		}
        $per_page = 20;
        $articles = $this->article_model->get( $page, $per_page );
        $count = $this->article_model->count();
		
		$config = config_pagination( base_url("welcome/index/"), $count, $per_page );
        
        $this->pagination->initialize($config);

        $categories = $this->category_model->get();
		
		$this->data = [
			"articles" 		=> $articles,
			"count"			=> $count,
			"categories"	=> $categories,
			"title"			=> "Blonder413 | Aprendizaje Dinámico",
		];

		$this->content = 'welcome/index'; // its your view name, change for as per requirement.
        $this->layout("blue", $this->data);
	}
	//-----------------------------------------------------------------------------------------------------------------
	public function login()
	{
		$categories = $this->category_model->get();
		
		$this->data = [
			"categories"	=> $categories,
			"title"			=> "Login | Blonder413",
		];

		$this->content = 'welcome/login'; // its your view name, change for as per requirement.
        $this->layout("blue", $this->data);
	}
	//-----------------------------------------------------------------------------------------------------------------
	public function signup()
	{
		$categories = $this->category_model->get();
		
		$this->data = [
			
			"categories"	=> $categories,
			"title"			=> "Signup | Blonder413",
		];

		$this->content = 'welcome/signup'; // its your view name, change for as per requirement.
        $this->layout("blue", $this->data);
	}
}
