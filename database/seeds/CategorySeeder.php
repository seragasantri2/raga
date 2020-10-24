<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'nama'  => 'Kaos Distro' 
        ]);

        DB::table('categories')->insert([
            'nama'  => 'Kemeja Pria' 
        ]);

        DB::table('categories')->insert([
            'nama'  => 'Baju Kaos' 
        ]);

        DB::table('categories')->insert([
            'nama'  => 'Pakaian' 
        ]);
    }
}
