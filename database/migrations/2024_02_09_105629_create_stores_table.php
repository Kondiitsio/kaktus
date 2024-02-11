<?php
// Create Stores Table
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateStoresTable extends Migration
{
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // Add other store-specific columns here...
            $table->timestamps();
        });

        // Insert initial data
        DB::table('stores')->insert([
            [
                'id' => 1,
                'name' => 'Kaktus Helsinki',
            ],
            [
                'id' => 2,
                'name' => 'Kaktus Espoo',
            ],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
?>
