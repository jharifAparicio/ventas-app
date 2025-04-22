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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("tipo_documento_id");
            $table->string("numero_documento", 20)->unique();
            $table->string("razon_social", 200);
            $table->timestamps();
            $table->foreign("tipo_documento_id")->references("id")->on("tipo_documentos")->onDelete("cascade")->name("fk_tipo");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
