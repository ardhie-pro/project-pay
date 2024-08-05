<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'siswa_id' => [
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
            'pass_siswa' => [
                'type' => 'TEXT',
                'function' => 'MD5',
                'null' => true,
            ],
            'pin' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'keterangan' => [
                'type' => 'ENUM',
                'constraint' => "'BLOKIR','ACTIVE'",
                'default' => 'ACTIVE',
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
        $this->forge->addKey('siswa_id', true);
        $this->forge->createTable('siswa');
    }

    public function down()
    {
        //
        $this->forge->dropTable('siswa');
    }
}
