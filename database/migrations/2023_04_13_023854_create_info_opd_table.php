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
        Schema::create('info_opd', function (Blueprint $table) {
            $table->id('id_opd');
            $table->string('nama_opd','100')->required();
            $table->text('alamat_opd')->required();
            $table->string('telp','50')->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_opd');
    }
};
