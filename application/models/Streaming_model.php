<?php
class Streaming_model extends CI_Model{
  public $title;
  public $description;
	public $embed;
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
    return $this->db->count_all('streamings');
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
    $this->db->delete("streamings");
  }

  public function find($id = null)
  {
      if (is_null($id)) {
        $query = $this->db->get("streamings");

        return $query->result();
      } else {
        $this->db->where("id", $id);
        $query = $this->db->get("streamings");

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
      $query = $this->db
                ->from("streamings")
                ->order_by("id","desc")
                ->get();
                return $query->result();
    } else {
      $query = $this->db
                ->from("streamings")
                ->order_by("id","desc")
                ->limit($offset,$limit)
                ->get();
      //echo $this->db->last_query();
                return $query->result();
    }
  }

  public function create()
  {
    $this->title      	= $this->input->post('streaming_title');
    $this->description	= $this->input->post('streaming_description');
		$this->embed				= $this->input->post("streaming_embed");
		$this->start		= $this->input->post("streaming_start");
		$this->created_by	= 1;
    $this->created_at 	= date("Y-m-d H:i:s");
		$this->updated_by	= 1;
    $this->updated_at 	= date("Y-m-d H:i:s");


    $this->db->insert("streamings", $this);
    return $this->db->insert_id();
    
    /*
    $sql = "INSERT INTO type VALUES($this->db->escape($this->type))";
    $this->db->query($sql );
    */

    // redirect("article");
  }
  
	public function update($streaming = array())
	{
		$this->db->where("id", $streaming["id"]);
		$this->db->update("streamings", $streaming);
	}
}