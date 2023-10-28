<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\postingan;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProgramController extends Controller
{
    public function index()
    {
        $data = postingan::orderBy('id','DESC')->get();
        return view('admin.program',compact('data'));
    }
    public function add()
    {
        return view('admin.add-program');
    }

    public function post(Request $request)
    {
        $data = $request->validate([
            'judul'=>'required',
            'kegiatan'=>'required',
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
        while(postingan::where('slug',$slug)->first()){
            $slug = $slug.'-'.$no_slug;
            $no_slug++;
        }
        $data['slug'] = $slug;
        postingan::create($data);
        return redirect('admin/program')->with('success','Berhasil Ditambah');
    }

    public function edit($id)
    {
        $data = postingan::findOrFail($id);
        return view('admin.edit-program',compact('data'));
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

        postingan::where('id',$id)->update($data);
        return redirect('admin/program')->with('success','Berhasil Disimpan');
    }

    public function delete($id)
    {
        postingan::findOrFail($id)->delete();
        return redirect('admin/program')->with('success','Berhasil Dihapus');
    }

}
