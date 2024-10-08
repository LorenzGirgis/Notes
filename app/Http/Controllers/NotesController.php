<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class NotesController extends Controller
{
    public function index()
    {
        return view('Notes');
    }

}
  