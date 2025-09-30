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
        Schema::create('rrhh_topic', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("center");
            $table->timestamp("opening")->nullable();
            $table->unsignedBigInteger("user_affected");
            $table->string("description", 255);
            $table->unsignedBigInteger("user_register");
            $table->string("derivative", 255);
            $table->string("docs", 255);

            $table->timestamps();

            $table->foreign("center")->references("id")->on("center");
            $table->foreign("user_affected")->references("id")->on("users");
            $table->foreign("user_register")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rrhh_topic');
    }
};
