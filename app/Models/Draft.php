<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Draft extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'drafts';

    protected $fillable = [
        'book_name',
        'book_price',
        'page_count',
        'book_publisher',
        'is_publish',
        'description',
        'book_title',
        'book_icon',
        'title_sound',
        'worksheet',
    ];
}
