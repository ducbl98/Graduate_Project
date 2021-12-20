<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seeker_id')->nullable();
            $table->string('name');
            $table->string('company_name');
            $table->string('description')->nullable();
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
        Schema::table('experiences', function (Blueprint $table) {
            $table->dropForeign('experiences_seeker_id_foreign');
        });
        Schema::dropIfExists('experiences');
    }
}
