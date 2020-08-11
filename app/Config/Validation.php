<?php

namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//Validation User
	public $user = [
		'username'     => 'required',
		'nama_lengkap'     => 'required',
		'email'     => 'required',
		'alamat'     => 'required',
		'telepon'     => 'required',
		'pengalaman'     => 'required',
		'status'     => 'required',
		'level'     => 'required',
	];

	public $user_errors = [
		'username' => [
			'required'    => 'username wajib diisi.',
		],
		'nama_lengkap'    => [
			'required' => 'nama lengkap wajib diisi.',
		],
		'email'    => [
			'required' => 'email wajib diisi.',
		],
		'alamat'    => [
			'required' => 'alamat wajib diisi.',
		],
		'telepon'    => [
			'required' => 'telepon wajib diisi.',
		],
		'pengalaman'    => [
			'required' => 'pengalaman wajib diisi.',
		],
		'status'    => [
			'required' => 'status wajib diisi.',
		],
		'level'    => [
			'required' => 'level wajib diisi.'
		]
	];

	//Validation bagian
	public $bagian = [
		'nama_bagian'     => 'required',
	];

	public $bagian_errors = [
		'nama_bagian' => [
			'required'    => 'nama bagian wajib diisi.',
		]
	];

	//Validation Surat Masuk
	public $surat_masuk = [
		'id_user'           => 'required',
		'no_surat'          => 'required',
		'tgl_surat'         => 'required',
		'perihal'           => 'required'
	];

	//Validation Surat Keluar
	public $surat_keluar = [
		'id_user'           => 'required',
		'no_surat'          => 'required',
		'tgl_surat'         => 'required',
		'perihal'           => 'required'
	];

	public $surat_keluar_errors = [
		'id_user'   => [
			'required'  => 'Nama Pengirim wajib diisi.',
		],
		'no_surat'  => [
			'required'  => 'No Surat wajib diisi.'
		],
		'tgl_surat' => [
			'required'  => 'Tanggal Surat wajib diisi.'
		],
		'perihal'   => [
			'required'  => 'Perihal wajib diisi.'
		],

	];


	//Login 
	public $authlogin = [
		'email'         => 'required|valid_email',
		'password'      => 'required'
	];

	public $authlogin_errors = [
		'email' => [
			'required'  => 'Email wajib diisi.',
			'valid_email'   => 'Email tidak valid'
		],
		'password' => [
			'required'  => 'Password wajib diisi.'
		]
	];


	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
