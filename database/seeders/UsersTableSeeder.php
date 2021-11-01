<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;

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
            // Admin
            [
                'full_name'=>'helloPet Admin',
                'username'=>'Admin',
                'email'=>'hellopet35@gmail.com',
                'password'=>Hash::make('1111'),
                'role'=>'admin',
                'status'=>'active',
            ],
            // Vendor
            [
                'full_name'=>'helloPet Vendor',
                'username'=>'Vendor',
                'email'=>'rzkutm14@gmail.com',
                'password'=>Hash::make('1111'),
                'role'=>'vendor',
                'status'=>'active',
            ],
            // customer
            [
                'full_name'=>'helloPet Customer',
                'username'=>'Cuatomer',
                'email'=>'rizkiutami744@gmail.com',
                'password'=>Hash::make('1111'),
                'role'=>'customer',
                'status'=>'active',
            ],
        ]);
    }
}
