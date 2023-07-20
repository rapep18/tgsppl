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
        Schema::create('yayasan_panti_asuhan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user');
            $table->bigInteger('id_kota');           
            $table->string('nama');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('alamat');
            $table->string('noTelp');
            $table->string('bankRekening');
            $table->string('noRekening');
            $table->string('atasnama_rekening');
            $table->integer('jumlah_anak');
            $table->float('biaya_pengeluaran_bulanan');            
            $table->timestamps();
        });

        Schema::table('yayasan_panti_asuhan', function($table) {
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_kota')->references('id')->on('kota')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yayasan_panti_asuhan');
    }
};
