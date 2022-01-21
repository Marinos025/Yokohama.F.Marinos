<?php

use Illuminate\Database\Seeder;
class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'number'=> 1,
            'name' => 'TAKAOKA',
            'place' => 'GK',
        ]);
        
        
        DB::table('players')->insert([
            'number'=>4,
            'name' => 'SHINNOSUKE HATANAKA',
            'place' => 'DF',
        ]);
        
       DB::table('players')->insert([
            'number'=> 13,
            'name' => 'THHIAGO MARTINS',
            'place' => 'DF',
        ]);
       
       DB::table('players')->insert([
            'number'=> 19,
            'name' => 'YUKI SANETO',
            'place' => 'DF',
        ]);
       
       DB::table('players')->insert([
            'number'=> 25,
            'name' => 'RYUTA KOIKE',
            'place' => 'DF',
        ]);
       
       DB::table('players')->insert([
            'number'=> 27,
            'name' => 'KEN MATSUBARA',
            'place' => 'DF',
        ]);
       
       DB::table('players')->insert([
            'number'=> 36,
            'name' => 'RYOTARO TSUNODA',
            'place' => 'DF',
        ]);
        
      DB::table('players')->insert([
            'number'=> 8,
            'name' => 'TAKUYA KIDA',
            'place' => 'MF',
        ]);
      
      DB::table('players')->insert([
            'number'=> 18,
            'name' => 'KOTA MIZUNUMA',
            'place' => 'MF',
        ]);
      
      DB::table('players')->insert([
            'number'=> 26,
            'name' => 'WATANABE KOTA',
            'place' => 'MF',
        ]);
      
      DB::table('players')->insert([
            'number'=> 7,
            'name' => 'ELBER',
            'place' => 'FW',
        ]);
        
      DB::table('players')->insert([
            'number'=> 9,
            'name' => 'LEO CEARA',
            'place' => 'FW',
        ]);
        
      DB::table('players')->insert([
            'number'=> 10,
            'name' => 'MARCOS JUNIOR',
            'place' => 'GK',
        ]);
      
      DB::table('players')->insert([
            'number'=> 17,
            'name' => 'RYO  MIYAICHI',
            'place' => 'FW',
        ]);

    }
}