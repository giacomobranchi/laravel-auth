<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 9; $i++) {
            $project = new Project();
            $project->title = $faker->realtext(50);
            $project->cover_image = 'placeholders/' . $faker->image('public/storage/placeholders', category: 'Posts', fullPath: false);
            dd($project->cover_image);
            $project->slug = Str::slug($project->title, '-');
            $project->content = $faker->realtext(50);
            $project->save();
        }
    }
}
