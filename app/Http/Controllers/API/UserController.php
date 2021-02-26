<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function updateUser(int $id, Request $request){
            $user = User::find($id);

            $user->name = $request->username;
            $user->password = $request->password;
//            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
            return response()->json(["success"=>'ok'],200);
    }

    public function registerUser(Request $request){

        $this->validate($request, [
            'name' => 'required|min:3',
            'username' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->name = $request->username;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->roles_id = getRoleByName("illustrateur")->id;
//            $user->role_id = 2;
        // craete token for auth
        $token =  $token = $user->createToken('ALphaLabo')->accessToken;

        $user->save();

        return response()
            ->json(["success"=>true, "userData"=>$user, 'token'=> $token],200);
    }

    public function loginUser( Request $request){

        $userToLogin = [
            'email' => $request->username,
            'password' => $request->password
        ];

        if (auth()->attempt($userToLogin)) {

            $user = User::whereEmail($request->username)->get();

            $token = auth()->user()->createToken('TutsForWeb')->accessToken;

            return response()->json(["success"=>true, 'token' => $token, 'user'=> $user], 200);

        } else {
            return response()->json(['error' => 'Non Authorisé !'], 401);
        }

    }

    public function details()
    {
        return response()->json(['user' => auth()->user()], 200);
    }

}
