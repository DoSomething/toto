<?php

namespace Toto\Http\Controllers;
use DB;
use Request;
use Toto\Http\Controllers\Controller;
use Toto\Models\User;

class UserController extends Controller 
{

	public function index()
	{
	    $users = DB::table('users')->get();

		return view('users.index', compact('users'));
	}

	public function create()
	{
		return view('users.create');
	}


	public function store()
	{
		$input = Request::all();

		User::create($input);

		return $input;
	}

	public function show()
	{
		var_dump("show user");
	}
}
