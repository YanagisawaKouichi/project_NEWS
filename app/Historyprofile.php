<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historyprofile extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'profile_id' => 'required',
        'profileedited_at' => 'required',
        );
} 

