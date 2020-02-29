<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talk extends Model
{
    protected $fillable = [
        'user_name','content'
    ];
    
    protected $guarded = [
        'created_at','updated_at'
    ];
    
}
