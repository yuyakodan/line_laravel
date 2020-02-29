<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Talk;
use Illuminate\Support\Facades\Auth;


class TalkController extends Controller
{
    public function talking(Request $request)
    {
        $user=Auth::user();
        
        $content=$request->input('content');
        Talk::create([
            'user_name'=>$user->name,
            'content'=>$content
        ]);
        return redirect()->route('talk');
    }
}
