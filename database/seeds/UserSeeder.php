<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name'    =>  'Admin',
            'last_name'    =>  'Web',
            'email'         => 'admin@admin.com',
            'password'      =>  Hash::make('admin'),
            'alamat'        =>  'Indonesia',
            'no_telpon'     =>  '0813',
            'role'          =>  'admin'
        ]);

        DB::table('users')->insert([
            'first_name'    =>  'User',
            'last_name'    =>  'Web',
            'email'         => 'user@user.com',
            'password'      =>  Hash::make('user'),
            'alamat'        =>  'Indonesia',
            'no_telpon'     =>  '0813',
            'role'          =>  'user' 
        ]);
    }
}
