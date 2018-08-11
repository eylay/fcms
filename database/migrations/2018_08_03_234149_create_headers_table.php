<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('btn_name')->nullable();
            $table->string('btn_link')->nullable();
            $table->string('bg_path')->nullable();
            $table->boolean('visible')->default(1);
            $table->boolean('mobile_visible')->default(1);
            $table->boolean('preloader')->default(1);
            $table->timestamps();
        });

        \DB::table('headers')->insert([
            'title' => 'عنوان هدر',
            'description' => 'متنی برای توضیحات هدر',
            'btn_name' => 'نام دکمه',
            'btn_link' => '#',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('headers');
    }
}
