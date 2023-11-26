<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageTable extends Migration {

  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
    {
      Schema::create('images', function(Blueprint $table)
      {
        $table->increments('album_id')->unsigned();
        $table->text('description');
        $table->string('image');
        $table->string('full-image');
        $table->string('alt');
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
    Schema::drop('images');
  }
}