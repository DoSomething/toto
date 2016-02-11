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
	    $users = User::all();
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
		return redirect('users');
	}

	public function show($id)
	{
	    // Eventually need to deal with what to do if the user is not found
		$user = User::find($id);
		return view('users.show', compact('user'));
	}

	public function edit($id)
	{
		$user = User::find($id);
		return view('users.edit', compact('user'));
	}

	public function update($id)
	{
		$user = User::find($id);
		$input = Request::all();

		$user->update($input);

		return redirect('users');

	}
}
