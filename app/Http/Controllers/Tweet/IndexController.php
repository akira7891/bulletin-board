<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tweets=Tweet::all();
        return view('tweet.index',['tweets'=>$tweets]);
    }
}
