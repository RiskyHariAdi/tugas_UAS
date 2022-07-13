<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Antrian extends Migration
{
	public function up()
	{
		
		$this->forge->addField([
        'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
        ],
        'tanggal'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
        ],
        'pelayanan_id' => [
                'type'           => 'INT',
                'constraint'     => '11',
        ],
        'keterangan' => [
                'type'           => 'TEXT',
                'null'           => TRUE,
        ],
    ]);
    $this->forge->addKey('id', TRUE);
    $this->forge->createTable('loket');
	}

	public function down()
	{
		//
	}
}
