<?php
class User_model extends CI_Model{
  public $username;
  public $created_by;
  public $created_at;
  public $updated_by;
  public $updated_at;

  public function __construct()
  {
    parent::__construct();
//    $this->load->database();
  }

  //obtenemos el total de registros
  function count()
  {
    return $this->db->count_all('user');
    /*
    $query=$this->db
                ->from("article")
                ->count_all_results();
                return $query;
    */
  }
  
  public function delete($id)
  {
    $this->db->where("id", $id);
    $this->db->delete("user");
  }

  public function find($id = null)
  {
      if (is_null($id)) {
        $query = $this->db->get("user");

        return $query->result();
      } else {
        $this->db->where("id", $id);
        $query = $this->db->get("user");

        return $query->row();
      }
  }

  /**
   * $limit -> cantidad por páginas
   * $offset -> inicio de registro
   */
  public function get($limit = null, $offset = null)
  {
    if (is_null($limit) or is_null($offset)) {
      $query=$this->db
                ->from("user")
                ->order_by("id","desc")
                ->get();
                return $query->result();
    } else {
      $query=$this->db
                ->from("user")
                ->order_by("id","desc")
                ->limit($offset,$limit)
                ->get();
                return $query->result();
    }
  }

  public function add()
  {
    $this->load->view("user/add");
  }

  public function create()
  {
    $this->load->helper('url');

    $this->type       = $this->input->post('user_username');
    $this->created_at = time();
    $this->updated_at = time();


    $this->db->insert("user", $this);

    /*
    $sql = "INSERT INTO type VALUES($this->db->escape($this->type))";
    $this->db->query($sql );
    */

    redirect("user");
  }
  
  public function update()
  {
    $this->type = $_POST["user"];
    $this->updated_at = time();

//    $this->db->update("type", $this, array("id" => $_POST["id"]));
    $this->db->where("id", $id);
    $this->db->update("user", $this);
  }
}