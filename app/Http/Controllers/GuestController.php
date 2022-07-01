<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    public function index(){
        if(Auth::user() -> sys_role == env("ROLE_ADMIN")){
            return redirect() -> route("a-home");
        } else if(Auth::user() -> sys_role == env("ROLE_STAFF")){
            return redirect() -> route("s-home");
        }

    }
}
