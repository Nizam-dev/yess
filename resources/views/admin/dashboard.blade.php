@extends('templateadmin.master')
@section('title','Dashboard')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="row">
                    <div class="col-4">
                        <div class="card-body bg-warning text-white">
                           <i class="mdi mdi-account-box" style="font-size : 50px;"></i>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card-body text-center">
                            <h4 class="fw-bold text-secondary">Ambasador</h4>
                            <h3>{{$data['ambasador']}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="row">
                    <div class="col-4">
                        <div class="card-body bg-danger text-white">
                           <i class="mdi mdi-all-inclusive" style="font-size : 50px;"></i>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card-body text-center">
                            <h4 class="fw-bold text-secondary">Galery</h4>
                            <h3>{{$data['galery']}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="row">
                    <div class="col-4">
                        <div class="card-body bg-success text-white">
                           <i class="mdi mdi-bulletin-board" style="font-size : 50px;"></i>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card-body text-center">
                            <h4 class=" fw-bold text-secondary">Program</h4>
                            <h3>{{$data['postingan']}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
@push('js')



@endpush