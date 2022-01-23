<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->nullable();
            $table->string('nomor_kk')->unique()->nullable();
            $table->string('contact')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('contact_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('role')->nullable();  //1 for admin, // 2 for pegawai , // 3 for users
            $table->string('photo')->nullable();
            $table->string('status')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
