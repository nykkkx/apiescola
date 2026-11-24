<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void { Schema::create('notas', function (Blueprint $table) {
        $table->id(); $table->string('nome_aluno'); $table->string('disciplina');
        $table->decimal('valor', 4, 2); $table->timestamps();
    }); }
    public function down(): void { Schema::dropIfExists('notas'); }
};