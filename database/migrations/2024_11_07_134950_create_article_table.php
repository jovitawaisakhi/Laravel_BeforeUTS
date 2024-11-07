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
        Schema::create('articles', function (Blueprint $table) {
            $table->id('ArticleID');
            $table->unsignedBigInteger('WriterID');
            $table->string('CategoryName');
            $table->string('ArticleName');
            $table->text('ArticleContent');
            $table->date('ArticleDate');
            $table->string('ArticleImage');

            $table->foreign('WriterID')->references('id')->on('writers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article');
    }
};
