<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('section_id');
            $table->integer('position')->nullable()->default(0);
            $table->string('title')->nullable();
            $table->string('icon')->nullable();
            $table->string('picture_path')->nullable();
            $table->string('link_name')->nullable();
            $table->string('link_href')->nullable();
            $table->string('picture1')->nullable();
            $table->string('picture2')->nullable();
            $table->string('subtitle')->nullable();
            $table->unsignedSmallInteger('cols')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('contents');
    }
}
