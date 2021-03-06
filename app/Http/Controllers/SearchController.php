<?php

namespace Toto\Http\Controllers;

use Illuminate\Http\Request;
use Toto\Http\Controllers\Controller;
use Toto\Models\Message;

class SearchController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function search($term)
    {
        // @TODO: this will literally fail if nothing matches, deal with that.
        $message = Message::where('tags', '=', $term)->first();

        return response()->json(['message' => $message->message]);
    }
}
