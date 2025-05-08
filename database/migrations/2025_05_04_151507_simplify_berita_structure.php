<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        // Only modify the existing beritas table to remove kategori_id
        if (Schema::hasTable("beritas")) {
            Schema::table("beritas", function (Blueprint $table) {
                // Drop foreign key constraint first
                $table->dropForeign(["kategori_id"]);
                // Then drop the column
                $table->dropColumn("kategori_id");
            });
        }

        // Clear related tables data
        if (Schema::hasTable("berita_tag")) {
            DB::table("berita_tag")->truncate();
        }

        if (Schema::hasTable("tags")) {
            DB::table("tags")->truncate();
        }

        if (Schema::hasTable("kategori_beritas")) {
            DB::table("kategori_beritas")->truncate();
        }
    }

    public function down()
    {
        // Add kategori_id column back
        Schema::table("beritas", function (Blueprint $table) {
            $table
                ->foreignId("kategori_id")
                ->constrained("kategori_beritas")
                ->onDelete("cascade");
        });
    }
};
