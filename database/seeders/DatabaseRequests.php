<?php

namespace Database\Seeders;

use App\Models\User;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Requests;

class DatabaseRequests extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $requests = Requests::factory(10)->create();
    }
}
