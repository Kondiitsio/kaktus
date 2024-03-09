<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHeroTable extends Migration
{
    public function up()
    {
        Schema::create('hero', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Etusivun Otsikko');
            $table->string('subtitle')->default('Etusivun otsikon alateksti');
            $table->unsignedBigInteger('media_id')->nullable();
            $table->foreign('media_id')->references('id')->on('media')->onDelete('set null');
            $table->timestamps();
        });

        DB::table('hero')->insert([
            'title' => 'Etusivun Otsikko',
            'subtitle' => 'Etusivun otsikon alateksti',
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('hero');
    }
}
?>
