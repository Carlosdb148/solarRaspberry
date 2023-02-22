<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class HistoricalLogsController extends Controller
{
    //
     public function consulta()
    {   $data = null;
        $logs = array();
        
        if($data == null || $logs == null){
            return view('admin' , ['data' => $data,  'logs' => $logs]);
        }
    //  $data = Http::get("http://192.168.108.137:3000/execute");      
       // $logs = DB::select("select * from historical_logs");
        return view('admin', ['data' => $data->body(), 'logs' => $logs]);
        
        
        
    }
    public function peticion(){
        $data = Http::get("http://192.168.108.137:3000/execute");
        $logs = DB::select("select * from historical_logs");
        
        return response()->json([   'data'     => $data->body(),
        'logs' =>$logs], 200);
        
        
    }
    function databaseSave(){
        $data = Http::get("http://192.168.108.137:3000/execute");
        $jsondata = $data->body();
        console.log($jsondata);
    }
}
