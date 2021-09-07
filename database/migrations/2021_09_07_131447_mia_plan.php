<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MiaPlan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mia_plan', function (Blueprint $table) {
            $table->id();

            $table->string('title');
    $table->string('slug');
    $table->text('caption');
    $table->decimal('price_month', $presision = 12, $scale = 2);
    $table->decimal('price_year', $presision = 12, $scale = 2);
    $table->string('paypal_plan_id');
    $table->string('paypal_plan_id_year');
    $table->text('data');
    $table->integer('is_show');
    

            

            

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mia_plan');
    }
}