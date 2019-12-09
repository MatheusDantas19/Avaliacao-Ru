<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('admin.login');
    }

    public function loginAdmin (Request $request){
        $admin = Admin::where('nome', $request->nome)->first();
        if($admin)
            return view('admin.main');
        else
            print("nao achei");
    }

    public function main(){
        return view('admin.main');
    }
}
