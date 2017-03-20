<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberprofitModel extends Model {


	protected $tableprofit = 'membersprofit';
	protected $primaryKeyprofit = 'id';
	protected $fillableprofit = array(
			'title',
			'telp'
		);


}
