<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\Common;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    use Common;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        $messagess = Message::get()->where('read', 0);
        return view('Admin/users', compact('users', 'messagess'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $messagess = Message::get()->where('read', 0);
        return view('admin.addUser', compact('messagess'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $messages = $this->messages();
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'email_verified_at' => now(),
        ], $messages);
        $data['password'] = Hash::make($request->password);
        $data['Active'] = isset($data['Active']) ? 0 : 1;

        User::create($data);
        return redirect('Admin/users');
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        $user = User::findOrFail($id);
        $messagess = Message::get()->where('read', 0);
        return view('admin.userdetails', compact('user', 'messagess'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $user = User::findOrFail($id);
        $messagess = Message::get()->where('read', 0);
        return view('admin.edituser', compact('user', 'messagess'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        $messages = $this->messages();
        $users = User::find($id);
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
        ], $messages);
        if (isset($request->password)) {
            $data['password'] = Hash::make($request->password);
        }
        $data['Active'] = isset($request->Active);
        User::where('id', $id)->update($data);
        return redirect('Admin/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id', $id)->delete();
        return redirect('Admin/users');
    }

    private function messages()
    {
        return [
            'name.required' => __('messages.nameRequired'),
            'email.required' => __('messages.emailRequired'),
            'image.required' => __('messages.imageRequired'),
        ];
    }
}
