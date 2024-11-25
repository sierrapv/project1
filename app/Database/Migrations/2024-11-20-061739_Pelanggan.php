<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelanggan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pelanggan'      => [
                'type'          => 'int',
                'constraint'    => 11,
                'null'          => false,
                'auto increment'=> true,
            ],
            'nama_pelanggan'    => [
                'type'          => 'varchar',
                'constraint'    => 255,
            ],
            'alamat_pelanggan'  => [
                'type'          => 'text'
            ],
            'no_telp'           => [
                'type'          => 'varchar',
                'constraint'    => 15,
            ],
            'created_at'        => [
                'type'          => 'datetime',
            ],
            'updated_at'        => [
                'type'          => 'datetime',
            ]
            ]);

            $this->forge->addKey('id_pelanggan', true);
            $this->forge->createTable('pelanggan');
    }

    public function down()
    {
        $this->forge->dropTable('pelanggan');
    }
}
