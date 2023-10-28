<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\postingan;
use App\Models\galery;
use App\Models\ambasador;
class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'ambasador' => ambasador::count(),
            'galery' => galery::count(),
            'postingan' => postingan::count(),
        ];
        return view('admin.dashboard',compact('data'));
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function update_profile(Request $request)
    {
        $data = $request->except(['_token','password']);
        if($request->password){
            $data['password'] = bcrypt($request->password);
        }

        auth()->user()->update($data);
        return redirect()->back()->with('success','Berhasil diupdate');
    }
}
