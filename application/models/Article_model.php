<?php
class Article_model extends CI_Model{
  
  public $number;
  public $title;
  public $slug;
  public $topic;
  public $detail;
  public $abstract;
  public $video;
  public $type_id;
  public $download;
  public $category_id;
  public $tags;
  public $status;
  public $course_id;
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
    return $this->db->count_all('articles');
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
    $this->db->delete("articles");
  }

  public function find($id = null)
  {
      if (is_null($id)) {
        $query = $this->db->get("articles");

        return $query->result();
      } else {
        $this->db->where("id", $id);
        $query = $this->db->get("articles");

        return $query->row();
      }
  }

   public function findBySlug($slug)
   {
      $this->db->where('slug', $slug);
      $query = $this->db->get('articles');
      return $query->row();
   }

  /**
   * $limit -> cantidad por páginas
   * $offset -> inicio de registro
   */
  public function get($limit = null, $offset = null)
  {
    if (is_null($limit) or is_null($offset)) {
      $query = $this->db
                ->from("articles")
                ->order_by("id","desc")
                ->get();
                return $query->result();
    } else {
      $query = $this->db
                ->from("articles")
                ->order_by("id","desc")
                ->limit($offset,$limit)
                ->get();
      //echo $this->db->last_query();
                return $query->result();
    }
  }

  /**
   * insert a new register in the database
   * @return integer id of the register
   */
  public function create()
  {
    $this->load->helper('url');

    $this->number       = $this->input->post("number") ? $this->input->post("number") : null;
    $this->title        = $this->input->post('title');
    $this->slug         = url_title($this->input->post('title'), 'dash', TRUE);
    $this->topic        = $this->input->post("topic");
    $this->detail       = $this->input->post('detail');
    $this->abstract     = $this->input->post("abstract");
    $this->video        = $this->input->post("video");
    $this->type_id      = (int) $this->input->post("type_id");
    $this->download     = $this->input->post("download");
    $this->category_id  = $this->input->post("category_id");
    $this->tags         = $this->input->post("tags");
    $this->status       = true;
    $this->course_id    = (int) $this->input->post("course_id");
    $this->created_by   = 1;
    $this->created_at   = date("Y-m-d H:i:s");
    $this->updated_by   = 1;
    $this->updated_at   = date("Y-m-d H:i:s");

    $this->db->insert("articles", $this);
    return $this->db->insert_id();
    
    /*
    $sql = "INSERT INTO type VALUES($this->db->escape($this->type))";
    $this->db->query($sql );
    */
  }
  
  public function update($id)
  {
    $this->number       = $this->input->post("number") ? $this->input->post("number") : null;
    $this->title        = $this->input->post('title');
    $this->slug         = url_title($this->input->post('title'), 'dash', TRUE);
    $this->topic        = $this->input->post("topic");
    $this->detail       = $this->input->post('detail');
    $this->abstract     = $this->input->post("abstract");
    $this->video        = $this->input->post("video");
    $this->type_id      = (int) $this->input->post("type_id");
    $this->download     = $this->input->post("download");
    $this->category_id  = $this->input->post("category_id");
    $this->tags         = $this->input->post("tags");
    $this->status       = true;
    $this->course_id    = (int) $this->input->post("course_id");
    $this->created_by   = 1;
    $this->created_at   = date("Y-m-d H:i:s");
    $this->updated_by   = 1;
    $this->updated_at   = date("Y-m-d H:i:s");

//    $this->db->update("type", $this, array("id" => $_POST["id"]));
    $this->db->where("id", $id);
    $this->db->update("articles", $this);
  }
}