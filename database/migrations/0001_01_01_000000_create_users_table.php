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
        Schema::create('users', function (Blueprint $table) { // users tablosu oluşturuyor
            $table->id(); // id ekliyor
            $table->string('name'); // name ekliyor string tipinde
            $table->string('email')->unique(); // string tipinde email ekliyor, key verdi unique ile
            $table->timestamp('email_verified_at')->nullable(); // email verify tarihini tutan alan, bos olabilr
            $table->string('password'); // sifre alani
            $table->rememberToken(); // beni hatirla checkbox icin alan
            $table->timestamps(); // created_at ve updated_at alanlari
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) { // sifre sifirlama icin  tablo
            $table->string('email')->primary();  // email alani, tabloda yalnizca 1 tane olabilir
            $table->string('token'); // gizli sifre email sifirlama ekrani icin
            $table->timestamp('created_at')->nullable(); // sifirlama ne zmn istendi
        });

        Schema::create('sessions', function (Blueprint $table) { // giris yapilinca kayit tutmasi icin tablo
            $table->string('id')->primary(); // string tipinde id, session id'ler harfler ve sayilardan olusuyo otomatik generate edliiyo
            $table->foreignId('user_id')->nullable()->index(); // user_id alani users tablosuna gidiyor
            $table->string('ip_address', 45)->nullable(); // ip aderis
            $table->text('user_agent')->nullable(); // user agent kullanici hakkinda onemli bilgi topluyo
            $table->longText('payload'); // sayfayi yuklerken gonderilen bilgi/ler
            $table->integer('last_activity')->index(); // son aktivite ne zmndi
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users'); // users tablosunu sil
        Schema::dropIfExists('password_reset_tokens'); // sifre sifirlama talbosunu sil
        Schema::dropIfExists('sessions'); // sessions tablosunu sil 
    }
};
