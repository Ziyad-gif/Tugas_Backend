<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->double('amount');
            $table->timestamp('time')->default(now());
            $table->enum('type',[
                'expense','revenue'

            ]);
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
        Schema::dropIfExists('transactios');
    }
}
