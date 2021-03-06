<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'nama'  => 'admin'
        ]);

        DB::table('roles')->insert([
            'nama'  => 'reseller'
        ]);

        DB::table('roles')->insert([
            'nama'  => 'user'
        ]);

        DB::table('roles')->insert([
            'nama'  => 'superadmin'
        ]);
    }
}
