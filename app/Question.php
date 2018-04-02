<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Request;
class Question extends Model
{
   public function add(){
       if(!user_ins()->is_login())
           return ['status' => '0', 'msg' => 'login required'];
       $this->title = rq('title');
       if(rq('desc'))
          $this->desc = rq('desc');
       $this->user_id = session('user_id');
       if(!$this->title)
           return ['status' => '0', 'msg' => 'title required'] ;
       return $this->save() ?
           ['status' => 1, 'id' => $this->id] :
           ['status' => 0, 'msg' => 'db insert failed'];
   }
}
