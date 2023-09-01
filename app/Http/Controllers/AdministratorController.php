<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    // function administrator() {
    //     return view('administrator.theme');
    // }

    function dashboard() {
        return view('administrator.dashboard');
    }

    function user_admin() {
        return view('administrator.crud_user_admin');
    }

    function user_mhs() {
        return view('administrator.crud_user_mhs');
    }

    function data_barang() {
        return view('administrator.crud_barang');
    }

    // function crud_barang() {
    //     return view('administrator.crud_barang');
    // }
}
