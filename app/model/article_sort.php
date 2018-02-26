<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class article_sort extends Model
{	
	public $table = 'article_sort';

	public $timestamps = false; 
    //user_id版主id
    protected $fillable = ['sort_article_id','user_id','sort_article__name'];
    
	
    public function user()
    {
        return $this->hasOne('App\Model\user','id','user_id');
    }
    public function article()
    {
        return $this->hasMany('App\Model\article','sort_article_id','sort_article_id');
    }


}
