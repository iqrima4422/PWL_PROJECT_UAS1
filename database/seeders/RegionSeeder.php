<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('region')->insert([
            [
                'alamat_cod' => 'Jl. Taman Bugenvil No.6, Sumber Taman, Kec. Wonoasih, Kota Probolinggo, Jawa Timur 67237',
            ],
            [
                'alamat_cod' => 'Jl. Raya Panglima Sudirman No.382, Sukoharjo, Kec. Mayangan, Kota Probolinggo, Jawa Timur 67216',
            ],
            [
                'alamat_cod' => 'Jl. Raya Leces,Clarak, Kec. Leces, Kabupaten Probolinggo, Jawa Timur 67273',
            ],
            [
                'alamat_cod' => 'Jl. Arisan, Banjarsawah, Kec. Tegalsiwalan, Kabupaten Probolinggo, Jawa Timur 67274',
            ],
            [
                'alamat_cod' => ' Jl. Raya Lumajang, Krajan I, Warujinggo, Kec. Leces, Kabupaten Probolinggo, Jawa Timur 67273',
            ],
        ]);
    }
}
