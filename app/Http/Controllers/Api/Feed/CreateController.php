<?php

namespace App\Http\Controllers\Api\Feed;

use App\Exceptions\FailedException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\FeedResource;
use App\Models\Feed;
use Auth;

class CreateController extends Controller
{
    public function index(Request $request)
    {
        try {
            $feed = Feed::create($request->all());

            return new FeedResource($feed);
        } catch (\Throwable $th) {
            throw (new FailedException($th));
        }
    }
}
