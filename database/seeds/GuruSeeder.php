<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 10; $i++) {

            DB::table('guru')
                ->insert([
                    'nama' => $faker->name,
                    'umur' => $faker->numberBetween(30,50)
                ]);
        }
    }
}
