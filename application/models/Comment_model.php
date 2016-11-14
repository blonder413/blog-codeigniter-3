<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	/**
     * count the comments for an article
     * @param int article_id
     * @return int total of comments for an article
     */
	public function countComments($article_id)
	{
		$query=$this->db
                ->from("comments")
                ->where("article_id = $article_id")
                ->count_all_results();
                return $query;
	}

}