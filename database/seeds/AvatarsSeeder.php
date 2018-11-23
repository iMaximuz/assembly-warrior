<?php

use Illuminate\Database\Seeder;

class AvatarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 15; $i++){
            $avatar = new App\Avatar();
            $avatar->url = asset("helios/images/pic" . str_pad($i, 2, '0', STR_PAD_LEFT) . ".jpg");
            $avatar->save();
        }
    }
}
