<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateStoreTable extends Migration
{
    public function up()
    {
        Schema::create('store', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Myymälät otsikko');
            $table->string('subtitle')->default('Myymälät otsikon alateksti');
            $table->timestamps();
        });

        DB::table('store')->insert([
            'title' => 'Myymälät otsikko',
            'subtitle' => 'Myymälät otsikon alateksti',
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('store');
    }
}



