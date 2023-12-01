<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('Sname');
            $table->string('location');
            $table->string('Dname');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('typeOfSchool_id')->constrained('type_Of_Schools')->cascadeOnDelete();
            $table->foreignId('nursery_id')->constrained('nurseries')->cascadeOnDelete()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
