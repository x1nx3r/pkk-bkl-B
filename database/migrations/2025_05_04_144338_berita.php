<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create("kategori_beritas", function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string("slug")->unique();
            $table->text("deskripsi")->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists("kategori_beritas");
    }
};
