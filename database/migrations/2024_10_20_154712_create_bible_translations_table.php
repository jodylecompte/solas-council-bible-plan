<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBibleTranslationsTable extends Migration
{
    public function up()
    {
        Schema::create('bible_translations', function (Blueprint $table) {
            $table->id();
            $table->string('short_name', 10)->unique();
            $table->string('full_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bible_translations');
    }
}
