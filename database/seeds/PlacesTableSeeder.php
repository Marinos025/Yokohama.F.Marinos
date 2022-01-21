<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert([
            'name'=>"mainSSS",
        ]);
        
         DB::table('places')->insert([
            'name'=>"mainSS",
        ]);
        
        DB::table('places')->insert([
            'name'=>"mainSA",
        ]);
        
        DB::table('places')->insert([
            'name'=>"backSA",
        ]);
        
        DB::table('places')->insert([
            'name'=>"backSA",
        ]);
        
        DB::table('places')->insert([
            'name'=>"backSB",
        ]);
        
        DB::table('places')->insert([
            'name'=>"backSC",
        ]);
        DB::table('places')->insert([
            'name'=>"バックアッパーゾーン",
        ]);
        
        DB::table('places')->insert([
            'name'=>"backside",
        ]);
        
        DB::table('places')->insert([
            'name'=>"supportersseat1",
        ]);
        
        DB::table('places')->insert([
            'name'=>"supportersseat2",
        ]);


        
    }
}
