<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtsiliepimaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atsiliepimais', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->text('email');
            $table->string('services_uses');
            $table->string('services_quality');
            $table->text('opinion_about_us');
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
        Schema::dropIfExists('atsiliepimais');
    }
}
