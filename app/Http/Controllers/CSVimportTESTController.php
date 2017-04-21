<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Excel;
use DB;
use Log;

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

        $json_obj = Excel::load($request->file, function($reader) {
            // Getting all results
        }, $enctype)->get();

        $priorities = 70; // 可填的志願數

        $query = [];
        for ($i = 0; $i < count($json_obj); $i++) {
            $id = $json_obj[$i]["准考證號"];
            $idcode = DB::select('select idcode from applicant where id = ?', array($id));

            if (!$idcode) {
                continue;
            }

            Log::info($idcode);
            Log::info($id);

            // $query[i] = "insert "
            for ($j = 0; $j < $priorities; $j++) {
                $oldcode = $json_obj[$i]['s'.($j+1)];
                Log::info($oldcode);
            }
        }

        return $json_obj[0];
    }
}
