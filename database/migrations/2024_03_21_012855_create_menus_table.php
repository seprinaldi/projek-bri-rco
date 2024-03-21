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
            $table->id();
            $table->foreignId('pn');
            $table->string('user_role');
            $table->string('menu_name');
            $table->string('menu_sub')->nullable();
            $table->string('url_sub')->nullable();
            $table->string('menu_sub2')->nullable();
            $table->string('url_sub2')->nullable();
            $table->string('menu_sub3')->nullable();
            $table->string('url_sub3')->nullable();
            $table->string('menu_sub4')->nullable();
            $table->string('url_sub4')->nullable();
            $table->string('menu_sub5')->nullable();
            $table->string('url_sub5')->nullable();
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
