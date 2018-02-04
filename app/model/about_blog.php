<?php
//微博信息表
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class about_blog extends Model
{	
	public $table = 'about_blog';

	public $timestamps = false; 

    protected $fillable = ['blog_id','blog_keyword','blog_description','blog_name','blog_title'];
    
}
