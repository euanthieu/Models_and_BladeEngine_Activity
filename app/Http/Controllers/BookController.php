<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the books.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }
}
