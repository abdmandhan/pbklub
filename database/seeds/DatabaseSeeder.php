<?php

use App\Model\PengajuanBahan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            BahanSeeder::class,
            RolesAndPermissionsSeeder::class,
            UsersSeeder::class,
            PengajuanBahanSeeder::class,
        ]);
    }
}
