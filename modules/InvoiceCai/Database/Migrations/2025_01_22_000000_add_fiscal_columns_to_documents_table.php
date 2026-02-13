<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->string('cai')->nullable()->after('color');
            $table->date('fecha_limite_emision')->nullable()->after('cai');
            $table->string('rango_autorizado')->nullable()->after('fecha_limite_emision');
        });
    }

    public function down(): void
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->dropColumn(['cai', 'fecha_limite_emision', 'rango_autorizado']);
        });
    }
};
