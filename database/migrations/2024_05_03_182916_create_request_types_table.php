<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('request_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique()->index();
            $table->integer('expiration')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('area_type_id');
            $table->foreign('area_type_id')
                ->references('id')
                ->on('area_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_types');
    }
};
