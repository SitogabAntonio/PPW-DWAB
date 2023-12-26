<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Contoh data Users
        $users = [
            [
                'name' => 'Bintang Margaretha Situmorang',
                'email' => 'bintangsitumorang7@gmail.com',
                'password' => 'aqchayankqm123',
                'no_telp' => '082167678293',
                'gender' => 'Wanita',
                'status' => 'Mahasiswa IT Del'
            ],
            [
                'name' => 'Aulia Rahman',
                'email' => 'auliarahman@gmail.com',
                'password' => 'rahasia123',
                'no_telp' => '081234567890',
                'gender' => 'Pria',
                'status' => 'Mahasiswa IT Del'
            ],
            [
                'name' => 'Dewi Lestari',
                'email' => 'dewilestari@gmail.com',
                'password' => 'lestaridewi12',
                'no_telp' => '087654321098',
                'gender' => 'Wanita',
                'status' => 'Mahasiswi IT Del'
            ],
            [
                'name' => 'Adi Pratama',
                'email' => 'adipratama@gmail.com',
                'password' => 'adipratama987',
                'no_telp' => '081112233445',
                'gender' => 'Pria',
                'status' => 'Mahasiswa IT Del'
            ],
            [
                'name' => 'Citra Amelia',
                'email' => 'citraamelia@gmail.com',
                'password' => 'citracantik456',
                'no_telp' => '089876543210',
                'gender' => 'Wanita',
                'status' => 'Mahasiswi IT Del'
            ],
            [
                'name' => 'Fahri Ramadhan',
                'email' => 'fahriramadhan@gmail.com',
                'password' => 'fahri1234',
                'no_telp' => '081919293949',
                'gender' => 'Pria',
                'status' => 'Mahasiswa IT Del'
            ],
            [
                'name' => 'Gita Permata',
                'email' => 'gitapermata@gmail.com',
                'password' => 'gitacantik789',
                'no_telp' => '083847362819',
                'gender' => 'Wanita',
                'status' => 'Mahasiswi IT Del'
            ],
            [
                'name' => 'Irfan Hakim',
                'email' => 'irfanhakim@gmail.com',
                'password' => 'irfanhakim56',
                'no_telp' => '081234567890',
                'gender' => 'Pria',
                'status' => 'Mahasiswa IT Del'
            ]
        ];

        // Masukkan data Users ke database
        foreach ($users as $user){
            User::create($user);
        }
    }
}

