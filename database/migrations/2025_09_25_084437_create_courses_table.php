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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("center_id");
            $table->string("code");
            $table->decimal("hours", 3, 1);
            $table->string("type");
            $table->string("modality");
            $table->string("name");
            $table->text("description")->nullable();
            $table->boolean("is_active")->default(true);
            $table->unsignedBigInteger("assistant");
            
            $table->dateTime("start_date");
            $table->dateTime("end_date");

            $table->timestamps();

            $table->foreign("center_id")->references("id")->on("centers");
            $table->foreign("assistant")->references("id")->on("users");
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
