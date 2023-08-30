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
            $table->id();
            $table->unsignedBigInteger('book_id');
            $table->string('book_name');
            $table->string('f_book_name');
            $table->string('pt_sound_1')->nullable();
            $table->string('pt_sound_2')->nullable();
            $table->string('pt_sound_3')->nullable();
            $table->text('page_label')->nullable();
            $table->text('page_label_2')->nullable();
            $table->string('f_sound_1')->nullable();
            $table->string('f_sound_2')->nullable();
            $table->string('f_content_1')->nullable();
            $table->string('f_content_2')->nullable();
            $table->string('page_number')->nullable();
            $table->string('page_bg')->nullable();
            $table->string('lt_text')->nullable();
            $table->string('rt_text')->nullable();
            $table->string('lt_icon')->nullable();
            $table->string('rt_icon')->nullable();
            $table->string('lt_sound')->nullable();
            $table->string('rt_sound')->nullable();
            $table->string('lb_text')->nullable();
            $table->string('rb_text')->nullable();
            $table->string('lb_icon')->nullable();
            $table->string('rb_icon')->nullable();
            $table->string('lb_sound')->nullable();
            $table->string('rb_sound')->nullable();
            $table->text('content')->nullable();
            $table->text('page_title')->nullable();
            $table->timestamps();

            $table->foreign('book_id')->references('id')->on('books')->cascadeOnDelete();

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
