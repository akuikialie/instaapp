<?php

namespace App\Http\Controllers\Api\Feed;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\FeedResource;
use App\Models\Feed;
use Auth;

class AllController extends Controller
{
    public function index(Request $request)
    {
        $feed = Feed::where('user_id', $request->user_id)
            ->get();

        return FeedResource::collection($feed);
    }
}
