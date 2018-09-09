<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceEvaluationServiceImprovementTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_evaluation_service_improvement_tag', function (Blueprint $table) {
            $table->unsignedInteger('service_evaluation_id');
            $table->unsignedInteger('service_improvement_tag_id');

            $table->foreign('service_evaluation_id')->references('id')->on('service_evaluations');
            $table->foreign('service_improvement_tag_id')->references('id')->on('service_improvement_tags');
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
        Schema::dropIfExists('service_improvement_tags');
    }
}
