<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        //return 'Landing Page';
        return view('admin/auth/register');
    }
}
