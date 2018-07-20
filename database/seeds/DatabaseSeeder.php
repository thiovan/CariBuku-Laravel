<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;
use App\Buku;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
          Buku::create([
              'sampul'        => $faker->image($dir = 'public/foto', $width = 640, $height = 480, 'technics'),
              'nama'          => $faker->realText($maxNbChars = 25, $indexSize = 2),
              'pengarang'     => $faker->name,
              'tahun_terbit'  => $faker->year,
              'isbn'          => $faker->isbn13
          ]);
      }
    }
}
