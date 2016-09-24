<?php
class Article_model extends CI_Model{
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

  //obtenemos el total de registros
  function count()
  {
    return $this->db->count_all('article');
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
    $this->db->delete("article");
  }

  public function find($id = null)
  {
      if (is_null($id)) {
        $query = $this->db->get("article");

        return $query->result();
      } else {
        $this->db->where("id", $id);
        $query = $this->db->get("article");

        return $query->row();
      }
  }

   public function findBySlug($slug)
   {
      $this->db->where('seo_slug', $slug);
      $query = $this->db->get('article');
      return $query->row();
   }

  /**
   * $limit -> cantidad por páginas
   * $offset -> inicio de registro
   */
  public function get($limit = null, $offset = null)
  {
    if (is_null($limit) or is_null($offset)) {
      $query=$this->db
                ->from("article")
                ->order_by("id","desc")
                ->get();
                return $query->result();
    } else {
      $query=$this->db
                ->from("article")
                ->order_by("id","desc")
                ->limit($offset,$limit)
                ->get();
                return $query->result();
    }
  }

  public function add()
  {
    $this->load->view("article/add");
  }

  public function create()
  {
    $this->load->helper('url');

    $this->type       = $this->input->post('article_title');
    $this->seo_slug   = url_title($this->input->post('article_title'), 'dash', TRUE);
    $this->created_at = time();
    $this->updated_at = time();


    $this->db->insert("article", $this);

    /*
    $sql = "INSERT INTO type VALUES($this->db->escape($this->type))";
    $this->db->query($sql );
    */

    redirect("article");
  }
  
  public function update()
  {
    $this->type = $_POST["article"];
    $this->updated_at = time();

//    $this->db->update("type", $this, array("id" => $_POST["id"]));
    $this->db->where("id", $id);
    $this->db->update("article", $this);
  }
}