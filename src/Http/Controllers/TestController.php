<?php

namespace Blogufy\Crud\Http\Controllers;

use Blogufy\Crud\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('articles.index');
    }
}
