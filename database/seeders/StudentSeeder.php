<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('students')->insert([
            #SMKN 1 PURWOSARI
            [
                'nama_lengkap' => 'Arnindyo Kevin M',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'asal_sekolah' => 'SMK Negeri 1 Purwosari',
                'email' => 'arnindyokevin93@gmail.com',
            ],
            [
                'nama_lengkap' => 'M. Fikri Tri Wicaksono',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'asal_sekolah' => 'SMK Negeri 1 Purwosari',
                'email' => 'fikriwicaksono819@gmail.com',
            ],
            [
                'nama_lengkap' => 'M. Rahmandanu Galeano A',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'asal_sekolah' => 'SMK Negeri 1 Purwosari',
                'email' => 'galeakbarakbar@gmail.com',
            ],

            #SMKN 6 PALU
            [
                'nama_lengkap' => 'Cykal Persada',
                'jurusan' => 'Teknik Komputer dan jaringan',
                'asal_sekolah' => 'SMK Negeri 6 Palu',
                'email' => 'chykalpersada808@gmail.com',
            ],
            [
                'nama_lengkap' => 'Flora Pricilla',
                'jurusan' => 'Teknik Komputer dan jaringan',
                'asal_sekolah' => 'SMK Negeri 6 Palu',
                'email' => 'florapricilla0@gmail.com',
            ],
            [
                'nama_lengkap' => 'Kinaya Tsabita',
                'jurusan' => 'Teknik Komputer dan jaringan',
                'asal_sekolah' => 'SMK Negeri 6 Palu',
                'email' => 'kinaya.tsabita@gmail.com',
            ],
            [
                'nama_lengkap' => 'Moh. Fahrul',
                'jurusan' => 'Teknik Komputer dan jaringan',
                'asal_sekolah' => 'SMK Negeri 6 Palu',
                'email' => 'fahrulsetiawan304@gmail.com',
            ],
            [
                'nama_lengkap' => 'Reza Aditya',
                'jurusan' => 'Teknik Komputer dan jaringan',
                'asal_sekolah' => 'SMK Negeri 6 Palu',
                'email' => 'lexxa4799@gmail.com',
            ],
            [
                'nama_lengkap' => 'Ririn Putri Madani',
                'jurusan' => 'Teknik Komputer dan jaringan',
                'asal_sekolah' => 'SMK Negeri 6 Palu',
                'email' => 'ririnputrimadaniii@gmail.com',
            ],
            #SMKN 9 MALANG
            [
                'nama_lengkap' => 'Rachmat Fadilah Alim',
                'jurusan' => 'Animasi',
                'asal_sekolah' => 'SMK Negeri 9 Malang',
                'email' => 'rachmadfadilahalimalim@gmail.com',
            ],
            #SMKN 1 GEMPOL
            [
                'nama_lengkap' => 'Intan Khasanah',
                'jurusan' => 'Teknik Komputer dan jaringan',
                'asal_sekolah' => 'SMK Negeri 1 Gempol',
                'email' => 'intan98187@gmail.com',
            ],
            [
                'nama_lengkap' => 'Lely Ayu Sagita',
                'jurusan' => 'Teknik Komputer dan jaringan',
                'asal_sekolah' => 'SMK Negeri 1 Gempol',
                'email' => 'lelyayusagita2006@gmail.com',
            ],
            #SMKN PGRI SINGOSARI
            [
                'nama_lengkap' => 'Aminatul Kurnia',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'asal_sekolah' => 'SMK Negeri Pgri Singosari',
                'email' => 'nniiaakrnaa07@gmail.com',
            ],
            [
                'nama_lengkap' => 'Feliza Revalia Febiyani',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'asal_sekolah' => 'SMK Negeri Pgri Singosari',
                'email' => 'revaliafeliza@gmail.com',
            ],
            #SMKN 4 MANOKWARI
            [
                'nama_lengkap' => 'Alan Dwi Saputra',
                'jurusan' => 'Teknik Komputer dan jaringan',
                'asal_sekolah' => 'SMK Negeri 4 Manokwari',
                'email' => 'alandwisaputra84@gmail.com',
            ],
            [
                'nama_lengkap' => 'Andra Ahlul Naza Bade',
                'jurusan' => 'Teknik Komputer dan jaringan',
                'asal_sekolah' => 'SMK Negeri 4 Manokwari',
                'email' => 'andratkj95@gmail.com',
            ],
            [
                'nama_lengkap' => 'Ardika Windu Setyoko',
                'jurusan' => 'Teknik Komputer dan jaringan',
                'asal_sekolah' => 'SMK Negeri 4 Manokwari',
                'email' => 'aardika487@gmail.com',
            ],
            [
                'nama_lengkap' => 'Bayu Febryan Palolongi',
                'jurusan' => 'Teknik Komputer dan jaringan',
                'asal_sekolah' => 'SMK Negeri 4 Manokwari',
                'email' => 'bayu.palolongi06@gmail.com',
            ],
            [
                'nama_lengkap' => 'Febiola Vichtoria Korain',
                'jurusan' => 'Teknik Komputer dan jaringan',
                'asal_sekolah' => 'SMK Negeri 4 Manokwari',
                'email' => 'febyo6305@gmail.com',
            ],
            [
                'nama_lengkap' => 'Yesaya Sayori',
                'jurusan' => 'Teknik Komputer dan jaringan',
                'asal_sekolah' => 'SMK Negeri 4 Manokwari',
                'email' => 'yesayasayori32@gmail.com',
            ],
            #SMKN WACHID HASJIM MADURAN
            [
                'nama_lengkap' => 'M. Yazid Al Bustomy',
                'jurusan' => 'Teknik Komputer dan jaringan',
                'asal_sekolah' => 'SMK Negeri Wachid Hasjim Maduran',
                'email' => 'yazidalbustomy06@gmail.com',
            ],
            [
                'nama_lengkap' => 'Muhammad Rizky Maulana',
                'jurusan' => 'Teknik Komputer dan jaringan',
                'asal_sekolah' => 'SMK Negeri Wachid Hasjim Maduran',
                'email' => 'm.riskymaulana2007@gmail.com',
            ],
            #SMKN 1 LOBALAIN
            [
                'nama_lengkap' => 'Kheren Melita Elim',
                'jurusan' => 'Teknik Komputer dan jaringan',
                'asal_sekolah' => 'SMK Negeri 1 Lobalain',
                'email' => 'kherenelim37@gmail.com',
            ],
            [
                'nama_lengkap' => 'Nadia T Foeh',
                'jurusan' => 'Teknik Komputer dan jaringan',
                'asal_sekolah' => 'SMK Negeri 1 Lobalain',
                'email' => 'nadiafoeh@gmail.com',
            ],
            [
                'nama_lengkap' => 'Yaella Audryanna Fanggi',
                'jurusan' => 'Teknik Komputer dan jaringan',
                'asal_sekolah' => 'SMK Negeri 1 Lobalain',
                'email' => 'annatraveling640@gmail.com',
            ],
            #Universitas Brawijaya
            [
                'nama_lengkap' => 'Ararya Pramadani Alief Rahman',
                'jurusan' => 'Teknik Informatika',
                'asal_sekolah' => 'Universitas Brawijaya',
                'email' => 'araryap@gmail.com',
            ],
            [
                'nama_lengkap' => 'Azarya Santoso',
                'jurusan' => 'Teknik Informatika',
                'asal_sekolah' => 'Universitas Brawijaya',
                'email' => 'azaryasantoso22@gmail.com',
            ],
            [
                'nama_lengkap' => 'Azarya Santoso',
                'jurusan' => 'Teknik Informatika',
                'asal_sekolah' => 'Universitas Brawijaya',
                'email' => 'azaryasantoso22@gmail.com',
            ],
            // Tambahkan data siswa lainnya di sini
        ]);
    }
}

