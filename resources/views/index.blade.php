@extends('app')

@section('main')
    {{-- creating mobile --}}
    <section class="creating creating-mobile" data-aos="zoom-in" data-aos-duration="1000">
        <img src="{{ asset('img/left.png') }}" class="left" alt="Logo">
        <div class=content>
            <h2>{{ __('index.5') }}
                <br>
                <span class="background">{{ __('index.6') }}</span>
            </h2>
            <p>{{ __('index.7') }}</p>
            <span class="mobile-span">{{ __('index.3') }}</span>
            <a href="#">{{ __('index.4') }}</a>
        </div>
        <img src="{{ asset('img/right.png') }}" class="right" alt="Logo">
    </section>
    {{-- creating mobile --}}

    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 hero-text-content" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="content">
                        <h1>{{ __('index.1') }}</h1>
                        <div class="swiper-container mobile-slider"  data-aos="zoom-out" data-aos-duration="1000">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" style="background: url(/img/slider2.jpg);"></div>
                                <div class="swiper-slide" style="background: url(/img/slider3.jpg);"></div>
                                <div class="swiper-slide" style="background: url(/img/slider4.jpg);"></div>
                                <div class="swiper-slide" style="background: url(/img/slider5.jpg);"></div>
                                <div class="swiper-slide" style="background: url(/img/slider6.jpg);"></div>
                            </div>
                        </div>
                        <p>{{ __('index.2') }}</p>
                        <span>{{ __('index.3') }}</span>
                        <a href="#">{{ __('index.4') }}</a>
                    </div>

                </div>
                <div class="col-lg-8 hero-slider"  data-aos="zoom-out" data-aos-duration="1000">
                    <!-- Swiper -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="background: url(/img/slider2.jpg);"></div>
                            <div class="swiper-slide" style="background: url(/img/slider3.jpg);"></div>
                            <div class="swiper-slide" style="background: url(/img/slider4.jpg);"></div>
                            <div class="swiper-slide" style="background: url(/img/slider5.jpg);"></div>
                            <div class="swiper-slide" style="background: url(/img/slider6.jpg);"></div>
                        </div>
                    </div>
                </div>
    </section>


    <section class="creating">
        <img src="{{ asset('img/left.png') }}" alt="Logo">
        <div class="content"  data-aos="fade-up" data-aos-duration="1000">
            <h2>{{ __('index.5') }}
                <br>
                <span class="background">{{ __('index.6') }}</span>
            </h2>
            <p>{{ __('index.7') }}</p>
        </div>
        <img src="{{ asset('img/right.png') }}" alt="Logo" >
    </section>

    <section class="part-of-work">
        <h2  data-aos="fade-up" data-aos-duration="1000" >{{ __('index.8') }}</h2>
        <p data-aos="fade-up" data-aos-duration="1000" >{{ __('index.9') }}</p>
        <div class="owl-carousel owl-theme" data-aos="zoom-in" data-aos-duration="1000" >
            <div class="item">
                <img src="{{ asset('img/slider1.jpg') }}" alt="Logo">
            </div>
            <div class="item">
                <img src="{{ asset('img/slider2.jpg') }}" alt="Logo">
            </div>
            <div class="item">
                <img src="{{ asset('img/slider3.jpg') }}" alt="Logo">
            </div>
            <div class="item">
                <img src="{{ asset('img/slider4.jpg') }}" alt="Logo">
            </div>
            <div class="item">
                <img src="{{ asset('img/slider5.jpg') }}" alt="Logo">
            </div>
            <div class="item">
                <img src="{{ asset('img/slider6.jpg') }}" alt="Logo">
            </div>
        </div>
    </section>
    <section class="our-advantages">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-flex justify-content-center">
                    <div class="advantage-img" data-aos="fade-right" data-aos-duration="1000" >
                        <img src="{{ asset('img/advantage.png') }}" alt="advantage">
                    </div>
                </div>
                <div class="col-lg-4 align-self-center">
                    <h2 data-aos="fade-up" data-aos-duration="500" >{{ __('index.10') }}</h2>
                    <span data-aos="fade-up" data-aos-duration="500" >{{ __('index.11') }}</span>
                    <div class="advantage-carousel owl-carousel owl-theme">
                        <div class="advantage-slide">
                            <h3>{{ __('index.12') }}</h3>
                            <p>
                                {{ __('index.13') }}
                            </p>
                        </div>

                        <div class="advantage-slide">
                            <h3>{{ __('index.14') }}</h3>
                            <p>
                                {{ __('index.15') }}
                            </p>
                        </div>

                        <div class="advantage-slide">
                            <h3>{{ __('index.16') }}</h3>
                            <p>
                                {{ __('index.17') }}
                            </p>
                        </div>

                    </div>
                    <div class="advantage" data-aos="fade-up" data-aos-duration="1000" >
                        <h3>{{ __('index.12') }}</h3>
                        <p>
                            {{ __('index.13') }}
                        </p>
                    </div>
                    <div class="advantage" data-aos="fade-up" data-aos-duration="1500" >
                        <h3>{{ __('index.14') }}</h3>
                        <p>
                            {{ __('index.15') }}
                        </p>
                    </div>
                    <div class="advantage" data-aos="fade-up" data-aos-duration="2000" >
                        <h3>{{ __('index.16') }}</h3>
                        <p>
                            {{ __('index.17') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials" data-aos="fade-up" data-aos-duration="1000" >
        <div class="container">
            <h2> {{ __('index.18') }} </h2>
            <div class="testimonials-carousel owl-carousel owl-theme">
                <div class="slide">
                    <div class="testimonial card-1">
                        <div class="info">
                            <span class="card-time"> {{ __('index.19') }}</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>{{ __('index.20') }}</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>{{ __('index.21') }}</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>

                    <div class="testimonial card-2">
                        <div class="info">
                            <span class="card-time"> {{ __('index.19') }}</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>{{ __('index.20') }}</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>{{ __('index.21') }}</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>

                    <div class="testimonial card-3">
                        <div class="info">
                            <span class="card-time"> {{ __('index.19') }}</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>{{ __('index.20') }}</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>{{ __('index.21') }}</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="testimonial card-1">
                        <div class="info">
                            <span class="card-time"> {{ __('index.19') }}</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>{{ __('index.20') }}</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>{{ __('index.21') }}</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>

                    <div class="testimonial card-2">
                        <div class="info">
                            <span class="card-time"> {{ __('index.19') }}</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>{{ __('index.20') }}</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>{{ __('index.21') }}</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>

                    <div class="testimonial card-3">
                        <div class="info">
                            <span class="card-time"> {{ __('index.19') }}</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>{{ __('index.20') }}</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>{{ __('index.21') }}</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="testimonial card-1">
                        <div class="info">
                            <span class="card-time"> {{ __('index.19') }}</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>{{ __('index.20') }}</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>{{ __('index.21') }}</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>

                    <div class="testimonial card-2">
                        <div class="info">
                            <span class="card-time"> {{ __('index.19') }}</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>{{ __('index.20') }}</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>{{ __('index.21') }}</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>

                    <div class="testimonial card-3">
                        <div class="info">
                            <span class="card-time"> {{ __('index.19') }}</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>{{ __('index.20') }}</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>{{ __('index.21') }}</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="testimonial card-1">
                        <div class="info">
                            <span class="card-time"> {{ __('index.19') }}</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>{{ __('index.20') }}</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>{{ __('index.21') }}</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>

                    <div class="testimonial card-2">
                        <div class="info">
                            <span class="card-time"> {{ __('index.19') }}</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>{{ __('index.20') }}</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>{{ __('index.21') }}</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>

                    <div class="testimonial card-3">
                        <div class="info">
                            <span class="card-time"> {{ __('index.19') }}</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>{{ __('index.20') }}</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>{{ __('index.21') }}</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Start Features -->
    <section class="features">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4 col-md-7 image-content-col" data-aos="fade-right" data-aos-duration="1000" >
                    <div class="image-content">
                        <img src="{{ asset('img/features.png') }}" alt="features">

                    </div>
                </div>
                <div class="col-8 col-md-4">
                    <div class="info text-content" data-aos="fade-left" data-aos-duration="1000" >
                        <h2>{{ __('index.22') }}</h2>
                        <ul>
                            <li><span>&#10230;</span>{{ __('index.23') }} </li>
                            <li><span>&#10230;</span>{{ __('index.24') }} </li>
                            <li><span>&#10230;</span>{{ __('index.25') }} </li>
                            <li><span>&#10230;</span>{{ __('index.26') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features -->

    <!-- Start Contact Us -->
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 image-content" data-aos="zoom-in" data-aos-duration="1000" >
                    <img src="{{ asset('img/contact-image.png') }}" id="contact_image" alt="contact">
                    <img src="{{ asset('img/contact-image-mobile.png') }}" id="contact_mobile_image" alt="contact">
                </div>
                <div class="col-md-6" data-aos="zoom-out" data-aos-duration="1000" >
                    <form class="contact-form">
                        <h3>{{ __('index.27') }}</h3>
                        <div class="input">
                            <label for="fullName" class="form-label">{{ __('index.28') }} </label>
                            <input type="text" class="form-control" id="fullName" />
                        </div>
                        <div class="input">
                            <label for="email" class="form-label"> {{ __('index.29') }} </label>
                            <input type="email" class="form-control" id="email" />
                        </div>
                        <div class="input">
                            <label for="phoneNumber" class="form-label">{{ __('index.30') }}</label>
                            <input type="text" class="form-control" id="phoneNumber" />
                        </div>
                        <div class="input">
                            <label for="selectService" class="form-label">{{ __('index.31') }}</label>
                            <div class="">
                                <textarea class="form-control" id="Message" rows="6"></textarea>
                            </div>
                        </div>
                        <input type="submit" value="{{ __('index.32') }}">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Us -->

@stop
