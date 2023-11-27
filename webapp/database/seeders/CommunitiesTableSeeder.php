<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Community;

class CommunitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Contoh data komunitas
        $communities = [
            [
                'community_name' => 'Basket Laguboti',
                'profile_path' => 'path/ke/foto_profil_komunitas_basket.jpg',
                'deskripsi' => 'Komunitas Basket Laguboti adalah tempat berkumpulnya pecinta olahraga basket di kota Laguboti. Kami menyediakan fasilitas bermain basket, pelatihan, dan turnamen untuk semua tingkat keahlian.'
            ],
            [
                'community_name' => 'Band Harmoni',
                'profile_path' => 'path/ke/foto_profil_komunitas_musik.jpg',
                'deskripsi' => 'Band Harmoni adalah komunitas musik yang berfokus pada penciptaan dan penampilan musik live. Bergabunglah dengan kami untuk mengeksplorasi dunia musik bersama!'
            ],
            [
                'community_name' => 'Foto Kreatif',
                'profile_path' => 'path/ke/foto_profil_komunitas_fotografi.jpg',
                'deskripsi' => 'Foto Kreatif adalah komunitas fotografi yang membawa para fotografer amatir dan profesional bersama-sama. Mari bagikan karya kita dan terus mengembangkan keahlian fotografi!'
            ],
            [
                'community_name' => 'Jelajah Dunia',
                'profile_path' => 'path/ke/foto_profil_komunitas_traveling.jpg',
                'deskripsi' => 'Jelajah Dunia adalah komunitas untuk para pecinta traveling. Bagikan pengalaman perjalanan, rekomendasi destinasi, dan temukan teman-teman baru untuk menjelajahi dunia bersama!'
            ],
            [
                'community_name' => 'Kuliner Enak',
                'profile_path' => 'path/ke/foto_profil_komunitas_kuliner.jpg',
                'deskripsi' => 'Kuliner Enak adalah tempat berkumpulnya para foodie dan pecinta kuliner. Mari eksplorasi berbagai tempat makan seru dan diskusikan kegemaran kuliner kita bersama!'
            ],
        ];

        // Menyimpan data komunitas ke dalam database
        foreach ($communities as $community){
            Community::create($community);
        }
    }
}

