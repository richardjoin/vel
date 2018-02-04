<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class photos extends Model
{	
	public $table = 'photos';

	public $timestamps = false; 

    protected $fillable = ['photo_id','photo_name','photo_src','photo_description','user_id','sort_id','upload_time','upload_ip'];
    
	
    public function user()
    {
        return $this->hasOne('App\Model\user','id','user_id');
    }
    public function photo_sort()
    {
        return $this->hasMany('App\Model\photo_sort','sort_img_id','sort_id');
    }


}
