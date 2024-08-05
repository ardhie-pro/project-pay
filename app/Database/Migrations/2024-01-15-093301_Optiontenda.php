<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Optiontenda extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_user' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'adminwemart' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'Function' => null,
            ],
            'pass_user' => [
                'type' => 'TEXT',
                'function' => 'MD5',
                'null' => true,
            ],
            'saldo' => [
                'type' => 'TEXT',
                'function' => 'MD5',
                'null' => true,
            ],

            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'update_at DATETIME DEFAULT CURRENT_TIMESTAMP',

        ]);
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('admintenda');
    }

    public function down()
    {
        $this->forge->dropTable('admintenda');
    }
}
