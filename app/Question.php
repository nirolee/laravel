<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Request;
class Question extends Model
{
   public function add(){
       if(!user_ins()->is_login())
           return ['status' => '0', 'msg' => 'login required'];
       $title = rq('title');
       if(rq('desc'))
           return $desc = rq('desc');
       $user_id = session('user_id');
       if(!$title)
           return ['status' => '0', 'msg' => 'title required'] ;
       
       $quesion = $this;
       
       
        
       $quesion->title = $title;
       $quesion->desc = $desc;
       $quesion->user_id = $user_id;
   }
}
