<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct(){
        $this -> middleware(["auth"]);
    }

    public function home(){
        $data["title"]  = "Ana Sayfa";
        $data["mph"] = "&nbsp;<i class='fa-solid fa-house '></i>&emsp;Ana Sayfa";
        $datas["parks"] = DB::table("parks") -> get();
        $data["content"] = view("users.admin.main",$datas);
        $data["sidebar"] = view("users.admin.sidebar");
        $data["footer"] = view("users.admin.footer");
        return view("users.admin",$data);
    }

    public function listUsers(){
        $data["title"]  = "Kullanıcılar";
        $data["mph"] = "&nbsp;&nbsp;<i class='fa-solid fa-user'></i>&emsp;Personeller";
        $datas["users"] = DB::table("users") -> where("sys_role","=",2) -> get();
        $data["content"] = view("users.admin.users",$datas);
        $data["sidebar"] = view("users.admin.sidebar");
        $data["footer"] = view("users.admin.footer");

        return view("users.admin",$data);
    }


    public function addUser(Request $request){

        $message = ["required" => "Bu alana değer girilmesi zorunludur.",
            "unique" => "Bu veri ile aktive edilmiş bir hesap zaten var!"
        ];

        Validator::make($request -> all(),
            [
                "name" => ["required","min:2"],
                "email" => ["required","unique:users","email"],
                "sys_role" => ["required"],
                "password" => ["required","max:10"],
                "tckn" => ["required","unique:users","max:11"]
            ], $message) -> validate();

        $result = DB::table("users")->insert(
            [
                "name" => $request -> name,
                "email" => $request -> email,
                "sys_role" => $request -> sys_role,
                "email_verified_at" => date('Y-m-d H:i:s',time()),
                "password" => Hash::make($request -> password),
                "tckn" => $request -> tckn
            ]
        );

        if ($result){
            return redirect(route("a-users")) -> with(["message" => "Kayıt işlemi başarılı."]);
        } else {
            return redirect(route("a-users"))->with(["message" => "Kaydetme işlemi sırasında hata oluştu."]);
        }
    }

    public function updateUser(){

    }

    public function listParks(){
        $data1["parks"] = DB::table("parks") -> get();
        $data["title"]  = "Parklar";
        $data["mph"] = "&nbsp;&nbsp;<i class='fas fa-tree-city'></i>&emsp;Parklar";
        $data["content"] = view("users.admin.parks",$data1);
        $data["sidebar"] = view("users.admin.sidebar");
        $data["footer"] = view("users.admin.footer");
        return view("users.admin",$data);
    }

    public function addPark(Request $request){

        $message = ["required" => "Bu alana değer girilmesi zorunludur.",
            "unique" => "Bu veri ile aktive edilmiş bir hesap zaten var!"
        ];

        Validator::make($request -> all(),
            [
                "name" => ["required","min:10"],
                "loc_x" => ["required","min:6"],
                "loc_y" => ["required","min:6"]
            ], $message) -> validate();

        $result = DB::table("parks")->insert(
            [
                "park_name" => $request -> name,
                "loc_x" => $request -> loc_x,
                "loc_y" => $request -> loc_y
            ]
        );

        if ($result){
            return redirect(route("a-parks")) -> with(["message" => "Park başarıyla tanımlandı."]);
        } else {
            return redirect(route("a-parks"))->with(["message" => "Park tanımlanırken bir sorun oluştu."]);
        }
    }

}
