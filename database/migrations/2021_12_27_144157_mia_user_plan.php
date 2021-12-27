<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MiaUserPlan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mia_user_plan', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id');
    $table->integer('plan_id');
    $table->integer('frecuency');
    $table->decimal('amount', $presision = 12, $scale = 2);
    $table->dateTime('start');
    $table->dateTime('end');
    $table->integer('provider_id');
    $table->text('data');
    $table->integer('status');
    

            $table->foreign('plan_id')->references('id')->on('mia_plan');$table->foreign('provider_id')->references('id')->on('mia_provider');$table->foreign('user_id')->references('id')->on('mia_user');

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
        Schema::dropIfExists('mia_user_plan');
    }
}