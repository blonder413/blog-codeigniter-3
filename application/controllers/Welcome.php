<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('article_model');
		$this->load->model('category_model');
		$this->load->model('comment_model');
		$this->load->model('user_model');
		$this->load->library('pagination');

		/**
         * creamos el código de la paginación
         * */
		if($this->uri->segment(3)) {
                $pagina=$this->uri->segment(3);
		} else {
			$pagina=0;
		}
        $porpagina = 20;
        $articles = $this->article_model->get($pagina,$porpagina);
        $cuantos = $this->article_model->count();
        
        $config['base_url'] = base_url().'welcome/index/';
        $config['total_rows'] = $cuantos;
        $config['per_page'] = $porpagina;
        $config['uri_segment'] = '3';
        $config['num_links'] = '4';
        $config['first_link'] = 'Primero';
        $config['next_link'] = 'Siguiente';
        $config['prev_link'] = 'Anterior';
        $config['last_link'] = 'Ultimo';
        
        $config["num_tag_open"] = "<li>";
        $config["num_tag_close"] = "</li>";
        $config["cur_tag_open"] = "<li class='active'><a><strong>";
        $config["cur_tag_close"] = "</a></strong></li>";
        $config["first_tag_open"] = "<li>";
        $config["first_tag_close"] = "</li>";
        $config["last_tag_open"] = "<li>";
        $config["last_tag_close"] = "</li>";
        $config["prev_tag_open"] = "<li>";
        $config["prev_tag_close"] = "</li>";
        $config["next_tag_open"] = "<li>";
        $config["next_tag_close"] = "</li>";
        
        $this->pagination->initialize($config);

        $categories = $this->category_model->get();
		
		$this->data = [
			"articles" 		=> $articles,
			"cuantos"		=> $cuantos,
			"categories"	=> $categories,
			"title"			=> "Blonder413 | Aprendizaje Dinámico",
		];

		$this->content = 'welcome/index'; // its your view name, change for as per requirement.
        $this->layout($this->data);
	}
	//-----------------------------------------------------------------------------------------------------------------
	public function article($slug)
	{
		$this->load->model('article_model');
		$this->load->model('category_model');
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
        $this->layout($this->data);

	}
}
