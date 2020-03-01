<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Talk;
use App\User;
use Illuminate\Support\Facades\Auth;


class TalkController extends Controller
{
    public function talking(Request $request)
    {
        $users = Auth::user();
        $user_id=$users->id;

        $content=$request->input('content');
        Talk::create([
            'user_id'=>$user_id,
            'user_name'=>$users->name,
            'content'=>$content
        ]);
        
        $username=\App\Talk::whereUser_id($user_id)->update(['user_name' => $users]);
        
       
        return redirect()->route('talk');
    }
}
