<?php

//use Illuminate\Http\Request;
use App\User;
use App\Question;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
function user_ins(){
    return new User;
}
function question_ins(){
    return new Question;
}
function rq($key=null,$default=null){
    if(!$key){
        return Request::all();
    } else {
        return Request::get($key, $default);
    }
}
Route::get('user',function(){
   return user_ins()->signup();
});
Route::get('login',function(){
    return user_ins()->login();
});
Route::get('test',function(){
    return user_ins()->test();
});
Route::get('logout',function(){
    return user_ins()->logout();
});
Route::get('question/add', function(){
   return question_ins()->add(); 
});