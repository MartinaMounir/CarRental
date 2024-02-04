<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Message;

use Illuminate\Http\Request;
class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::get()->where('read', 0);
        $messagess = Message::get()->where('read', 0);
        return view('admin.messages', compact('messages','messagess'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,string $id)
    {
        $messages = Message::findOrFail($id);
        $updated = $messages->find($id)->update(['read'=>1]);
        $messagess = Message::get()->where('read', 0);
        return view('admin.showMessage', compact('messages','messagess'));
    }
    public function messagenavbar(Request $request,string $id)
    {
        $messages = Message::get()->where('read', 0);
        return view('admin.navbar', compact('messages'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Message::where('id', $id)->delete();
        return redirect('Admin/messages');
    }
}
