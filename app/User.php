<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Request;

class User extends Model
{
    public function signup(){
        return dd(Request::all());
    }
}
