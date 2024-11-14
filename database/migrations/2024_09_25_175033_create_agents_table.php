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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();

            $table->longText("first_name");
            $table->longText("last_name");
            $table->longText("email");
            $table->longText("phone_number");
            $table->longText("agency_name");
            $table->longText("agenct_code");
            $table->longText("agenct_address");
            $table->longText("focused");
            $table->longText("password");

            $table->boolean("status")->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
