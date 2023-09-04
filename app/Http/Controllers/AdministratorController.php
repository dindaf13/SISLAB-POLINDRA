<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class AdministratorController extends Controller
{
    // function administrator() {
    //     return view('administrator.theme');
    // }

    function dashboard() {
        return view('administrator.dashboard');
    }

    public function user_admin() {

        $data = Admin::all();
        // dd($data);
        return view('administrator.crud_user_admin',compact('data'));
    }

    public function admin_create() {
        return view('administrator.admin_create');
    }

    public function insertdata(Request $request) {
        // dd($request->all());
        Admin::create($request->all());
        return redirect()->route('user_admin')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function tampilkan_data_admin($id) {

        $data = Admin::find($id);
        // dd($data);
        return view ('administrator.admin_edit', compact('data'));
    }

    public function update_data_admin(Request $request, $id) {
        $data = Admin::find($id);
        $data->update($request->all());
        return redirect()->route('user_admin')->with('success',' Data Berhasil Di Update');
    }

    public function delete_data_admin ($id) {
        $data = Admin::find($id);
        $data->delete();
        return redirect()->route('user_admin')->with('success',' Data Berhasil Di Hapus');
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
