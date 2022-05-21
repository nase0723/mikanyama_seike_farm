<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageMenuList;

class HomeController extends Controller
{
    public function index() {
        // return dd(PageMenuList::get());
        return view('home');
    }
}
