@extends('template.master')

@section('content')


<section id="about" class="pt-100">
    <div class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-img-wrapper">
                        <div class="about-img position-relative d-inline-block wow fadeInLeft" data-wow-delay=".3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                            <img src="{{asset('public/media/bg/ketua.png')}}" alt="">

                            <div class="about-experience">
                                <h3>Rizky Bayu Pradana</h3>
                                <p>Ketua umum Young Ambassador Agriculture 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-content-wrapper">
                        <div class="section-title">
                            <h4 class="mb-40 wow fadeInRight text-wrap" data-wow-delay=".4s"
                                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                “Sudah saatnya kita
                                yang muda menjadi pelopor. Hanya ditangan kita, Indonesia emas 2024 dapat benar-benar
                                terwujud, khususnya di sektor pertanian”
                            </h4>
                        </div>
                        <div class="about-content">
                            <h6 class="mb-0 wow fadeInUp" data-wow-delay=".6s"
                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                Rizky Bayu Pradana
                            </h6>
                            <p class="mb-45 wow fadeInUp" data-wow-delay=".6s"
                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                Ketua umum Young Ambassador Agriculture 2023
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

<section class="feature-section pt-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 mx-auto">
                <div class="section-title text-center mb-55">
                    <span class="wow fadeInDown" data-wow-delay=".2s">PROFILE TOP 50 YOUNG AMBASSADOR AGRICULTURE </span>
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                    KEMENTERIAN PERTANIAN REPUBLIK INDONESIA
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($data as $ambasador)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-blog mb-40 wow fadeInUp card" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="blog-img">
                        <a href="{{url('ambasador/'.$ambasador->slug)}}"><img src="{{url('public/media/images/'.$ambasador->foto)}}" width="100%" alt=""></a>
                    </div>
                    <div class="blog-content px-2 py-2">
                        <h6><a href="{{url('ambasador/'.$ambasador->slug)}}">{{ $ambasador->nama }}</a></h6>
                        <p>{{$ambasador->provinsi}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection