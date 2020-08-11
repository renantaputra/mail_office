<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bagian extends Migration
{
	public function up()
	{
		$this->db->enableForeignKeyChecks();
		$this->forge->addField([
			'id_bagian'            => [
				'type'              => 'BIGINT',
				'constraint'        => 20,
				'unsigned'          => TRUE,
				'auto_increment'    => TRUE
			],
			'id_user'           => [
				'type'              => 'BIGINT',
				'constraint'        => 20,
				'unsigned'          => TRUE,
				'null'              => TRUE
			],
			'nama_bagian'          => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
		]);
		$this->forge->addKey('id_bagian', TRUE);
		$this->forge->addForeignKey('id_user', 'user', 'id_user', 'CASCADE', 'CASCADE');
		$this->forge->createTable('bagian');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
