@extends('templateadmin.master')
@section('title','Kegiatan')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header bg-purple">
        <a href="{{url('admin/kegiatan/add')}}" class="btn btn-sm btn-warning float-end mb-3">Add Kegiatan</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Thumnail</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($data as $no=>$kegiatan)
                       <tr>
                            <td>{{$no+1}}</td>
                            <td>{{$kegiatan->judul}}</td>
                            <td>{{$kegiatan->tanggal}}</td>
                            <td>
                                <img src="{{ url('public/media/images/'.$kegiatan->thumnail) }}" class="rounded" width="50px" height="50px">
                            </td>
                            <td>
                                    <a href="{{url('admin/kegiatan/edit/'.$kegiatan->id)}}" class="btn btn-sm btn-warning">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{url('admin/kegiatan/delete/'.$kegiatan->id)}}" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                            </td>
                       </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </div>
</div>

@endsection
@push('js')

<script>
    new DataTable('#example');
</script>

@endpush