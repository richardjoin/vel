<?php
//友情链接表
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class friendly_link extends Model
{	
	public $table = 'friendly_link';

	public $timestamps = false; 

    protected $fillable = ['link_id','link_name','link_url','link_logo','show_order'];
    


}
