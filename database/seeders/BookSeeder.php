<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'judul' => 'Laskar Pelangi',
            'pengarang' => 'Marcello Adrian',
            'penerbit' => 'Fiki Prihanjaya',
            'kategori' => 'non-fiksi',
            'deskripsi' => 'Laskar pelangi adalah novel terbaru 2021 yang sangat terkenal,laskar pelangi menceritakan tentang pelangi yang datang saat sore hari yang begitu indah',
        ]);
    }
}
