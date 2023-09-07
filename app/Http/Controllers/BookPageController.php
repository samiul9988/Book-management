<?php

namespace App\Http\Controllers;

use App\Models\BookPage;
use Illuminate\Http\Request;

class BookPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.add-page');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'book_id' => 'required|exists:books,id',
            'title' => 'required|string|max:255',
            'page_title_sound' => 'required|mimes:audio/*', // Adjust validation as needed
            'page_title_sound_2' => 'mimes:audio/*', // Optional, adjust validation as needed
            'page_title_sound_3' => 'mimes:audio/*', // Optional, adjust validation as needed
            'page_label' => 'required|string',
            'page_label_sound_1' => 'required|mimes:audio/*', // Adjust validation as needed
            'page_label_2' => 'string', // Optional, adjust validation as needed
            'page_label_sound_2' => 'mimes:audio/*', // Optional, adjust validation as needed
            'page_number' => 'required|string',
            'bg_image' => 'required|mimes:image/*', // Adjust validation as needed
            'lt_text' => 'required|string',
            'rt_text' => 'required|string',
            'lt_icon' => 'required|mimes:image/*', // Adjust validation as needed
            'rt_icon' => 'required|mimes:image/*', // Adjust validation as needed
            'lt_sound' => 'required|string',
            'rt_sound' => 'required|string',
            'lb_text' => 'required|string',
            'rb_text' => 'required|string',
            'lb_icon' => 'required|mimes:image/*', // Adjust validation as needed
            'rb_icon' => 'required|mimes:image/*', // Adjust validation as needed
            'lb_sound' => 'required|string',
            'rb_sound' => 'required|string',
            'page_content' => 'required|string',
            'page_title' => 'string', // Optional, adjust validation as needed
        ]);

        // Handle file uploads
        $page_title_sound = $request->file('page_title_sound')->store('page_sounds');
        $page_title_sound_2 = $request->file('page_title_sound_2') ? $request->file('page_title_sound_2')->store('page_sounds') : null;
        $page_title_sound_3 = $request->file('page_title_sound_3') ? $request->file('page_title_sound_3')->store('page_sounds') : null;
        $page_label_sound_1 = $request->file('page_label_sound_1')->store('page_sounds');
        $page_label_sound_2 = $request->file('page_label_sound_2') ? $request->file('page_label_sound_2')->store('page_sounds') : null;
        $bg_image = $request->file('bg_image')->store('page_images');
        $lt_icon = $request->file('lt_icon')->store('page_icons');
        $rt_icon = $request->file('rt_icon')->store('page_icons');
        $lb_icon = $request->file('lb_icon')->store('page_icons');
        $rb_icon = $request->file('rb_icon')->store('page_icons');

        // Create a new BookPage instance and save it to the database
        $bookPage = new BookPage([
            'book_id' => $validatedData['book_id'],
            'title' => $validatedData['title'],
            'page_title_sound' => $page_title_sound,
            'page_title_sound_2' => $page_title_sound_2,
            'page_title_sound_3' => $page_title_sound_3,
            'page_label' => $validatedData['page_label'],
            'page_label_sound_1' => $page_label_sound_1,
            'page_label_2' => $validatedData['page_label_2'],
            'page_label_sound_2' => $page_label_sound_2,
            'page_number' => $validatedData['page_number'],
            'bg_image' => $bg_image,
            'lt_text' => $validatedData['lt_text'],
            'rt_text' => $validatedData['rt_text'],
            'lt_icon' => $lt_icon,
            'rt_icon' => $rt_icon,
            'lt_sound' => $validatedData['lt_sound'],
            'rt_sound' => $validatedData['rt_sound'],
            'lb_text' => $validatedData['lb_text'],
            'rb_text' => $validatedData['rb_text'],
            'lb_icon' => $lb_icon,
            'rb_icon' => $rb_icon,
            'lb_sound' => $validatedData['lb_sound'],
            'rb_sound' => $validatedData['rb_sound'],
            'page_content' => $validatedData['page_content'],
            'page_title' => $validatedData['page_title'],
        ]);

        $bookPage->save();

        // Redirect to a success page or route
        return redirect()->route('bookpages.create')->with('success', 'Book page created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
