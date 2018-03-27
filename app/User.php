<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Request;

class User extends Model
{
    public function signup(){
        $username = Request::get('name');
        if(!($username || Request::get('password'))){
            return ['status' => 0, 'messages'=> '密码或用户名不能为空' ];
        }
    }
}
