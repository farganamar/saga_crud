<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make("admin123"),
            'jabatan' => "admin",
        ]);

        for ($i=0; $i < 100 ; $i++) {
            DB::table('users')->insert([
                'name' =>$faker->name,
                'email' => $faker->email,
                'password' => Hash::make("user123456"),
                'jabatan' => "author",
            ]);
        }
    }
}
