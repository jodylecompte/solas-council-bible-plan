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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->integer('day');
            $table->string('nt_reading');
            $table->string('ot_reading');
            $table->unsignedBigInteger('creed_id');
            $table->unsignedBigInteger('catechism_id');
            $table->unsignedBigInteger('confession_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on(table: 'users');
            $table->foreign('creed_id')->references('id')->on('creeds');
            $table->foreign('catechism_id')->references('id')->on('catechisms');
            $table->foreign('confession_id')->references('id')->on('confessions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
