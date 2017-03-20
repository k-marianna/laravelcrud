<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\MemberprofitModel;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class MemberprofitCtr extends Controller {

		public function addprofitMember() {

		$title = $_POST['title'];
		// $discription = $_POST['discription'];
		$telp = $_POST['telp'];
		$num_title = new MemberprofitModel;
		$num_title->title = $title;
		// $num_title->discription = $discription;
		$num_title->telp = $telp;
		$num_title->save();

		return redirect('/')->with('successprofit', 'Member successfully added to database');

	}

	public function updateprofitMember() {

		$title = $_POST['id'];
		$title = $_POST['title'];
		// $discription = $_POST['discription'];
		$telp = $_POST['telp'];

		$num_title = MemberprofitModel::find($id);
		$num_title->title = $title;
		// $num_title->discription = $discription;
		$num_title->telp = $telp;
		$num_title->save();

		return redirect('/')->with('successprofit', 'Member successfully edited to database');

	}

	public function deleteprofitMember($id) {
		$num_title = MemberprofitModel::find($id);
		$num_title->delete();
		return redirect('/')->with('successprofit', 'Member successfully deleted');
	}

}
