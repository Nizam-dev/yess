<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\galery;
use Carbon\Carbon;
use Illuminate\Support\Str;


class KegiatanController extends Controller
{
    public function index()
    {
        $data = galery::orderBy('id','DESC')->get();
        return view('admin.kegiatan',compact('data'));
    }
    public function add()
    {
        return view('admin.add-kegiatan');
    }
    public function post(Request $request)
    {
        $data = $request->validate([
            'judul'=>'required',
            'tanggal'=>'required',
            'content'=>'required',
            'thumnail'=>'required'
        ]);
        if($request->hasFile('thumnail')){
            $tujuan_upload = public_path('media/images');
            $file = $request->file('thumnail');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            $data['thumnail'] = $namaFile;
        }

        $slug = Str::slug($data['judul']);
        $no_slug = 1;
        while(galery::where('slug',$slug)->first()){
            $slug = $slug.'-'.$no_slug;
            $no_slug++;
        }
        $data['slug'] = $slug;
        galery::create($data);
        return redirect('admin/kegiatan')->with('success','Berhasil Ditambah');
    }

    public function edit($id)
    {
        $data = galery::findOrFail($id);
        return view('admin.edit-kegiatan',compact('data'));
    }

    public function update($id, Request $request)
    {
        $data = $request->except(['_token']);
        if($request->hasFile('thumnail')){
            $tujuan_upload = public_path('media/images');
            $file = $request->file('thumnail');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            $data['thumnail'] = $namaFile;
        }

        galery::where('id',$id)->update($data);
        return redirect('admin/kegiatan')->with('success','Berhasil Disimpan');
    }

    public function delete($id)
    {
        galery::findOrFail($id)->delete();
        return redirect('admin/kegiatan')->with('success','Berhasil Dihapus');
    }
}
