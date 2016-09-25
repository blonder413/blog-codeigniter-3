<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_articles extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'number' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'null'          => TRUE,
                        ),
                        'title' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '150',
                        ),
                        'slug' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '150',
                        ),
                        'topic' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'detail' => array(
                                'type' => 'TEXT',
                        ),
                        'abstract' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '300',
                        ),
                        'video' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'type_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                        ),
                        'download' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null'  => TRUE,
                        ),
                        'category_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                        ),
                        'tags' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'status' => array(
                                'type' => 'BOOLEAN',
                        ),
                        'visit_counter' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                        ),
                        'download_counter' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                        ),
                        'course_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                        ),
                        'created_by' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                        ),
                        'created_at' => array(
                                'type' => 'DATETIME',
                        ),
                        'updated_by' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                        ),
                        'updated_at' => array(
                                'type' => 'DATETIME',
                        ),
                ));
                
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('articles');
        }

        public function down()
        {
                $this->dbforge->drop_table('articles');
        }
}