<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolReviewerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
