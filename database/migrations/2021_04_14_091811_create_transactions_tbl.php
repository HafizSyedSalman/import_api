<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('job_title')->nullable();
            $table->string('company')->nullable();
            $table->string('industry')->nullable();
            $table->string('website')->nullable();
            $table->string('number')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('postalcode')->nullable();
            $table->string('zip')->nullable();
            $table->string('city')->nullable();
            $table->string('group')->nullable();
            $table->string('province')->nullable();
            $table->string('country')->nullable();
            $table->string('description')->nullable();
            $table->string('email_access')->nullable();
            $table->string('sms_access')->nullable();
            $table->string('email_gateway')->nullable();
            $table->string('sms_gateway')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
