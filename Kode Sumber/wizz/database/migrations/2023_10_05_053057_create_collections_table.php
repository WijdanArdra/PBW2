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
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->string('namaKoleksi',100);
            $table->tinyInteger('jenisKoleksi')->comment('1.: Buku, 2: Majalah, 3. Cakram Digital');
            $table->date('createdAt');
            $table->integer('jumlahKoleksi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collections');
    }
};

// Wijdan Ardra Fulvian 6706223137 46-04