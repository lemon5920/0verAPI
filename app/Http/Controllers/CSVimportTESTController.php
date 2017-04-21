<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Excel;

class CSVimportTESTController extends Controller
{
    public function import(Request $request) {
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:csv,txt',
        ]);

        if ($validator->fails()) {
            $messages = $validator->errors()->all();
            return response()->json(compact('messages'), 400);
        }

        $enctype = mb_detect_encoding(file_get_contents($request->file), 'UTF-8, BIG-5', true);

        return Excel::load($request->file, function($reader) {
            // Getting all results
        }, $enctype)->get();
    }
}
