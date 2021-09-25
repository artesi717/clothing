<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user=User::findOrFail($user);
        return view('profile.index',compact('user'));
    }

    public function edit(User $user)
    {
        return view('profile.edit',compact('user'));


    }

    public function update(User $user)
    {
        $data=request()->validate([
            'description'=>'required',
        ]);

        auth()->user()->profile->fill($data)->save();

        return redirect("/profile/{$user->id}");

    }
}
