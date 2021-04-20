<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
'name' => Str::random(10),
'email' => Str::random(10).'@gmail.com',
'password' => bcrypt('password'),
'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
'title'=>Str::random(10),
'description'=>Str::random(10),
'url'=>Str::random(10),
'avatar'=>Str::random(10),
'remember_token'=>Str::random(10),
'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
]);
    }
}
