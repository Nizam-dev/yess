@extends('template.master')
@section('content')

<!-- ========================= hero-section start ========================= -->
<section id="home" class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6">
                <div class="hero-content-wrapper">
                    <h2 class="mb-25 wow fadeInDown" data-wow-delay=".2s">
                        Young Ambbasador
                        Agriculture
                    </h2>
                    <h1 class="mb-25 wow fadeInDown" data-wow-delay=".2s">SAATNYA YANG MUDA
                        BERKARYA</h1>
                    <p class="mb-35 wow fadeInLeft" data-wow-delay=".4s">
                        Yayasan Young Ambbasador Agriculture Kementerian Pertanian Republik Indonesia
                        #bergerakbermanfaat
                    </p>
                    <a href="javascript:void(0)" class="theme-btn">Get Started</a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="hero-img">
                    <div class="d-inline-block hero-img-right">
                        <img src="{{asset('public/media/bg/yessbg.png')}}" alt="" class="image wow fadeInRight"
                            data-wow-delay=".5s">
                        <img src="{{asset('public/template/img/hero/dots.shape.svg')}}" alt="" class="dot-shape">
                        <div class="video-btn">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= hero-section end ========================= -->



<!-- ========================= feature-section start ========================= -->
<section class="feature-section pt-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                <div class="section-title text-center mb-55">
                    <span class="wow fadeInDown" data-wow-delay=".2s">WHAT WE SERVE </span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Program Kami</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                        Berikut adalah program kegiatan kami
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($programs as $program)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-blog mb-40 wow fadeInUp card" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="blog-img">
                        <a href="{{url('program/'.$program->slug)}}"><img
                                src="{{url('public/media/images/'.$program->thumnail)}}" width="100%" alt=""></a>
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
        <a href="{{url('program')}}" class="read-more-btn float-end">Selengkapnya <i
                class="lni lni-arrow-right"></i></a>
    </div>
</section>
<!-- ========================= feature-section end ========================= -->


<section class="feature-section pt-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                <div class="section-title text-center mb-55">
                    <span class="wow fadeInDown" data-wow-delay=".2s">WHAT WE SERVE </span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Galery Kami</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                        Berikut adalah program kegiatan kami
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($kegiatans as $kegiatan)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-blog mb-40 wow fadeInUp card" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="blog-img">
                        <a href="{{url('kegiatan/'.$kegiatan->slug)}}"><img
                                src="{{url('public/media/images/'.$kegiatan->thumnail)}}" width="100%" alt=""></a>
                        <span class="date-meta px-2">{{$kegiatan->tanggal}}</span>
                    </div>
                    <div class="blog-content px-2 py-2">
                        <h5><a href="{{url('kegiatan/'.$kegiatan->slug)}}">{{ Str::limit($kegiatan->judul, 55) }}</a>
                        </h5>
                        <p>{{  Str::limit( strip_tags($kegiatan->content), 100)}}</p>
                        <a href="{{url('kegiatan/'.$kegiatan->slug)}}" class="read-more-btn">Read More <i
                                class="lni lni-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <a href="{{url('kegiatan')}}" class="read-more-btn float-end">Selengkapnya <i
                class="lni lni-arrow-right"></i></a>
    </div>
</section>

<section id="about" class="pt-100">
    <div class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-img-wrapper">
                        <div class="about-img position-relative d-inline-block wow fadeInLeft" data-wow-delay=".3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                            <img src="{{url('public/media/bg/agribgg.jpg')}}" alt="">

                            <div class="about-experience">
                                <h3>YeSS</h3>
                                <p>Young Ambbasador Agriculture 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-content-wrapper">
                        <div class="section-title">
                           
                            <h2 class="mb-40 wow fadeInRight" data-wow-delay=".4s"
                                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                We always provide the best service for you</h2>
                        </div>
                        <div class="about-content">
                            <p class="mb-45 wow fadeInUp" data-wow-delay=".6s"
                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                
                            </p>
                            <div class="counter-up wow fadeInUp" data-wow-delay=".5s"
                                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                <div class="counter">
                                    <span id="secondo" class="countup count color-1" cup-end="20"
                                        cup-append="">20</span>
                                    <h4>Mitra</h4>
                              
                                </div>
                                <div class="counter">
                                    <span id="secondo" class="countup count color-2" cup-end="50"
                                        cup-append="K+">50k+</span>
                                    <h4>Jangkauan</h4>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- ========================= contact-section start ========================= -->
<section id="contact" class="contact-section cta-bg img-bg pt-110 pb-100"
    style="background-image: url('assets/img/bg/cta-bg.jpg');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-7">
                <div class="section-title mb-60">
                    <span class="text-white wow fadeInDown" data-wow-delay=".2s">Contact</span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".4s">Do you have any question Right now?</h2>
                    <p class="text-white wow fadeInUp" data-wow-delay=".6s">
                    Young Ambbasador Agriculture 2023    
                    </p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-5">
                <div class="contact-btn text-start text-lg-end">
                    <a href="" class="theme-btn">Contact Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= contact-section end ========================= -->




@endsection