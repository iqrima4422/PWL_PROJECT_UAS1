<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DiskonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diskon')->insert([
            [
                'product' => 'Minyak Goreng ',
                'kategori' => 'Bahan Dapur',
                'merk' => 'Sania Minyak Goreng 2L',
                'stok' => '10',
                'harga' => 40000,
                'gambar' =>'img/categories/sania.png',
                'supplier_id' => 1,
                'harga_asli' => '50000',
                
            ],
            [
                'product' => 'Sabun Mandi',
                'kategori' => 'Perlengkapan Mandi',
                'merk' => 'Dettol Sabun Cair',
                'stok' => '10',
                'harga' => 14400,
                'gambar' =>'img/categories/dettol.png',
                'supplier_id' => 2,
                'harga_asli' => '18000',
            ],
            [
                'product' => 'Sabun Mandi',
                'kategori' => 'Perlengkapan Mandi',
                'merk' => 'Dettol Sabun Batang',
                'stok' => '10',
                'harga' => 7000,
                'gambar' =>'img/categories/dettol2.png',
                'supplier_id' => 2,
                'harga_asli' => '10000',
            ],
            [
                'product' => 'Kecap Manis ',
                'kategori' => 'Bahan Dapur',
                'merk' => 'Kecap ABC',
                'stok' => '10',
                'harga' => 20000,
                'gambar' =>'img/featured/kecap.png',
                'supplier_id' => 1,
                'harga_asli' => '25000'
            ],
            [
                'product' => 'Mie Instan Kuah ',
                'kategori' => 'Makanan Instan',
                'merk' => 'Indomie',
                'stok' => '10',
                'harga' => 2800,
                'gambar' =>'img/featured/miekuah.png',
                'supplier_id' => 1,
                'harga_asli' => '3500'
            ]
        ]);
    }
}
