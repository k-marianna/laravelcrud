<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model {

	protected $table = 'members';
	protected $primaryKey = 'id';
	protected $fillable = array(
			'title',
			// 'discription',
			'telp'
		);

}
