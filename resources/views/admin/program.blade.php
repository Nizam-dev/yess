@extends('templateadmin.master')
@section('title','Program')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header bg-purple">
        <a href="{{url('admin/program/add')}}" class="btn btn-sm btn-warning float-end mb-3">Add Program</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Thumnail</th>
                            <th>Kegiatan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($data as $no=>$program)
                            <tr>
                                <td>{{$no+1}}</td>
                                <td>{{$program->judul}}</td>
                                <td>
                                    <img src="{{ url('public/media/images/'.$program->thumnail) }}" class="rounded" width="50px" height="50px">
                                </td>
                                <td>{{$program->kegiatan}}</td>
                                <td>
                                <a href="{{url('admin/program/edit/'.$program->id)}}" class="btn btn-sm btn-warning">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{url('admin/program/delete/'.$program->id)}}" class="btn btn-sm btn-danger">
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