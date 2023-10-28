<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ImagesUploaderController extends Controller
{
    public function upload(Request $request)
    {
        if($request->hasFile('file')){
            $tujuan_upload = public_path('media/images');
            $file = $request->file('file');
            $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
        }
        return response()->json([
            'location'=> url('public/media/images/'.$namaFile)
        ]);
    }
}
