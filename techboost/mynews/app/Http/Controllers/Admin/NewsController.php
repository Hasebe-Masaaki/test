<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //add関数
    public function add()
    {
        return view('admin.news.create');
    }
}
