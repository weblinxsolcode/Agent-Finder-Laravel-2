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
        Schema::create('proprty_reports', function (Blueprint $table) {
            $table->id();

            $table->string("own_property");
            $table->string("selling_status");
            $table->string("email");
            $table->string("first_name");
            $table->string("last_name");
            $table->string("phone");
            $table->longText("address");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proprty_reports');
    }
};
