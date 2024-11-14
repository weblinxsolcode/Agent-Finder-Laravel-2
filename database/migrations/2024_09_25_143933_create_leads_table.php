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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();

            $table->longText("code");

            $table->longText("purpose");
            $table->longText("type");
            $table->longText("duration");
            $table->longText("address");
            $table->longText("long")->nullable();
            $table->longText("lat")->nullable();
            $table->longText("first_name")->nullable();
            $table->longText("last_name")->nullable();
            $table->longText("email")->nullable();
            $table->longText("phone")->nullable();

            $table->boolean("status")->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
