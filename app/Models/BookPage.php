<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookPage extends Model
{
    use HasFactory;

    protected $fillable = ['page_number', 'content'];

    public function book(){
        return $this->belongsTo(Book::class);
    }
}
