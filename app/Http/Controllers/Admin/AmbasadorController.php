<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\ambasador;
use Carbon\Carbon;
use Illuminate\Support\Str;

class AmbasadorController extends Controller
{
    public function index()
    {
        $data = ambasador::orderBy('id','DESC')->get();
        return view('admin.ambasador',compact('data'));
    }

    public function add()
    {
        $path = public_path('provinsi.json');
        $prov = json_decode(file_get_contents($path), true);
        return view('admin.add-ambasador',compact('prov'));
    }

    public function post(Request $request)
    {
        $data = $request->all();
        if($request->hasFile('foto')){
            $tujuan_upload = public_path('media/images');
            $file = $request->file('foto');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            $data['foto'] = $namaFile;
        }

        $slug = Str::slug($data['nama']);
        $no_slug = 1;
        while(ambasador::where('slug',$slug)->first()){
            $slug = $slug.'-'.$no_slug;
            $no_slug++;
        }
        $data['slug'] = $slug;
        ambasador::create($data);
        return redirect('admin/ambasador')->with('success','Berhasil Ditambah');
    }

    public function edit($id)
    {
        $data = ambasador::findOrFail($id);
        $path = public_path('provinsi.json');
        $prov = json_decode(file_get_contents($path), true);
        return view('admin.edit-ambasador',compact('data','prov'));
    }

    public function update($id, Request $request)
    {
        $data = $request->except(['_token']);
        if($request->hasFile('foto')){
            $tujuan_upload = public_path('media/images');
            $file = $request->file('foto');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            $data['foto'] = $namaFile;
        }

        ambasador::where('id',$id)->update($data);
        return redirect('admin/ambasador')->with('success','Berhasil Disimpan');
    }

    public function delete($id)
    {
        ambasador::findOrFail($id)->delete();
        return redirect('admin/ambasador')->with('success','Berhasil Dihapus');
    }

}
