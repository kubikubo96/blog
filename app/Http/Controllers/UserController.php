<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $users = User::all();

        return view('view', compact('users'));
    }

    function showFormAddUser()
    {
        return view('store');
    }

    function store(Request $request)
    {
        $users = new User();

        $users->name = $request->name;

        $users->save();

//        return redirect('/store');
        return redirect()->route('users.view.store')->with('status', 'Save Success!');
    }

    function showFormEditUser($id)
    {
        $user = User::find($id);

        return view('edit',['user' => $user]);
    }

    function edit(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->name;

        $user->save();

//        return redirect('edit/'.$user->id);
        return redirect()->route('users.edit', ['id' => $id])->with('status', 'Edit Success!');
    }

    function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/');
    }
}
