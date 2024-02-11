<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateYhteystiedotTable extends Migration
{
    public function up()
    {
        Schema::create('yhteystiedot', function (Blueprint $table) {
            $table->id();
            $table->string('stores_title')->default('Myymälät otsikko');
            $table->string('stores_subtitle')->default('Myymälät otsikon alateksti');
            $table->timestamps();
        });

        DB::table('yhteystiedot')->insert([
            'stores_title' => 'Myymälät otsikko',
            'stores_subtitle' => 'Myymälät otsikon alateksti',
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('yhteystiedot');
    }
}



