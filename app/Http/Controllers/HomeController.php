<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('user');
    }
    function retrieveToken(Request $request){
        return response()->json(['request' => $request->name]);
    }

    function userPage(){
        $data = Http::post("http://192.168.108.137:3000/execute", ['command' => 'getData']);                
        return response()->json([   'data'     => $data->body()], 200);
        
        
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
        $tokenResult = $user->createToken('Access Token');
        $token = $tokenResult->token;
        $token->save();
        return response()->view('admin')->header('Authentication', $token);
    }
}
