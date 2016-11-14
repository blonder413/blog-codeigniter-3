<?php
class Category_model extends CI_Model {
	public $category;
  public $slug;
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
    return $this->db->count_all('categories');
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
    $this->db->delete("categories");
  }

  public function find($id = null)
  {
      if (is_null($id)) {
        $query = $this->db->get("categories");

        return $query->result();
      } else {
        $this->db->where("id", $id);
        $query = $this->db->get("categories");

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
                ->from("categories")
                ->order_by("category","asc")
                ->get();
                return $query->result();
    } else {
      $query=$this->db
                ->from("categories")
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

  public function create($image)
  {
    $this->category			= $this->input->post('category');
		$this->slug					= $this->input->post('category');
    $this->image				= $image;
		$this->description	= $this->input->post('description');
		$this->created_by		= 1;
    $this->created_at 	= date("Y-m-d H:i:s");
		$this->updated_by		= 1;
    $this->updated_at 	= date("Y-m-d H:i:s");
/*
		echo "<pre>";
		print_r($this);
		exit;
*/		
    $this->db->insert("categories", $this);
    return $this->db->insert_id();
  }
  /**
   * actualiza una categoría
   * @param int $category datos de la categoría
   */
  public function update($category = array())
	{
		$this->db->where("id", $category["id"]);
		$this->db->update("categories", $category);
	}
}
