<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $data=$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'user_type' => 'required',
            'photopath' => 'nullable|image|mimes:jpeg,png,jpg,gif|',
        ]);

        if ($request->file('photopath')) {
            $file = $request->file('photopath');
            $filename = $file->getClientOriginalName();
            $photopath = time() . '_' . $filename;
            $file->move(public_path('/images/users/'), $photopath);
            $data['photopath'] = $photopath;
        }

        User::create($data);

        return redirect()->route('user.index')->with('success', 'User created successfully.');
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8|confirmed',
            'user_type' => 'required',
            'photopath' => 'nullable|image|mimes:jpeg,png,jpg,gif|',
        ]);

       $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'user_type' => $request->input('user_type'),
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->input('password'));
        }

        if ($request->hasFile('photopath')) {
            $file = $request->file('photopath');
            $filename = $file->getClientOriginalName();
            $photopath = time() . '_' . $filename;
            $file->move(public_path('/images/users/'), $photopath);
            if ($user->photopath != null) {
                File::delete(public_path('/images/users/' . $user->photopath));
            }

            $data['photopath'] = $photopath;
        }
        $user->update($data);

        return redirect()->route('user.index')->with('success', 'User updated successfully.');
    }

    public function delete(Request $request)
    {
        $user = User::find($request->dataid);
        File::delete(public_path('/images/users/' . $user->photopath));
            $user->delete();
            return redirect()->route('user.index')->with('success', 'User deleted successfully.');
        
    }

    public function updateuserProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8|confirmed',
            'photopath' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->input('password'));
        }

        if ($request->hasFile('photopath')) {
            $file = $request->file('photopath');
            $filename = $file->getClientOriginalName();
            $photopath = time() . '_' . $filename;
            $file->move(public_path('/images/users/'), $photopath);
            // Delete the old photo if it exists
            if ($user->photopath) {
                File::delete(public_path('/images/services/' . $user->photopath));
            }
            $data['photopath'] = $photopath;
        }

        $user->update($data);

        return redirect()->route('userprofile')->with('success', 'Profile updated successfully.');
    }
}
