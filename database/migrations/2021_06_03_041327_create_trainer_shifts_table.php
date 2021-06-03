<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainerShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer_shifts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('shift_id');
            $table->string('status')->default(1);
            $table->unsignedBigInteger('created_by');
            $table->foreign('user_id')->references('id'
            )->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('shift_id')->references('id'
            )->on('shifts')->onUpdate('cascade')->onDelete('cascade');
            $table->softDeletes();

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
        Schema::dropIfExists('trainer_shifts');
    }
}
