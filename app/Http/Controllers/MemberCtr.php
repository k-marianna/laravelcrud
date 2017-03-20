<?php namespace App\Http\Controllers;

// use App\Http\Requests;
// use App\MemberModel;


// use App\Http\Controllers\Controller;

// use Illuminate\Http\Request;
// use Illuminate\Http\RedirectResponse;


use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests;
use App\MemberModel;



class MemberCtr extends Controller {

	public function addMember() {

		$title = $_POST['title'];
		// $discription = $_POST['discription'];
		$telp = $_POST['telp'];
		$num_title = new MemberModel;
		$num_title->title = $title;
		// $num_title->discription = $discription;
		$num_title->telp = $telp;
		$num_title->save();

		return redirect('/')->with('success', 'Member successfully added to database');

	}

	public function updateMember() {

		$title = $_POST['id'];
		$title = $_POST['title'];
		// $discription = $_POST['discription'];
		$telp = $_POST['telp'];

		$num_title = MemberModel::find($id);
		$num_title->title = $title;
		// $num_title->discription = $discription;
		$num_title->telp = $telp;
		$num_title->save();

		return redirect('/')->with('success', 'Member successfully edited to database');

	}

	public function deleteMember($id) {
		$num_title = MemberModel::find($id);
		$num_title->delete();
		return redirect('/')->with('success', 'Member successfully deleted');
	}

}
