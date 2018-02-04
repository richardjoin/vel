<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class photo_sort extends Model
{	
    //相片分类表
	public $table = 'photo_sort';

	public $timestamps = false; 

    protected $fillable = ['sort_img_id','sort_img_name','sort_img_type','img_password','user_id','img_sort_question','img_sort_answer','type_id','top_pic_src'];
    
	
    public function user()
    {
        return $this->hasOne('App\Model\user','id','user_id');
    }
    public function article()
    {
        return $this->hasMany('App\Model\article','uid','id');
    }


}
