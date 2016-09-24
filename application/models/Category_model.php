<?php
class Category_model extends CI_Model{
  public $category;
  public $seo_slug;
  public $image;
  public $description;
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
    return $this->db->count_all('category');
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
    $this->db->delete("category");
  }

  public function find($id = null)
  {
      if (is_null($id)) {
        $query = $this->db->get("category");

        return $query->result();
      } else {
        $this->db->where("id", $id);
        $query = $this->db->get("category");

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
                ->from("category")
                ->order_by("category","asc")
                ->get();
                return $query->result();
    } else {
      $query=$this->db
                ->from("category")
                ->order_by("category","asc")
                ->limit($offset,$limit)
                ->get();
                return $query->result();
    }
  }

  public function add()
  {
    $this->load->view("category/add");
  }

  public function create()
  {
    $this->type = $_POST["category"];
    $this->created_at = time();
    $this->updated_at = time();

    $this->db->insert("category", $this);

    /*
    $sql = "INSERT INTO type VALUES($this->db->escape($this->type))";
    $this->db->query($sql );
    */

    redirect("article");
  }

  public function update()
  {
    $this->type = $_POST["category"];
    $this->updated_at = time();

//    $this->db->update("type", $this, array("id" => $_POST["id"]));
    $this->db->where("id", $id);
    $this->db->update("category", $this);
  }
}
