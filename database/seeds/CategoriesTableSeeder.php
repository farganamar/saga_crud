<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $array_data = array(
            ['name' => 'Sepak Bola' , 'slug' => 'Sepak-Bola'],
            ['name' => 'Technology' , 'slug' => 'Technology'],
            ['name' => 'Sport' , 'slug' => 'Sport' ]
        );
        DB::table('categories')->insert($array_data);
    }
}
