<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DocumentType;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //$this->call(DatabaseRequests::class);
        // echo "Starting seeder";
        // $proofOfAddress = new DocumentType();
        // $proofOfAddress ->name = 'Comprobante de domicilio';
        // $proofOfAddress-> expiration = 3;
        // $proofOfAddress -> code = 'PROOF_OF_ADDRESS';
        // $proofOfAddress-> save();

        $documenttype = DocumentType::factory(100)->create();
    }
}
