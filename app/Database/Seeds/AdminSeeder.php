<?php

namespace App\Database\Seeds;

class AdminSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'username'  => 'm_syaekhoni',
            'nama_lengkap'      => 'Muhammad Syaekhoni',
            'email'     => 'Syaekhonimuhammad@gmail.com',
            'password'  => '12345678',
            'alamat'  => 'Tulungagung',
            'telepon'  => '085649750587',
            'pengalaman'  => 'Fresh Graduate',
            'status'    => 'Active',
            'level'     => 'Super_Admin'
        ];
        $this->db->table('user')->insert($data);
    }
}
