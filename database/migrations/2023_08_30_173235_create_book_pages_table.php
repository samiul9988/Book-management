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
        Schema::create('book_pages', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('book_id'); // Foreign key to associate the page with a book
            $table->string('title'); // Page title
            $table->text('page_title_sound'); // Page title sound file name
            $table->text('page_title_sound_2'); // Page title sound 2 file name
            $table->text('page_title_sound_3'); // Page title sound 3 file name
            $table->longText('page_label'); // Footer 1 content
            $table->text('page_label_sound_1'); // Footer sound 1 file name
            $table->longText('page_label_2'); // Footer 2 content
            $table->text('page_label_sound_2'); // Footer sound 2 file name
            $table->string('page_number'); // Page number
            $table->text('bg_image'); // Background image file name
            $table->text('lt_text'); // Left top text
            $table->text('rt_text'); // Right top text
            $table->text('lt_icon'); // Left top icon file name
            $table->text('rt_icon'); // Right top icon file name
            $table->text('lt_sound'); // Left top sound
            $table->text('rt_sound'); // Right top sound
            $table->text('lb_text'); // Left bottom text
            $table->text('rb_text'); // Right bottom text
            $table->text('lb_icon'); // Left bottom icon file name
            $table->text('rb_icon'); // Right bottom icon file name
            $table->text('lb_sound'); // Left bottom sound
            $table->text('rb_sound'); // Right bottom sound
            $table->longText('page_content'); // Page content
            $table->text('page_title'); // Page title (not sure if this should be here)
            $table->timestamps(); // Created at and updated at timestamps

            // Define foreign key constraint
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_pages');
    }
};
