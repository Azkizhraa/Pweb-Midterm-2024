<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;


class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['messages'] = Message::all();
        return view('message_board', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = new Message();
        $message->message = $request->message;
        $message->save();
        return redirect('/message_board');
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $Message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $Message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $Message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $Message)
    {
        //
    }
}
