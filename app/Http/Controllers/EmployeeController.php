<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class EmployeeController extends Controller
{
    public function index()
    {
        //return 'hi';

        $users = User::all();

        //dd($users);

        //return view('todo.index');

        return view('todo.index', [
            'users' => $users
        ]);
    }

    public function get()
    {
        $users = User::all();

        return response()->json($users);
    }

    public function update(Request $request)
    {
        //return 'hi';
        //return '123';
        //return $request->all();
        
        /*
        $user = new User();
        $user->name = $request->name;
        $user->email = 'abc@abc';
        $user->password = 'pass123456';
        $user->save();
        */

        $request->validate([
            'name' => 'required|mix:1'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->name . '@abcdef',
            'password' => bcrypt('pass123456')
        ]);

        //return $request->name;
        //return $user;
        return redirect('employee');
    }

    public function destroy(Request $request, User $user)
    {
        // dd($user);
        $user->delete();
        return redirect('employee');
    }
}
