<?php

use Illuminate\Database\Seeder;

class DeleteProduct extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sanpham')->delete();
    }
}
