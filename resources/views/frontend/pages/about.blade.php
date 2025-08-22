@extends('frontend.layouts.app')


@section('content')
    @include('frontend.inc.breadcrumb')
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30">
                    <div class="section-head mb-20">
                        <div class="section-subtitle">Since 2006</div>
                        <div class="section-title">{{$about->name}}</div>
                    </div>
                    <p>{!! $about->content !!}</p>
                    <p>{!! $about->vision !!}</p>
                    <p>{!! $about->mission !!}</p>
                </div>
                <div class="col col-md-3"><img src="{{asset($about->image_url)}}" alt="" class="mt-90 mb-30"></div>
            </div>
        </div>
    </section>
    <section class="services-box section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="item"><span class="{{$settings['home_hero_image_1']}}"></span>
                        <div class="cont">
                            <h5>{{$settings['home_hero_title_1']}}</h5>
                            <p>{{$settings['home_hero_description_1']}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item"><span class="{{$settings['home_hero_image_2']}}"></span>
                        <div class="cont">
                            <h5>{{$settings['home_hero_title_2']}}</h5>
                            <p>{{$settings['home_hero_description_2']}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item"><span class="{{$settings['home_hero_image_3']}}"></span>
                        <div class="cont">
                            <h5>{{$settings['home_hero_title_3']}}</h5>
                            <p>{{$settings['home_hero_description_3']}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team -->
    <section class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-head text-center">
                        <div class="section-subtitle">Our Barbers</div>
                        <div class="section-title white">Hair Stylists</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="team-card mb-30">
                            <div class="team-img"><img src="img/team/b1.jpg" alt="" class="w-100"></div>
                            <div class="team-content">
                                <h3 class="team-title">Philip Brown<span>Barber</span></h3>
                                <p class="team-text">Nulla quis efficitur lacus sulvinar suere ausue in eduis euro
                                    vesatien arcuman ontese auctor ac aleuam aretra.</p>
                                <div class="social">
                                    <div class="full-width"><a href="#"><i class="ti-linkedin"></i></a> <a href="#"><i
                                                class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter"></i></a>
                                        <a href="#"><i class="ti-instagram"></i></a></div>
                                </div>
                                <a href="team-details.html" class="button-1 mt-20">Team Details<span></span></a>
                            </div>
                            <div class="title-box">
                                <h3 class="mb-0">Philip Brown<span>Barber</span></h3>
                            </div>
                        </div>
                        <div class="team-card mb-30">
                            <div class="team-img"><img src="img/team/b2.jpg" alt="" class="w-100"></div>
                            <div class="team-content">
                                <h3 class="team-title">Stephen Martin<span>Stylist</span></h3>
                                <p class="team-text">Nulla quis efficitur lacus sulvinar suere ausue in eduis euro
                                    vesatien arcuman ontese auctor ac aleuam aretra.</p>
                                <div class="social">
                                    <div class="full-width"><a href="#"><i class="ti-linkedin"></i></a> <a href="#"><i
                                                class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter"></i></a>
                                        <a href="#"><i class="ti-instagram"></i></a></div>
                                </div>
                                <a href="team-details.html" class="button-1 mt-20">Team Details<span></span></a>
                            </div>
                            <div class="title-box">
                                <h3 class="mb-0">Stephen Martin<span>Stylist</span></h3>
                            </div>
                        </div>
                        <div class="team-card mb-30">
                            <div class="team-img"><img src="img/team/b3.jpg" alt="" class="w-100"></div>
                            <div class="team-content">
                                <h3 class="team-title">Dennis Dan<span>Barber</span></h3>
                                <p class="team-text">Nulla quis efficitur lacus sulvinar suere ausue in eduis euro
                                    vesatien arcuman ontese auctor ac aleuam aretra.</p>
                                <div class="social">
                                    <div class="full-width"><a href="#"><i class="ti-linkedin"></i></a> <a href="#"><i
                                                class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter"></i></a>
                                        <a href="#"><i class="ti-instagram"></i></a></div>
                                </div>
                                <a href="team-details.html" class="button-1 mt-20">Team Details<span></span></a>
                            </div>
                            <div class="title-box">
                                <h3 class="mb-0">Dennis Dan<span>Barber</span></h3>
                            </div>
                        </div>
                        <div class="team-card mb-30">
                            <div class="team-img"><img src="img/team/b4.jpg" alt="" class="w-100"></div>
                            <div class="team-content">
                                <h3 class="team-title">Helen Brown<span>Barber</span></h3>
                                <p class="team-text">Nulla quis efficitur lacus sulvinar suere ausue in eduis euro
                                    vesatien arcuman ontese auctor ac aleuam aretra.</p>
                                <div class="social">
                                    <div class="full-width"><a href="#"><i class="ti-linkedin"></i></a> <a href="#"><i
                                                class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter"></i></a>
                                        <a href="#"><i class="ti-instagram"></i></a></div>
                                </div>
                                <a href="team-details.html" class="button-1 mt-20">Team Details<span></span></a>
                            </div>
                            <div class="title-box">
                                <h3 class="mb-0">Helen Brown<span>Barber</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
