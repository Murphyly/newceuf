<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; 
use GuzzleHttp\Client;
use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = User::create($request->all());
 
        return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    
    /*public function register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        $user->save();
        $http = new Client;
        $response = $http->post(url('oauth/token'), [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => '22',
                'client_secret' => 'RsXqGmxTziwMeanZ3VLn0xXUVgfRLDUuv2lVkDpS',
                'username' => $request->email,
                'password' => $request->password,
                'scope' => '',
            ],
        ]);
        return response(['auth'=>json_decode((string) $response->getBody(), true),'user'=>$user]);
        
    }
    public function login(Request $request){
        
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $user= User::where('email',$request->email)->first();
        if(!$user){
            return response(['status'=>'error','message'=>'User not found']);
        }
        if(Hash::check($request->password, $user->password)){
                $http = new Client;
            $response = $http->post(url('oauth/token'), [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => '22',
                    'client_secret' => 'RsXqGmxTziwMeanZ3VLn0xXUVgfRLDUuv2lVkDpS',
                    'username' => $request->email,
                    'password' => $request->password,
                    'scope' => '',
                ],
            ]);
            return response(['auth' => json_decode((string)$response->getBody(), true), 'user' => $user]);
        
        }else{
            return response(['message'=>'password not match','status'=>'error']);
        }
    }
    public function refreshToken() {
        $http = new Client;
        $response = $http->post(url('oauth/token'), [
            'form_params' => [
                'grant_type' => 'refresh_token',
                'refresh_token' => request('refresh_token'),
                'client_id' => '22',
                'client_secret' => 'RsXqGmxTziwMeanZ3VLn0xXUVgfRLDUuv2lVkDpS',
                'scope' => '',
            ],
        ]);
        return json_decode((string) $response->getBody(), true);
    }*/

}
