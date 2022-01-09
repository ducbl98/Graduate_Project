<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_responses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seeker_application_id')->nullable();
            $table->string('header');
            $table->string('content');
            $table->string('attachment');
            $table->boolean('is_seen')->default(0);
            $table->foreign('seeker_application_id')->references('id')->on('seeker_applications')->onDelete('cascade');
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
        Schema::table('company_responses', function (Blueprint $table) {
            $table->dropForeign('company_responses_seeker_application_id_foreign');
        });
        Schema::dropIfExists('company_responses');
    }
}
