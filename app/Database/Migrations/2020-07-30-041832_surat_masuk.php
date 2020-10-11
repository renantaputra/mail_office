<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SuratMasuk extends Migration
{
	public function up()
	{
		$this->db->enableForeignKeyChecks();
		$this->forge->addField([
			'id_sm'            => [
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
			'no_surat'          => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'nama_pengirim'           => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'tgl_surat'          => [
				'type'              => 'DATE',
			],
			'perihal'           => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'deskripsi'           => [
				'type'              => 'VARCHAR',
				'constraint'        => '255',
			],
			'lampiran'           => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'dibaca'           => [
				'type'              => 'INT',
				'constraint'        => '1',
			]
		]);
		$this->forge->addKey('id_sm', TRUE);
		$this->forge->addForeignKey('id_user', 'user', 'id_user', 'CASCADE', 'CASCADE');
		$this->forge->createTable('surat_masuk');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
