<?php

namespace App\Http\Controllers\Api\Account\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(Request $request)
    {
        try {
            echo "profile";
            // $input = $request->all();

            // $this->validate($request, [
            //     'username' => 'required',
            //     'password' => 'required',
            // ]);

            // $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
            // if (auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password']))) {
            //     echo "login success";
            //     return auth()->user();
            //     // return redirect()->route('home');
            // } else {
            //     return response()->json([
            //         'error' => 'Email-Address And Password Are Wrong.',
            //     ], 400);
            //     // return redirect()->route('login')
            //     //     ->with('error', 'Email-Address And Password Are Wrong.');
            // }
            // $user =  User::($request->all());

            // return new UserResource($user);
        } catch (\Throwable $th) {
            return response()->json([
                'error' => $th->getMessage(),
            ], 400);
        }
    }
}
