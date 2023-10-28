@extends('templateadmin.master')
@section('title','Ambasador')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header bg-purple">
        <a href="{{url('admin/ambasador/add')}}" class="btn btn-sm btn-warning float-end mb-3">Add Ambasador</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Foto</th>
                            <th>Note</th>
                            <th>Email</th>
                            <th>Provinsi</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        @foreach($data as $no=>$ambasador)
                            <tr>
                                <td>{{$no+1}}</td>
                                <td>{{$ambasador->nama}}</td>
                                <td>
                                    <img src="{{ url('public/media/images/'.$ambasador->foto) }}" class="rounded" width="50px" height="50px">
                                </td>
                                <td>{{$ambasador->note}}</td>
                                <td>{{$ambasador->email}}</td>
                                <td>{{$ambasador->provinsi}}</td>
                                <td>
                                <a href="{{url('admin/ambasador/edit/'.$ambasador->id)}}" class="btn btn-sm btn-warning">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{url('admin/ambasador/delete/'.$ambasador->id)}}" class="btn btn-sm btn-danger">
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