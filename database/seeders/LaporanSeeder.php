<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Laporan;
use Faker\Factory as Faker;

class LaporanSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        
        $lokasiBanjir = [
            'Kec. Dayeuhkolot, Kel. Citeureup',
            'Kec. Baleendah, Kel. Andir',
            'Kec. Bojongsoang, Kel. Dayeuhkolot',
            'Kec. Rancaekek, Kel. Bojongloa',
            'Kec. Majalaya, Kel. Majasetra'
        ];

        for ($i = 0; $i < 12; $i++) {
            Laporan::create([
                'nama_pelapor'    => $faker->name,
                'lokasi'          => $faker->randomElement($lokasiBanjir),
                'tinggi_genangan' => $faker->numberBetween(10, 150),
                'tanggal_kejadian'=> $faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
            ]);
        }
    }
}
