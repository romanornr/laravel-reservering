<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

//use database\seeds\UserTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}

// Maak user
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'     => 'Travel',
            'username' => 'travel',
            'email'    => 'romanornr@gmail.com',
            'password' => Hash::make('Travel1$11'),
        ]);
    }
}
