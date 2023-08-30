<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;


class BookController extends Controller
{

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'book_name' => 'required',
            'book_price' => 'required|numeric',
            'page_count' => 'required|numeric',
            // ... other validation rules
            'book_icon' => 'required|image|mimes:jpeg,png,jpg,gif',
            'title_sound' => 'required|file|mimes:audio/mpeg',
            'worksheet' => 'required|file|mimes:pdf',
        ]);

        // Upload files
        $bookIconPath = $request->file('book_icon')->store('uploads');
        $titleSoundPath = $request->file('title_sound')->store('uploads');
        $worksheetPath = $request->file('worksheet')->store('uploads');

        // Create a new Book instance with validated data
        $book = new Book([
            'book_name' => $request->book_name,
            'book_price' => $request->book_price,
            'page_count' => $request->page_count,
            'book_publishers' => $request->book_publishers,
            'is_publish' => $request->is_publish,
            'book_description' => $request->description,
            'book_title' => $request->book_title,
            'book_icon' => $bookIconPath,
            'title_sound' => $titleSoundPath,
            'worksheet' => $worksheetPath,
        ]);

        // Save the book to the database
        $book->save();

        return redirect()->route('successPage');
    }
    public function success()
    {
        return view('success-page');
    }
}
