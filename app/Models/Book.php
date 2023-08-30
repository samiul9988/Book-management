<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_name',
        'book_price',
        'page_count',
        'book_publishers',
        'is_publish',
        'book_description',
        'book_title',
        'book_icon',
        'title_sound',
        'worksheet',
    ];

    public function pages(){
        return $this->hasMany(BookPage::class);
    }
}
