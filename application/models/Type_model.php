<?php
class Type_model extends CI_Model{
  public $type;
  public $created_by;
  public $created_at;
  public $updated_by;
  public $updated_at;

  public function __construct()
  {
    parent::__construct();
//    $this->load->database();
  }
  
  public function delete($id)
  {
    $this->db->where("id", $id);
    $this->db->delete("type");
  }

  public function find($id = null)
  {
      if (is_null($id)) {
        $query = $this->db->get("type");

        return $query->result();
      } else {
        $this->db->where("id", $id);
        $query = $this->db->get("type");

        return $query->row();
      }
  }

  public function add()
  {
    $this->load->view("type/add");
  }

  public function create()
  {
    $this->type = $_POST["type"];
    $this->created_at = time();
    $this->updated_at = time();

    $this->db->insert("type", $this);

    /*
    $sql = "INSERT INTO type VALUES($this->db->escape($this->type))";
    $this->db->query($sql );
    */

    redirect("type");
  }

  public function update()
  {
    $this->type = $_POST["type"];
    $this->updated_at = time();

//    $this->db->update("type", $this, array("id" => $_POST["id"]));
    $this->db->where("id", $id);
    $this->db->update("type", $this);
  }
}
