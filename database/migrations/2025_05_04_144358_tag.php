<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create("beritas", function (Blueprint $table) {
            $table->id();
            $table->string("judul");
            $table->string("slug")->unique();
            $table->text("konten");
            $table->string("featured_image")->nullable();
            $table->string("status")->default("draft");
            $table
                ->foreignId("kategori_id")
                ->constrained("kategori_beritas")
                ->onDelete("cascade");
            $table->foreignId("user_id")->constrained()->onDelete("cascade");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists("beritas");
    }
};
