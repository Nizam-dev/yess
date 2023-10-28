<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\postingan;
use App\Models\galery;
use App\Models\ambasador;
class DashboardController extends Controller
{
    public function index()
    {
        $programs  = postingan::orderBy('id','DESC')->take(3)->get();
        $kegiatans  = galery::orderBy('id','DESC')->take(3)->get();
        return view('welcome',compact('programs','kegiatans'));
    }

    public function program_view($name)
    {
        $data = postingan::where('slug',$name)->first();
        $recents =  postingan::orderBy('id','DESC')->take(3)->get();
        $categories = [
            'program' => postingan::count(),
            'kegiatan' => galery::count(),
            'ambasador' => ambasador::count(),
        ];
        if(!$data){
            return abort(404);
        }
        return view('program-view',compact('data','recents','categories'));
    }

    public function kegiatan_view($name)
    {
        $data = galery::where('slug',$name)->first();
        $recents =  galery::orderBy('id','DESC')->take(3)->get();
        $categories = [
            'program' => postingan::count(),
            'kegiatan' => galery::count(),
            'ambasador' => ambasador::count(),
        ];
        if(!$data){
            return abort(404);
        }
        return view('kegiatan-view',compact('data','recents','categories'));
    }

    public function ambasador_view($name)
    {
        $data = ambasador::where('slug',$name)->first();
        if(!$data){
            return abort(404);
        }
        return view('ambasador-view',compact('data'));
    }


    public function ambasador()
    {
        $data = ambasador::get();
        return view('ambasador',compact('data'));
    }

    public function program()
    {
        $data = postingan::get();
        return view('program',compact('data'));
    }

    public function kegiatan()
    {
        $data = galery::get();
        return view('kegiatan',compact('data'));
    }

    public function about()
    {
        return view('about');
    }
}
