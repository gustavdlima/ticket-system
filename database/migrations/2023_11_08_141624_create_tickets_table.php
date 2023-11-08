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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('setor');
            $table->string('nome');
            $table->string('email');
            $table->string('equipamento');
            $table->string('n_tombamento');
            $table->string('defeito');
            $table->boolean('status')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumn('tickets', [
            'setor',
            'nome',
            'email',
            'equipamento',
            'n_tombamento',
            'defeito',
            'status',
            
        ]);
    }
};
