<?php
//管理员表
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{	
	public $table = 'login';

	public $timestamps = false; 

    protected $fillable = ['id','name','password'];
}
