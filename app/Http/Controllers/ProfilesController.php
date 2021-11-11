<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function index($user){

    //    $user = User::find($user);

    //     return view('home', [
    //         'user' => $user
    //     ]);
    // }
}
