<?php

namespace App\Http\Controllers\Api\Authentication\Register;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Resources\UserResource;

class CreateController extends Controller
{
    public function index(Request $request)
    {
        try {
            $user =  User::create($request->all());

            return new UserResource($user);
        } catch (\Throwable $th) {
            return response()->json([
                'error' => $th->getMessage(),
            ], 400);
        }
    }
}
