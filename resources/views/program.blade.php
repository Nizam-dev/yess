@extends('template.master')

@section('content')

<section class="page-banner-section pt-75 pb-75 img-bg" style="background-image: url({{url('public/template/img/bg/common-bg.svg')}})">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="banner-content">
                    <h2 class="text-white">Program  Kami</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Ikuti update program kami</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feature-section pt-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                <div class="section-title text-center mb-55">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Program Kami</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                        Berikut adalah program kegiatan kami
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($data as $program)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-blog mb-40 wow fadeInUp card" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="blog-img">
                        <a href="{{url('program/'.$program->slug)}}"><img src="{{url('public/media/images/'.$program->thumnail)}}" width="100%" alt=""></a>
                        <span class="date-meta px-2">{{$program->kegiatan}}</span>
                    </div>
                    <div class="blog-content px-2 py-2">
                        <h5><a href="{{url('program/'.$program->slug)}}">{{ Str::limit($program->judul, 55) }}</a></h5>
                        <p>{{  Str::limit( strip_tags($program->content), 100)}}</p>
                        <a href="{{url('program/'.$program->slug)}}" class="read-more-btn">Read More <i
                                class="lni lni-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection