<?php

namespace Database\Seeders;

use App\Models\Alumn;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Alumn::factory(10)->create();
    }
}
