<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create("kegiatans", function (Blueprint $table) {
            $table->id();
            $table->string("judul");
            $table->string("slug")->unique();
            $table->text("deskripsi");
            $table->datetime("tanggal_mulai");
            $table->datetime("tanggal_selesai")->nullable();
            $table->string("lokasi");
            $table->string("featured_image")->nullable();
            $table
                ->enum("status", ["upcoming", "ongoing", "completed"])
                ->default("upcoming");
            $table->foreignId("user_id")->constrained();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("kegiatans");
    }
};
