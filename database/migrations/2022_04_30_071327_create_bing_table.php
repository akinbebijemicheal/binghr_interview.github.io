<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bings', function (Blueprint $table) {
            $table->id();
            $table->string('employerid', 255)->nullable();
            $table->string('firstname', 255)->nullable();
            $table->string('lastname', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('role', 255)->nullable();
            $table->string('username', 255)->nullable();
            $table->string('password', 255)->nullable();
            $table->string('saread', 255)->nullable();
            $table->string('sawrite', 255)->nullable();
            $table->string('sadelete', 255)->nullable();
            $table->string('aread', 255)->nullable();
            $table->string('awrite', 255)->nullable();
            $table->string('adelete', 255)->nullable();
            $table->string('eread', 255)->nullable();
            $table->string('ewrite', 255)->nullable();
            $table->string('edelete', 500)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bings');
    }
}
