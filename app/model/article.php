<?php
//文章内容表
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{	
	public $table = 'article';

	public $timestamps = false; 

    protected $fillable = ['article_id','article_name','article_time','article_ip','article_click','sort_article_id','user_id','type_id','article_type','article_content','article_up','article_support'];
    
	
    public function user()
    {
        return $this->hasOne('App\Model\user','id','user_id');
    }
    public function sort_article_id()
    {
        return $this->hasOne('App\Model\article_sort','sort_article_id','sort_article_id');
    }

    public function article_sort()
    {
        return $this->hasOne('App\Model\article_sort','sort_article_id','type_id');
    }
  /*  public function article_sort()
    {
        return $this->hasMany('App\Model\article_sort','sort_article_id','type_id');
    }*/


}
