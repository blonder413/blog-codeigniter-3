<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_courses extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'course' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'slug' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'description' => array(
                                'type' => 'TEXT',
                        ),
                        'image' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
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
                $this->dbforge->create_table('courses');
        }

        public function down()
        {
                $this->dbforge->drop_table('courses');
        }
}