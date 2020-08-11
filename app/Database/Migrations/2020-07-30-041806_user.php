<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_user'            => [
				'type'              => 'BIGINT',
				'constraint'        => 20,
				'unsigned'          => TRUE,
				'auto_increment'    => TRUE
			],
			'username'              => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'nama_lengkap'                  => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'email'                 => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'password'              => [
				'type'              => 'VARCHAR',
				'constraint'        => '255',
			],
			'alamat'              => [
				'type'              => 'VARCHAR',
				'constraint'        => '255',
			],
			'telepon'              => [
				'type'              => 'VARCHAR',
				'constraint'        => '20',
			],
			'pengalaman'              => [
				'type'              => 'VARCHAR',
				'constraint'        => '255',
			],
			'status'                => [
				'type'              => 'ENUM',
				'constraint'        => "'Active','Inactive'",
				'default'           => 'Active'
			],
			'level'                 => [
				'type'              => 'ENUM',
				'constraint'        => "'Super_Admin','Admin','User'",
				'default'           => 'User'
			],
		]);
		$this->forge->addKey('id_user', TRUE);
		$this->forge->createTable('user');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
