@extends('templateadmin.master')
@section('title','Update Profile')

@section('content')

<div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="{{url('admin/profile')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="name" required value="{{auth()->user()->name}}">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" required value="{{auth()->user()->email}}">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <button class="btn btn-sm btn-primary float-end">Simpan</button>
                </form>
            </div>
        </div>
</div>

@endsection
@push('js')



@endpush