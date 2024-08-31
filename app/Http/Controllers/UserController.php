<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    // user dashboard view
    public function UserDashboard(){
        $id = Auth::user()->id;
        $userData = User::find($id);
        return view('dashboard', compact('userData'));
    }
}
