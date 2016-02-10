<?php

namespace Toto\Http\Controllers;

use Illuminate\Http\Request;

use Toto\Http\Controllers\Controller;
use Toto\Models\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $messages = Message::all();

        return view('messages.index', array('messages' => $messages));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'message' => 'required',
            'day_to_send' => 'required|integer',
        ]);

        $input = $request->all();

        Message::create($input);

        $request->session()->flash('status', 'Message has been saved!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $message = Message::find($id);

        return view('messages.show')->withMessage($message);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $message = Message::findOrFail($id);

        return view('messages.edit')->withMessage($message);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $message = Message::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'message' => 'required',
            'day_to_send' => 'required|integer',
        ]);

        $input = $request->all();

        $message->fill($input)->save();

        $request->session()->flash('status', 'Message has been saved!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id, Request $request)
    {
        $message = Message::findOrFail($id);

        $message->delete();

        $request->session()->flash('status', 'Message has been deleted!');

        return redirect()->route('message.index');
    }
}
