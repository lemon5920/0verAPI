<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use Auth;
use DB;

use App\User;
use App\SchoolEditor;
use App\SchoolData;

class SchoolEditorController extends Controller
{
    //public function __construct()
    //{
    //    $this->middleware('auth');
    //}

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $school_code
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $school_code)
    {
        if (SchoolData::where('id', '=', $school_code)->exists()) {
            return User::whereHas('school_editor', function ($query) use ($school_code) {
                $query->where('school_code', '=', $school_code);
            })->with('school_editor')->get();
        }

        $messages = array('This School is NOT exist!');

        return response()->json(compact('messages'), 404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
