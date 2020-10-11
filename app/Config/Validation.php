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
		'username'          => 'required|alpha_dash|is_unique[user.username]|min_length[8]|max_length[35]',
		'nama_lengkap'      => 'required|alpha_numeric_space|min_length[3]|max_length[35]',
		'email'             => 'required|valid_email|is_unique[user.email]',
		'password'          => 'required|string|min_length[8]|max_length[35]',
		'alamat'     		=> 'required',
		'telepon'     		=> 'required',
		'pengalaman'     	=> 'required',
		'status'     		=> 'required',
		'level'     		=> 'required',
	];

	public $user_errors = [
		'username' => [
			'required'      => 'Username wajib diisi',
			'alpha_dash' => 'Username hanya boleh berisi huruf, angka, dan karakter',
			'is_unique'     => 'Username sudah terdaftar',
			'min_length'    => 'Username minimal 8 karakter',
			'max_length'    => 'Username maksimal 35 karakter'
		],
		'nama_lengkap' => [
			'required'              => 'Name wajib diisi',
			'alpha_numeric_spaces'  => 'Name hanya boleh berisi huruf, angka dan spasi',
			'min_length'            => 'Name minimal 3 karakter',
			'max_length'            => 'Name maksimal 35 karakter'
		],
		'email' => [
			'required'      => 'Email wajib diisi',
			'valid_email'   => 'Email tidak valid',
			'is_unique'     => 'Email sudah terdaftar'
		],
		'password' => [
			'required'      => 'Password wajib diisi',
			'string'        => 'Password hanya boleh berisi huruf, angka, spasi dan karakter lain',
			'min_length'    => 'Password minimal 8 karakter',
			'max_length'    => 'Password maksimal 35 karakter'
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
	// public $surat_keluar = [
	// 	'id_user'           => 'required',
	// 	'no_surat'          => 'required',
	// 	'tgl_surat'         => 'required',
	// 	'perihal'           => 'required',
	// 	'deskripsi'			=> 'required',
	// 	'lampiran'			=> 'uploaded[lampiran]|max_size[51200]'
	// ];

	// public $surat_keluar_errors = [
	// 	'id_user'   => [
	// 		'required'  => 'Nama Pengirim wajib diisi.',
	// 	],
	// 	'no_surat'  => [
	// 		'required'  => 'No Surat wajib diisi.'
	// 	],
	// 	'tgl_surat' => [
	// 		'required'  => 'Tanggal Surat wajib diisi.'
	// 	],
	// 	'perihal'   => [
	// 		'required'  => 'Perihal wajib diisi.'
	// 	],
	// 	'deskripsi' => [
	// 		'required'  => 'Deskripsi wajib diisi.'
	// 	],
	// 	'lampiran'	=> [
	// 		'uploaded' => 'Lampiran harus disertakan',
	// 		'max_size' => 'Ukuran lampiran tidak lebih dari 50 MB',
	// 	]
	// ];



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

	//Register
	public $authregister = [
		'email'             => 'required|valid_email|is_unique[user.email]',
		'username'          => 'required|alpha_dash|is_unique[user.username]|min_length[8]|max_length[35]',
		'nama_lengkap'      => 'required|alpha_numeric_space|min_length[3]|max_length[35]',
		'password'          => 'required|string|min_length[8]|max_length[35]',
		'confirm_password'  => 'required|string|matches[password]|min_length[8]|max_length[35]',
	];

	public $authregister_errors = [
		'email' => [
			'required'      => 'Email wajib diisi',
			'valid_email'   => 'Email tidak valid',
			'is_unique'     => 'Email sudah terdaftar'
		],
		'username' => [
			'required'      => 'Username wajib diisi',
			'alpha_dash' => 'Username hanya boleh berisi huruf, angka, dan karakter',
			'is_unique'     => 'Username sudah terdaftar',
			'min_length'    => 'Username minimal 3 karakter',
			'max_length'    => 'Username maksimal 35 karakter'
		],
		'nama_lengkap' => [
			'required'              => 'Name wajib diisi',
			'alpha_numeric_spaces'  => 'Name hanya boleh berisi huruf, angka dan spasi',
			'min_length'            => 'Name minimal 3 karakter',
			'max_length'            => 'Name maksimal 35 karakter'
		],
		'password' => [
			'required'      => 'Password wajib diisi',
			'string'        => 'Password hanya boleh berisi huruf, angka, spasi dan karakter lain',
			'min_length'    => 'Password minimal 8 karakter',
			'max_length'    => 'Password maksimal 35 karakter'
		],
		'confirm_password' => [
			'required'      => 'Konfirmasi password wajib diisi',
			'string'        => 'Konfirmasi password hanya boleh berisi huruf, angka, spasi dan karakter lain',
			'matches'       => 'Konfirmasi password tidak sama dengan password',
			'min_length'    => 'Konfirmasi password minimal 8 karakter',
			'max_length'    => 'Konfirmasi password maksimal 35 karakter'
		]
	];


	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
