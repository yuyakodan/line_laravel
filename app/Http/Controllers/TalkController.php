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
        $user_id = $user->id;
        $content=$request->input('content');
        Talk::create([
            'user_id'=>$user_id,
            'user_name'=>$user->name,
            'content'=>$content
        ]);
        return redirect()->route('talk');
    }
}
