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
        Schema::create('produk_aklis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('detail');
            $table->string('gambar_file');
            $table->boolean('status_produk')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk_aklis');
    }
};
