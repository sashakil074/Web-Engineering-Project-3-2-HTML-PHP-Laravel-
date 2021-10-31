<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('PtName');
            $table->string('PsyName');
            $table->string('PtUsername');
            $table->string('PsyUsername');
            $table->longText('PtMessage')->nullable();
            $table->longText('PsyMessage')->nullable();
            $table->string('Read1')->nullable();
            $table->string('Read2')->nullable();
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
        Schema::dropIfExists('messages');
    }
}
