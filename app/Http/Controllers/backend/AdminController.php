<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard(){
        return view('admin/dashboard');
    }

    public function login(){
        return view('admin.auth.login');
    }

    public function show(Request $request){
        $books = Book::where('is_publish',0)->get();

        return view('admin.admindashboard', compact('books'));
    }
}
