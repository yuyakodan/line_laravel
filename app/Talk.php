<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;


class Talk extends Model
{
    protected $fillable = [
        'user_id','user_name','content'
    ];
    
    protected $guarded = [
        'created_at','updated_at'
    ];
    
    
}
