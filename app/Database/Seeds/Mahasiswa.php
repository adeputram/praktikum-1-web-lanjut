<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm'           => '2017051063',
                'nama'          => 'Arya affanda',
                'alamat'        => 'Panjang, Bandar Lampung',
                'created_at'    =>  Time::now()
            ],
            [
                'npm'           => '2017051033',
                'nama'          => 'Arthur Pendragon',
                'alamat'        => 'Camelot',
                'created_at'    =>  Time::now()
            ],
            [
                'npm'           => '2017051070',
                'nama'          => 'Sherlock Holmes',
                'alamat'        => 'London',
                'created_at'    =>  Time::now()
            ],

        ];


        // Using Query Builder
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
