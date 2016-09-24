<?php
class Type extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("type_model");
  }

  public function delete($id)
  {
    $this->type_model->delete($id);
    redirect("type");
  }

  public function index()
  {
    // $model = $this->type_model->find();
    $this->load->view("type/index", array("model" => $model));
    // $this->load->view("layouts/main");
  }

  /**
   * view a detail of type
   * $id integer id of type
   */
  public function view($id)
  {

  }
}
