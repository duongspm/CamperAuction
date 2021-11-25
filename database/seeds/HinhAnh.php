<?php

use Illuminate\Database\Seeder;

class HinhAnh extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 10 ; $i++) { # code... 
            DB::table('hinhanh')->insert(
                [
                'ha_ten' => rand(1,10).'.jpg',
                'sp_id' => rand(1,20),
                ]
            );
        }
    }
}
