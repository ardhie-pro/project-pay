<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Wemart extends Migration
{

    public function up()
    {
        $this->forge->addField([
            'pembayaran_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_siswa' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'nis_siswa' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'Function' => null,
            ],
            'pin' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'saldo' => [
                'type' => 'TEXT',
                'null' => true,
            ],

            'created DATE DEFAULT CURRENT_TIMESTAMP',
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'update_at DATETIME DEFAULT CURRENT_TIMESTAMP',

        ]);
        $this->forge->addKey('pembayaran_id', true);
        $this->forge->createTable('historipembayaran');
    }

    public function down()
    {
        //
        $this->forge->dropTable('historipembayaran');
    }
}
