<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Type;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $types = Type::all();

        for ($i = 0; $i < 10; $i++) {
            $project = new project();
            $project->title = $faker->sentence(3);
            $project->description = $faker->sentence(50);
            $project->link = $faker->url();
            $project->image = $faker->imageUrl(640, 480, 'animals', true);
            $project->published_at = $faker->dateTimeBetween('now');
            $project->updated_at = $faker->dateTimeBetween('now');
            $project->type_id = $types->random()->id;
            $project->save();
        }
    }
}
