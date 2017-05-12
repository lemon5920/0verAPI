<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use Auth;
use DB;

use App\User;
use App\SchoolReviewer;

class SchoolReviewerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
