<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Article;
use Illuminate\Support\Carbon;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            $faker = Faker\Factory::create();
            $category = Category::all();

            foreach ($category as $key => $value) {
                for ($i=0; $i <= 50 ; $i++) {
                    $title = $faker->sentence(5);
                        Article::insert([
                            'category_id' => $value->id,
                            'user_id' => 1,
                            'title' => $title,
                            'slug' => str_replace(" ", "-" , $title),
                            'content' => $faker->sentence(100),
                            'banner' => 'http://lorempixel.com/400/200/',
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()
                        ]);
                    }
            }
    }
}
