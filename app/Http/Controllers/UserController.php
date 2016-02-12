<?php

namespace Toto\Http\Controllers;

use Illuminate\Http\Request;
use Toto\Http\Controllers\Controller;
use Toto\Models\User;

class UserController extends Controller
{

    /**
     * Display a list of users.
     *
     * @return Response
     */
	public function index()
	{
	    $users = User::all();
		return view('users.index', compact('users'));
	}

    /**
     * Show the form for creating a new user.
     *
     * @return Response
     */
	public function create()
	{
		return view('users.create');
	}

    /**
     * Store a newly created user.
     *
     * @return Response
     */
	public function store()
	{
		$input = Request::all();
		User::create($input);
		return redirect('users');
	}

    /**
     * Display the specified user.
     *
     * @param  int  $id
     * @return Response
     */
	public function show($id)
	{
	    // Eventually need to deal with what to do if the user is not found
		$user = User::find($id);
		return view('users.show', compact('user'));
	}

    /**
     * Show the form for editing a user.
     *
     * @param  int  $id
     * @return Response
     */
	public function edit($id)
	{
		$user = User::find($id);
		return view('users.edit', compact('user'));
	}

    /**
     * Update the specified user.
     *
     * @param  int  $id
     * @return Response
     */
	public function update($id)
	{
		$user = User::find($id);
		$input = Request::all();

		$user->update($input);

		return redirect('users');

	}

    /**
     * Remove the user.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id, Request $request)
    {
        $user = User::findOrFail($id);

        $user->delete();

        $request->session()->flash('status', $user->name . ' has been deleted!');

        return redirect()->route('users.index');
    }
}
