<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use Faker\Generator as Faker;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // table technology seeder
        for ($i = 0; $i < 10; $i++) {
            $technology = new Technology();
            $technology->name = $faker->word();
            $technology->save();
        }
    }
}
