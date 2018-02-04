<?php
//广告表
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ad extends Model
{	
	public $table = 'ad';

	public $timestamps = false; 

    protected $fillable = ['ad_id','media_type','ad_name','ad_link','ad_code','start_time','end_time','link_man','link_email','link_phone','click_count','enabled'];
}
