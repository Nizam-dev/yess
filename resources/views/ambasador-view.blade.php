@extends('template.master')

@section('content')


<section id="about" class="pt-100">
    <div class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-img-wrapper">
                        <div class="about-img position-relative d-inline-block wow fadeInLeft" data-wow-delay=".3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;width:100%;">
                            <img src="{{asset('public/media/images/'.$data->foto)}}" alt="">

                            <div class="about-experience">
                                <h3 style="font-size:18px;">{{$data->nama}}</h3>
                                <p>{{$data->provinsi}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-content-wrapper">
                        <div class="section-title">
                            <h4 class="mb-40 wow fadeInRight text-justify" data-wow-delay=".4s"
                                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight; text-align : justify;">
                                {{$data->note}}
                            </h4>
                        </div>
                        <div class="about-content">
                            <h6 class="mb-0 wow fadeInUp" data-wow-delay=".6s"
                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                {{$data->nama}}
                            </h6>
                            <p class="wow fadeInUp" data-wow-delay=".6s"
                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                {{$data->provinsi}}
                            </p>
                            <p class="wow fadeInUp" data-wow-delay=".6s"
                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                {{$data->email}}
                            </p>
                            <p class="mb-45 wow fadeInUp" data-wow-delay=".6s"
                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                {{$data->alamat}}
                            </p>
                            <div class="counter-up wow fadeInUp" data-wow-delay=".5s"
                                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                <a href="javascript:void(0)" class="theme-btn">Let's Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-section pt-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="left-side-wrapper mb-60">
                    <div class="single-blog blog-style-2 mb-60 wow fadeInUp" data-wow-delay=".2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="blog-img blog-img-2">
                            <img src="{{url('public/media/images/'.$data->thumnail)}}" alt="">
                        </div>
                        <div class="blog-content">
                 

                            {!! $data->content !!}

                        </div>
                    </div>




                </div>
            </div>

          
        </div>
    </div>
</section>


@endsection