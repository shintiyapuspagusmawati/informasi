<?php

use Illuminate\Database\Seeder;
use App\mapel;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $mapel1 = mapel::create(['name'=>'Matematika']);
        $mapel2 = mapel::create(['name'=>'IPA']);
        $mapel3 = mapel::create(['name'=>'Bahasa Indonesia']);
    }
}
