<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Log;

class DBSchemaToMDController extends Controller
{
    public function export(Request $request) {
        $tables = DB::select('show tables;');
        $md = '# DB Schema'.PHP_EOL;

        foreach ($tables as $table) {
            foreach ($table as $key => $value) {
                $md .= '## '.$value.PHP_EOL;
                $md .= '|Field|Type|Null|Key|Comment|'.PHP_EOL;
                $md .= '|:--|:--|:--|:--|:--|'.PHP_EOL;
                $infos = DB::select('show full columns from '.$value);
                foreach ($infos as $info) {
                    $md .= '|'.$info->Field.'|'.$info->Type.'|'
                        .$info->Null.'|'.$info->Key.'|'
                        .$info->Comment.'|'.PHP_EOL;
                }
                $md .= PHP_EOL;
            }
        }
        return $md;
    }
}
