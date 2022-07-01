<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{

    public function home(){
        $data["title"]  = "Ana Sayfa";
        $data["mph"] = "&emsp;&emsp;&emsp;&emsp;&nbsp;<i class='fa-solid fa-house '></i>&emsp;Ana Sayfa";
        $data["content"] = view("users.staff.main");
        $data["sidebar"] = view("users.staff.sidebar");
        $data["footer"] = view("users.staff.footer");
        return view("users.staff",$data);
    }

    public function listParks(){
        $data["title"] = "Parklarım";
        $data["mph"] = "&nbsp;&nbsp;<i class='fas fa-tree-city'></i>&emsp;Parklar";
        $datas["parks"] = DB::table("parks") -> get();
        $data["content"] = view("users.staff.parks",$datas);
        $data["sidebar"] = view("users.staff.sidebar");
        $data["footer"] = view("users.staff.footer");
        return view("users.staff",$data);
    }
}
