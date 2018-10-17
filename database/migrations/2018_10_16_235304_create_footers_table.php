<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('description_1')->nullable();
            $table->text('description_2')->nullable();
            $table->text('address')->nullable();
            $table->text('telephones')->nullable();
            $table->text('emails')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('telegram')->nullable();
            $table->boolean('visible')->default(1);
            $table->timestamps();
        });

        \DB::table('footers')->insert([
            'title' => 'عنوان فوتر',
            'description_1' => 'متن توضیحات فوتر متن توضیحات فوتر متن توضیحات فوتر متن توضیحات فوتر',
            'description_2' => 'متن دوم فوتر متن دوم فوتر متن دوم فوتر متن دوم فوتر متن دوم فوتر متن دوم فوتر',
            'address' => 'آدرس آدرس آدرس آدرس آدرس آدرس آدرس آدرس آدرس آدرس آدرس آدرس آدرس آدرس آدرس آدرس ',
            'telephones' => '09185567663,0123654789',
            'emails' => 'ali.seyfi68@gmail.com,a@b.com',
            'facebook' => 'eylay.ir',
            'twitter' => 'eylay.ir',
            'google' => 'eylay.ir',
            'linkedin' => 'eylay.ir',
            'instagram' => 'eylay.ir',
            'telegram' => 'eylay',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('footers');
    }
}
