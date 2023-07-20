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
        Schema::create('riwayat_pencairan_dana', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user');
            $table->date('tglPencairan_dana');
            $table->float('total_dana');  
            $table->timestamps();
        });
        Schema::table('riwayat_pencairan_dana', function($table) {
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_yayasan_panti_asuhan')->references('id')->on('yayasan_panti_asuhan')->onDelete('set null');
            $table->foreign('id_admin')->references('id')->on('admin')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_pencairan_dana');
    }
};
