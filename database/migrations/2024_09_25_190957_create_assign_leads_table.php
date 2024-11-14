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
        Schema::create('assign_leads', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("lead_id");
            $table->foreign("lead_id")->references("id")->on("leads")->onDelete("cascade");

            $table->unsignedBigInteger("agent_id");
            $table->foreign("agent_id")->references("id")->on("agents")->onDelete("cascade");

            $table->boolean("status")->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assign_leads');
    }
};
