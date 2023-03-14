<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    function retrieveToken(Request $request){
        return response()->json(['request' => $request->name]);
    }

    function userPage(){
        $data = Http::post("http://192.168.108.137:3000/execute", ['command' => 'getData']);                
        return response()->json([   'data'     => $data->body()], 200);
        
        
    }
    function getPic(){
        $data = Http::get("http://192.168.108.137:3000/image");    
        return response()->view('index', ['data' => $data]);
    }
    
    function loginAdmin(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        $user = Auth::user();
        $payload = ['user' => $user]; 
        $key = 'secreto';
        $token = JWT::encode($payload, $key, 'HS256');
        
        return response()->view('admin', ['token' => $token])->header('Authorization', $token);
    }
}
