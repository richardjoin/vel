<?php
//用户评论表
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user_comment extends Model
{	
	public $table = 'user_comment';

	public $timestamps = false; 

    protected $fillable = ['c_id','user_id','type_id','commit_id','commit_content','commit_user_id','commit_time','commit_ip'];
    
	
    public function user()
    {
        return $this->hasOne('App\Model\user','id','c_id');
    }
    //文章id
    public function article()
    {
        return $this->hasOne('App\Model\article','article_id','c_id');
    }
    public function user()
    {
        return $this->hasMany('App\Model\user','uid','c_id');
    }


}
