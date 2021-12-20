<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seeker_id')->nullable();
            $table->string('facility');
            $table->string('major');
            $table->string('degree');
            $table->string('description');
            $table->dateTime('time_start');
            $table->dateTime('time_finish');
            $table->foreign('seeker_id')->references('id')->on('seekers')->onDelete('cascade');
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
        Schema::table('educations', function (Blueprint $table) {
            $table->dropForeign('educations_seeker_id_foreign');
        });
        Schema::dropIfExists('educations');
    }
}
