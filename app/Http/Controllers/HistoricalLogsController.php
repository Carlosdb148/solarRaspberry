<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class HistoricalLogsController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('jwt')->only(['peticion', 'getLogs']);
    }
    //
     public function admin()
    {   $data = null;
        $logs = array();
        
        if($data == null || $logs == null){
            return view('admin' , ['data' => $data,  'logs' => $logs]);
        }
    //  $data = Http::get("http://192.168.108.137:3000/execute");      
       // $logs = DB::select("select * from historical_logs");
        return view('admin', ['data' => $data->body(), 'logs' => $logs]);
        
        
        
    }
    public function peticion(Request $request){
        
        $data = Http::withHeaders(['Authentication' => $request->header('Authentication')])
        ->post("http://192.168.108.137:3000/execute", ['command' => $request->command]);
        
        
        return response()->json([   'command'     => $data->body(), 'request' => $request], 200);
        
        
    }
    public function getLogs(){
        $logs = DB::select("select * from historical_logs");
        
        return response()->json([   'logs'     => $logs], 200);
        
        
    }
    function databaseSave(){
        $data = Http::get("http://192.168.108.137:3000/execute");
        $jsondata = $data->body();
        console.log($jsondata);
    }
}
