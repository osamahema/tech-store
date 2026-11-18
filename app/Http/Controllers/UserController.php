<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();

        return view('users', compact('users'));
    }

    public function create()
    {
        return view('add-user');
    }

    // Store new user
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8'
        ]);

        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect('/users');
    }

    // Show edit form
    public function edit($id)
    {
        $user = DB::table('users')
            ->where('id', $id)
            ->first();

        if (!$user) {
            abort(404);
        }

        return view('edit-user', compact('user'));
    }

    // Update user
    public function update(Request $request, $id)
    {
        $user = DB::table('users')
            ->where('id', $id)
            ->first();

        if (!$user) {
            abort(404);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($id)
            ],
            'password' => 'nullable|string|min:8'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'updated_at' => now()
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        DB::table('users')
            ->where('id', $id)
            ->update($data);

        return redirect('/users');
    }

    // Delete user
    public function destroy($id)
    {
        DB::table('users')
            ->where('id', $id)
            ->delete();

        return redirect('/users');
    }
}