<?php

namespace Database\Seeders;

use App\Models\documents;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //------------------------

        // $documents = new documents();

        // $documents->id ='123456';
        // $documents->student_id ='098765';
        // $documents->document_type_id ='67890';
        // $documents->Creation_date ='2000-01-01';
        // $documents->path ='pdf';

        // $documents->save();


        documents::factory(100)->create();
    }
}
