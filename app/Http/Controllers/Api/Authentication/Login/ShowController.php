<?php

namespace App\Http\Controllers\Api\Authentication\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

/**
 * @group [API] Authentication
 */
class ShowController extends Controller
{
    /**
     * Login
     *
     * @bodyParam username required Name. Example: "Antok Antopo"
     * @bodyParam password required Password. Example: "default2021"
     *
     */
    public function index(Request $request)
    {
        try {
            $input = $request->all();

            $this->validate($request, [
                'username' => 'required',
                'password' => 'required',
            ]);

            $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

            var_dump(auth()->check($request->all()));
            exit;
            // if (auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password']))) {
            if (Auth::check(['username' => $request->username, 'password' => $request->password, false, false])) {
                return auth()->user();
            } else {
                return response()->json([
                    'error' => 'Email-Address And Password Are Wrong.',
                ], 400);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'error' => $th->getMessage(),
            ], 400);
        }
    }
}
