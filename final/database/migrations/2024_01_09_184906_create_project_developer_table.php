<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('project_developers', function (Blueprint $table) {
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('developer_id');
            $table->string('status')->default('completed');;
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('developer_id')->references('id')->on('developers');
            $table->boolean('is_lead')->default(false);
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['project_id', 'developer_id']);

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_developers');
    }
};
