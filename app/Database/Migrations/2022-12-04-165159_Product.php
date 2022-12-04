<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'code_language' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'code_category' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'code_product' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'name' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'img' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'status' => [
                'type' => 'SMALLINT',
                'constraint' => '6',
                'default' => 0,
                'null' => true
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'SMALLINT',
                'constraint' => 6,
                'default' => 0,
                'null' => true,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('product');
    }

    public function down()
    {
        $this->forge->dropTable('product');
    }
}
