<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idJenis');
            $table->foreign('idJenis', 'menu_jenis_fk_meneer')->references('id')->on('jenis')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('kategori', ['Makanan','Minuman']);
            $table->string('namaMenu', 100);
            $table->string('harga', 20);
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
        Schema::dropIfExists('menus');
    }
}
