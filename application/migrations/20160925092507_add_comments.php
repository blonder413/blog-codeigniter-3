<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_comments extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '150',
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'web' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null'          => TRUE,
                        ),
                        'rel' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                        ),
                        'comment'       => array(
                                'type'  => 'TEXT'
                        ),
                        'date' => array(
                                'type' => 'DATETIME',
                        ),
                        'article_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                        ),
                        'status' => array(
                                'type' => 'BOOLEAN',
                                'default'       => FALSE,
                        ),
                        'client_ip' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '15',
                        ),
                        'client_port' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '5',
                        ),
                ));
                
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('comments');
        }

        public function down()
        {
                $this->dbforge->drop_table('comments');
        }
}