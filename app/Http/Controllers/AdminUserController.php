<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    //
    private function onlyAdmin()
    {
        if (!auth()->check() || auth()->user()->role !== 'admin') {
            abort(403, 'Akses khusus admin');
        }
    }

    public function index()
    {
        $this->onlyAdmin();

        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        $this->onlyAdmin();

        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $this->onlyAdmin();

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);

        return redirect('/admin/users');
    }

    public function edit($id)
    {
        $this->onlyAdmin();

        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->onlyAdmin();

        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'role' => $request->role,
        ]);

        return redirect('/admin/users');
    }

    public function destroy($id)
    {
        $this->onlyAdmin();

        User::destroy($id);
        return back();
    }
}
