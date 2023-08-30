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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('book_name');
            $table->integer('book_price')->nullable();
            $table->integer('page_count')->nullable();
            $table->string('book_publisher')->nullable();
            $table->string('is_publish')->nullable();
            $table->text('book_icon')->nullable();
            $table->text('worksheet')->nullable();
            $table->string('title_sound')->nullable();
            $table->text('description')->nullable();
            $table->text('book_title')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');

    }
};
