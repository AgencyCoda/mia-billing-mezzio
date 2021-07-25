<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MiaBillingInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mia_billing_info', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id');
    $table->integer('type');
    $table->string('company');
    $table->string('firstname');
    $table->string('lastname');
    $table->string('legal_number');
    $table->string('address');
    $table->string('city');
    $table->string('zip_code');
    $table->string('state');
    $table->string('country');
    $table->string('phone');
    $table->string('email');
    $table->integer('status');
    

            

            $table->timestamps();

            $table->integer('deleted')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mia_billing_info');
    }
}