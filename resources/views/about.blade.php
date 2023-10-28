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
                            <img src="{{asset('public/media/bg/agribg.png')}}" alt="">

                           
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-content-wrapper">
                        <div class="section-title">
                            <h4 class="mb-40 wow fadeInRight text-wrap" data-wow-delay=".4s"
                                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                Youth Entrepreneur and Employment Support Services (YESS)
                            </h4>
                        </div>
                        <div class="about-content">
                            <p class="mb-45 wow fadeInUp" data-wow-delay=".6s"
                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                Program kerjasama antara Kementerian Pertanian (Kementan) dengan International Fund For Agricultural Development (IFAD).
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


@endsection