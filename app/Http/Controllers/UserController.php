<?php

namespace App\Http\Controllers;
use DB;
use Request;
use App\Http\Controllers\Controller;

class UserController extends Controller {

	public function index()
	{
	    $users = DB::table('users')->get();
	    // dd(compact('query'));
        // $users = $query->paginate(25)->appends(Input::all());


		return view('users.index', compact('users'));
	}

	public function create()
	{
		return view('users.create');
	}

	public function store()
	{
		// $input = Input::all();
		$input = Request::all();
		$user = new User;
		$user->start_date = $input['start_date'];
		$user->name = $input['name'];
		$user->slack_name = $input['slack_name'];
		user()->save($user);


		return $user;
	}
}

// , ['user' => User::findorFail($id)]);