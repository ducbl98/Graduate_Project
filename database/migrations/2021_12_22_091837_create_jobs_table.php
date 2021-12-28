<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('application_email');
            $table->string('image');
            $table->unsignedInteger('amount');
            $table->unsignedFloat('work_time');
            $table->string('experience');
            $table->unsignedbigInteger('salary_min');
            $table->unsignedbigInteger('salary_max');
            $table->string('salary_unit');
            $table->string('address');
            $table->string('expire');
            $table->text('details');
            $table->unsignedbigInteger('view')->default(0);
            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('created_by');
            $table->boolean('is_active')->default(1);
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropForeign('jobs_created_by_foreign');
            $table->dropForeign('jobs_province_id_foreign');
        });
        Schema::dropIfExists('jobs');
    }
}
