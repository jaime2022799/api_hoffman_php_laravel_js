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
        Schema::create('_table_users', function (Blueprint $table) {
           
            $table->string('Code');
            $table->string('Monto');
            $table->date('fecha')->date_format('dd-mm-yyyy');
            $table->string('UserGithub');
            $table->timestamps();
            $table->id();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_table_users');
    }
};
