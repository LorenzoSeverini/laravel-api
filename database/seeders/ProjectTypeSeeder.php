<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\type;
use Faker\Generator as Faker;


class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // table type seeder
        for ($i = 0; $i < 10; $i++) {
            $type = new type();
            $type->name = $faker->word();
            $type->icon = $faker->word();
            $type->save();
        }
    }
}
