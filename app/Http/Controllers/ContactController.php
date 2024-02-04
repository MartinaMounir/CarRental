<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;
use App\Mail\ContactMail;
 class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact');
    }
    public function submitForm(Request $request)
    {
        $data = Message::create([
        'fullname' => $request->fullname,
        'email' => $request->email,
        'subject' => $request->subject,
        'messagecontent' => $request->messagecontent,
        'read'=>0,
    ]);
        Mail::to('MartinaMounir@gmail.com')->send(new ContactMail($data));


        return redirect()->back()->with('success', 'Email sent successfully!');
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
    public function show(string $id)
    {
        //
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
        //
    }
}
