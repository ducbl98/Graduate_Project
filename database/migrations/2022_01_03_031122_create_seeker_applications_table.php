<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeekerApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seeker_applications', function (Blueprint $table) {
            $table->id();
            $table->string('seeker_name');
            $table->string('email');
            $table->string('phone_number');
            $table->longText('introduction')->nullable();
            $table->string('resume');
            $table->unsignedBigInteger('job_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->boolean('is_active')->default(1);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
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
        Schema::table('seeker_applications', function (Blueprint $table) {
            $table->dropForeign('seeker_applications_user_id_foreign');
            $table->dropForeign('seeker_applications_job_id_foreign');
        });
        Schema::dropIfExists('seeker_applications');
    }
}
