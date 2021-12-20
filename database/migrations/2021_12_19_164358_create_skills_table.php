<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seeker_id')->nullable();
            $table->string('name');
            $table->unsignedInteger('level');
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
        Schema::table('skills', function (Blueprint $table) {
            $table->dropForeign('skills_seeker_id_foreign');
        });
        Schema::dropIfExists('skills');
    }
}
