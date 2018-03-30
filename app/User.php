<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Hash;
use Request;

class User extends Model
{
    public function signup(){
        $has_username_and_password = $this->has_username_and_password();
        if(!($has_username_and_password))
            return ['status' => 0, 'msg' => '密码或用户名不能为空' ];
        $user_exists = $this->where('name',$has_username_and_password[0])->exists();
        if($user_exists)
           return ['status' => 0, 'msg' => '该用户名已经注册']; 
        $user = $this;
        $user->password = bcrypt($has_username_and_password[1]);
        $user->name = $has_username_and_password[0];
        if($user->save()){
            return ['status' => 1, 'id' => $user->id];
        }else{
            return ['status' => 0, 'msg' => '注册失败'];
        }
    }
    
    public function login(){
        $has_username_and_password = $this->has_username_and_password();
        if(!($has_username_and_password))
            return ['status' => 0, 'msg' => '密码或用户名不能为空' ];
        $username = $has_username_and_password[0];
        $password = $has_username_and_password[1];
        $user = $this->where('name', $username)->first();
        if(!$user)
            return ['status' => 0, 'msg' => '用户不存在'];
        $hashed_password = $user->password;
        if(!Hash::check($password, $hashed_password))
            return ['status' => 0, 'msg' => '密码错误'];
        session()->put('username',$user->name);
        session()->put('user_id',$user->id);
        return ['status' => 1, 'user_id' => $user->id] ;
    }
    
    public function logout(){
       session()->forget('user_id');
       return ['status' => 1];
    }

    public function has_username_and_password(){
        $username = Request::get('username');
        $password = Request::get('password');
        /*检查用户名和密码是否为空*/
        if($username && $password)
            return [$username,$password];
        return FALSE;
    }
    /*检查用户是否登陆*/
    public function is_login() {
        return session('user_id') ?: false;
    }
    
}
