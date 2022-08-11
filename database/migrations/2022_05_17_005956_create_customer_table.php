<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->integer('id_customer', 11);
            $table->string('nama', 100);
            $table->string('alamat', 255);
            $table->string('telp', 25);
            $table->string('jenis_kelamin', 15);
            $table->date('tgl_lahir');
            $table->string('email', 30);
            $table->string('username', 30);
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
        Schema::dropIfExists('customer');
    }
}
