<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // ... existing code ...

    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->string('title');
            $table->text('description');
            $table->timestamp('datetime');
            $table->string('status');
            $table->unsignedBigInteger('project_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
