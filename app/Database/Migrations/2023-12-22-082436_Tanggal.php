<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tanggal extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'tanggal_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'tanggal' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'update_at DATETIME DEFAULT CURRENT_TIMESTAMP',

        ]);
        $this->forge->addKey('tanggal_id', true);
        $this->forge->createTable('tanggal');
    }

    public function down()
    {
        $this->forge->dropTable('tanggal');
    }
}
