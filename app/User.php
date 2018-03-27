<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Hash;
use Request;

class User extends Model
{
    public function signup(){
        $username = Request::get('username');
        $password = Request::get('password');
        if(!($username && $password))
            return ['status' => 0, 'messages' => '密码或用户名不能为空' ];
        $user_exists = $this->where('name',$username)->exists();
        if($user_exists)
           return ['status' => 0, 'messages' => '该用户名已经注册']; 
        $user = $this;
        $user->password = bcrypt($password);
        $user->name = $username;
        if($user->save())
            return ['status' => 1, 'id' => $user->id];
        else
            
        
    }
}
