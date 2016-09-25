<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_streamings extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'title' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'description' => array(
                                'type' => 'TEXT',
                        ),
                        'embed' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                                'null' => TRUE,
                        ),
                        'start' => array(
                                'type' => 'DATETIME',
                        ),
                        'created_by' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                        ),'created_at' => array(
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
                $this->dbforge->create_table('streamings');
        }

        public function down()
        {
                $this->dbforge->drop_table('streamings');
        }
}