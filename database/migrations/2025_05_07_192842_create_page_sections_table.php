<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("page_sections", function (Blueprint $table) {
            $table->id();
            $table->string("page_slug");
            $table->string("section_key");
            $table->string("title");
            $table->text("content");
            $table->json("content_data")->nullable(); // For structured content
            $table->integer("order")->default(0);
            $table->boolean("active")->default(true);
            $table->timestamps();

            // Create an index for faster queries
            $table->index(["page_slug", "section_key"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("page_sections");
    }
};
