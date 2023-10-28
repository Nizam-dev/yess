@extends('template.master')

@section('content')



<section class="blog-section pt-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="left-side-wrapper mb-60">
                    <div class="single-blog blog-style-2 mb-60 wow fadeInUp" data-wow-delay=".2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="blog-img blog-img-2">
                            <img src="{{url('public/media/images/'.$data->thumnail)}}" alt="">
                        </div>
                        <div class="blog-content">
                            <h4>{{$data->judul}}</h4>
                            <h6>{{$data->tanggal}}</h6>

                            {!! $data->content !!}

                        </div>
                    </div>




                </div>
            </div>

            <div class="col-xl-4 col-lg-5">
                <div class="sidebar-wrapper mb-60">
                    <!-- <div class="sidebar-box search-form-box mb-30">
                        <form action="#" class="search-form">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><i class="lni lni-search-alt"></i></button>
                        </form>
                    </div> -->

                    <div class="sidebar-box recent-blog-box mb-30">
                        <h4>Recent Blog</h4>
                        <div class="recent-blog-items">

                            @foreach($recents as $r)
                            <div class="recent-blog mb-30">
                                <div class="recent-blog-img">
                                    <img src="{{url('public/media/images/'.$r->thumnail)}}" alt="">
                                </div>
                                <div class="recent-blog-content">
                                    <h5><a href="{{url('program/'.$r->slug)}}">{{ Str::limit($r->judul, 33) }}</a></h5>
                                    <span class="date">{{$r->tanggal}}</span>
                                </div>
                            </div>
                            @endforeach
                           
                        </div>
                    </div>

                    <div class="sidebar-box catagories-box mb-30">
                        <h4>Catagories</h4>
                        <ul>
                            <li>
                                <a href="{{url('program')}}">
                                    <span>Program</span>
                                    <span class="ml-2">( {{$categories['program']}} )</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('kegiatan')}}">
                                    <span>Galery Kegiatan</span>
                                    <span class="ml-2">( {{$categories['kegiatan']}} )</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('ambasador')}}">
                                    <span>Ambasador</span>
                                    <span class="ml-2">( {{$categories['ambasador']}} )</span>
                                </a>
                            </li>

                        </ul>
                    </div>




                </div>
            </div>
        </div>
    </div>
</section>


@endsection