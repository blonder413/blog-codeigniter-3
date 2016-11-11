<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class MY_Controller extends CI_Controller 
    { 
        //set the class variable.
        public $template  = array();
        public $data      = array();
 
        /*Loading the default libraries, helper, language */
        public function __construct(){
            parent::__construct();
            $this->load->helper(array('form','language','url'));
            //$this->lang->load('english');
        }
 
        /*Front Page Layout*/
        public function layout($layout) {
            // making template and send data to view.
            // $this->template['header'] = $this->load->view('layouts/blue/header', $this->data, true);
            $this->template['content'] = $this->load->view($this->content, $this->data, true);
            $this->template['sidebar']   = $this->load->view('layouts/' . $layout . '/sidebar', $this->data, true);
            // $this->template['footer'] = $this->load->view('layouts/blue/footer', $this->data, true);
            $this->load->view('layouts/' . $layout . '/main', $this->template);
        }
    }