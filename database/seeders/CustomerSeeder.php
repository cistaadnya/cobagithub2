<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('customer')->insert([
            'nama' => 'Cista Adnya',
            'alamat' => 'Jalan Kartika No. 12',
            'telp' => '081234567890',
            'jenis_kelamin' => 'Perempuan',
            'tgl_lahir' => '2002-04-01',
            'email' => 'cistaaaa@gmail.com',
            'username' => 'cista123'
        ]);
    }
}
