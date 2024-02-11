<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateContactInfoTable extends Migration
{
    public function up()
    {
        Schema::create('contact_info', function (Blueprint $table) {
            $table->id();
            $table->foreignId('store_id')->constrained();
            $table->string('city');
            $table->string('street_address');
            $table->string('zip_code');
            $table->string('email');
            $table->string('phone');
            $table->string('open_hours');
            $table->timestamps();
        });

        // Insert initial data
        DB::table('contact_info')->insert([
            [
                'store_id' => 1,
                'city' => 'Helsinki',
                'street_address' => 'Helsinkikatu 14',
                'zip_code' => '00100',
                'email' => 'helsinki@kaktus.fi',
                'phone' => '+1 (555) 905-2345',
                'open_hours' => 'ma-ke 9-17 la 12-18',
            ],
            [
                'store_id' => 2,
                'city' => 'Espoo',
                'street_address' => 'Espookatu 12',
                'zip_code' => '01234',
                'email' => 'espoo@kaktus.fi',
                'phone' => '+1 (555) 905-3456',
                'open_hours' => 'ma-ke 9-17 la 12-18',
            ],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('contact_info');
    }
}
