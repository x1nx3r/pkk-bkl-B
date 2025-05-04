<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        // Drop existing tables first (if they exist)
        Schema::dropIfExists("berita_tag");
        Schema::dropIfExists("tags");
        Schema::dropIfExists("kategori_beritas");

        // If beritas table exists, modify it
        if (Schema::hasTable("beritas")) {
            // Drop the foreign key if it exists
            if (Schema::hasColumn("beritas", "kategori_id")) {
                Schema::table("beritas", function (Blueprint $table) {
                    // Drop foreign key constraint first
                    $table->dropForeign(["kategori_id"]);
                    // Then drop the column
                    $table->dropColumn("kategori_id");
                });
            }
        } else {
            // Create beritas table from scratch if it doesn't exist
            Schema::create("beritas", function (Blueprint $table) {
                $table->id();
                $table->string("judul");
                $table->string("slug")->unique();
                $table->text("konten");
                $table->string("featured_image")->nullable();
                $table->string("status")->default("draft");
                $table
                    ->foreignId("user_id")
                    ->constrained()
                    ->onDelete("cascade");
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        // This is a simplification migration, so rollback would be complex
        // You might want to implement a proper rollback if needed
    }
};
