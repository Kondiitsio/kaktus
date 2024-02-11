<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateEtusivuTable extends Migration
{
    public function up()
    {
        Schema::create('etusivu', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Etusivun Otsikko');
            $table->string('subtitle')->default('Etusivun otsikon alateksti');
            $table->timestamps();
        });

        DB::table('etusivu')->insert([
            'title' => 'Etusivun Otsikko',
            'subtitle' => 'Etusivun otsikon alateksti',
        ]);
    }


    public function down()
    {
        Schema::dropIfExists('etusivu');
    }
}
