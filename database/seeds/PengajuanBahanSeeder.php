<?php

use Illuminate\Database\Seeder;

class PengajuanBahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\PengajuanBahan::class, 100)->create();
    }
}
