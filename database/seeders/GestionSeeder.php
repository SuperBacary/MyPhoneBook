<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create([
            'login' => 'gestionnaire',
            'password' => 'gestionnaire',
         ]);
    }
}
