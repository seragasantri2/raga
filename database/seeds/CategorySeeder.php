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
            'nama'  => 'Kaos' ,
            'parent_id' => '1'
        ]);

        DB::table('categories')->insert([
            'nama'  => 'Kemeja' ,
            'parent_id' => '2'
        ]);

        DB::table('categories')->insert([
            'nama'  => 'Lepis',
            'parent_id' => '3' 
        ]);

        DB::table('categories')->insert([
            'nama'  => 'Pakaian',
            'parent_id' => '1'
        ]);
    }
}
