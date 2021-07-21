<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    public function create()
    {
       return view('clients.create');    
    }

    public function index()
    {
        $users = User::where('id','<>',1)->get();
       return view('clients.index',compact('users'));    
    }

    public function save(Request $request)
     {
          $user = new User();
          $user->name = $request->name;
          $user->email = $request->phone;
          $user->save();

          return redirect()->route('clients');
     }
}
