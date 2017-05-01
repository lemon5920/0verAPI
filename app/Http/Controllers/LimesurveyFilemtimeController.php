<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use DB;
use Log;

class LimesurveyFilemtimeController extends Controller
{
    public function export(Request $request) {
        $validator = Validator::make($request->all(), [
            'lid' => 'required|string',
            'file_column' => 'required|string'
        ]);

        if ($validator->fails()) {
            $messages = $validator->errors()->all();
            return response()->json(compact('messages'), 400);
        }

        $id = $request->lid;
        $file_column = $request->file_column;
        $file = $id.'X'.$file_column;
        $path = '/home/hjwu/LimeSurvey/upload/surveys/'.$id.'files/';
        $result = [];

        $table = DB::Connection('limesurvey')->select(
            'select lime_tokens_'.$id.'.firstname, lime_survey_'.$id.'.'.$file
                .' from lime_tokens_'.$id.', lime_survey_'.$id
                .' where lime_tokens_'.$id.'.token = lime_survey_'.$id.'.token;'
        );

        foreach ($table as $row) {
            if (json_decode($row->$file)[0]) {
                $result = array_add($result, $row->firstname, filemtime($path.json_decode($row->$file)[0]->filename));
                // Log::info($row->firstname.': '.json_decode($row->$file)[0]->filename);
            }
        }
    }
}
