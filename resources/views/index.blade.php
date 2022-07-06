@extends('app')

@section('main')
    {{-- creating mobile --}}
    <section class="creating creating-mobile">
        <img src="{{ asset('img/left.png') }}" class="left" alt="Logo">
        <div class=content>
            <h2>We love creating
                <br>
                <span class="background">beauty</span>
            </h2>
            <p>We believe that beauty is a desire for everyone, we will realize in your residence</p>
            <span class="mobile-span">TO SEE OUR FULL WORKS, PLEASE CONTACT US</span>
            <a href="#">Contact Us</a>
        </div>
        <img src="{{ asset('img/right.png') }}" class="right" alt="Logo">
    </section>
    {{-- creating mobile --}}

    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 hero-text-content">
                    <div class="content">
                        <h1>Create a home that define who you are!</h1>
                        <div class="swiper-container mobile-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" style="background: url(/img/slider2.jpg);"></div>
                                <div class="swiper-slide" style="background: url(/img/slider3.jpg);"></div>
                                <div class="swiper-slide" style="background: url(/img/slider4.jpg);"></div>
                                <div class="swiper-slide" style="background: url(/img/slider5.jpg);"></div>
                                <div class="swiper-slide" style="background: url(/img/slider6.jpg);"></div>
                            </div>
                        </div>
                        <p>Natural beauty that you can get in your residence. Turn your home into a luxury palace with our
                            collection.</p>
                        <span>TO SEE OUR FULL WORKS, PLEASE CONTACT US</span>
                        <a href="#">Contact Us</a>
                    </div>

                </div>
                <div class="col-lg-8 hero-slider">
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
        <div class=content>
            <h2>We love creating
                <br>
                <span class="background">beauty</span>
            </h2>
            <p>We believe that beauty is a desire for everyone, we will realize in your residence</p>
        </div>
        <img src="{{ asset('img/right.png') }}" alt="Logo">
    </section>

    <section class="part-of-work">
        <h2>Part of our work</h2>
        <p>Watch our latest work and get inspired. We create designs with soul</p>
        <div class="owl-carousel owl-theme">
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
                    <div class="advantage-img">
                        <img src="{{ asset('img/advantage.png') }}" alt="advantage">
                    </div>
                </div>
                <div class="col-lg-4 align-self-center">
                    <h2>Our Advantages</h2>
                    <span>In front of other companies</span>
                    <div class="advantage-carousel owl-carousel owl-theme">
                        <div class="advantage-slide">
                            <h3>01. Quality</h3>
                            <p>
                                we use materials like sustainably forested wood, Strengthened
                                steel, hardware, and top-grain.
                            </p>
                        </div>

                        <div class="advantage-slide">
                            <h3>02. Right on time</h3>
                            <p>
                                The work is carried out exactly in the time specified in the
                                contract. Otherwise, we will pay the forfeit
                            </p>
                        </div>

                        <div class="advantage-slide">
                            <h3>03. Installment</h3>
                            <p>
                                We provide interest-free installments for 6,12 and 24 months
                            </p>
                        </div>

                    </div>
                    <div class="advantage">
                        <h3>01. Quality</h3>
                        <p>
                            we use materials like sustainably forested wood, Strengthened
                            steel, hardware, and top-grain.
                        </p>
                    </div>
                    <div class="advantage">
                        <h3>02. Right on time</h3>
                        <p>
                            The work is carried out exactly in the time specified in the
                            contract. Otherwise, we will pay the forfeit
                        </p>
                    </div>
                    <div class="advantage">
                        <h3>03. Installment</h3>
                        <p>
                            We provide interest-free installments for 6,12 and 24 months
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <h2>Read what our customers loved about us </h2>
            <div class="testimonials-carousel owl-carousel owl-theme">
                <div class="slide">
                    <div class="testimonial card-1">
                        <div class="info">
                        <span class="card-time"> 4min ago</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>Client name</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget augue volutpat, tellus
                                ullamcorper eu non massa vitae aenean. Congue pulvinar elit euismod sapien ultrices tortor
                                cursus. Maecenas vulputate risus phasellus suspendisse vitae in nulla.</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>

                    <div class="testimonial card-2">
                        <div class="info">
                        <span class="card-time"> 4min ago</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>Client name</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget augue volutpat, tellus
                                ullamcorper eu non massa vitae aenean. Congue pulvinar elit euismod sapien ultrices tortor
                                cursus. Maecenas vulputate risus phasellus suspendisse vitae in nulla.</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>

                    <div class="testimonial card-3">
                        <div class="info">
                        <span class="card-time"> 4min ago</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>Client name</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget augue volutpat, tellus
                                ullamcorper eu non massa vitae aenean. Congue pulvinar elit euismod sapien ultrices tortor
                                cursus. Maecenas vulputate risus phasellus suspendisse vitae in nulla.</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="testimonial card-1">
                        <div class="info">
                        <span class="card-time"> 4min ago</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>Client name</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget augue volutpat, tellus
                                ullamcorper eu non massa vitae aenean. Congue pulvinar elit euismod sapien ultrices tortor
                                cursus. Maecenas vulputate risus phasellus suspendisse vitae in nulla.</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>

                    <div class="testimonial card-2">
                        <div class="info">
                        <span class="card-time"> 4min ago</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>Client name</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget augue volutpat, tellus
                                ullamcorper eu non massa vitae aenean. Congue pulvinar elit euismod sapien ultrices tortor
                                cursus. Maecenas vulputate risus phasellus suspendisse vitae in nulla.</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>

                    <div class="testimonial card-3">
                        <div class="info">
                        <span class="card-time"> 4min ago</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>Client name</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget augue volutpat, tellus
                                ullamcorper eu non massa vitae aenean. Congue pulvinar elit euismod sapien ultrices tortor
                                cursus. Maecenas vulputate risus phasellus suspendisse vitae in nulla.</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="testimonial card-1">
                        <div class="info">
                        <span class="card-time"> 4min ago</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>Client name</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget augue volutpat, tellus
                                ullamcorper eu non massa vitae aenean. Congue pulvinar elit euismod sapien ultrices tortor
                                cursus. Maecenas vulputate risus phasellus suspendisse vitae in nulla.</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>

                    <div class="testimonial card-2">
                        <div class="info">
                        <span class="card-time"> 4min ago</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>Client name</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget augue volutpat, tellus
                                ullamcorper eu non massa vitae aenean. Congue pulvinar elit euismod sapien ultrices tortor
                                cursus. Maecenas vulputate risus phasellus suspendisse vitae in nulla.</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>

                    <div class="testimonial card-3">
                        <div class="info">
                        <span class="card-time"> 4min ago</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>Client name</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget augue volutpat, tellus
                                ullamcorper eu non massa vitae aenean. Congue pulvinar elit euismod sapien ultrices tortor
                                cursus. Maecenas vulputate risus phasellus suspendisse vitae in nulla.</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="testimonial card-1">
                        <div class="info">
                        <span class="card-time"> 4min ago</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>Client name</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget augue volutpat, tellus
                                ullamcorper eu non massa vitae aenean. Congue pulvinar elit euismod sapien ultrices tortor
                                cursus. Maecenas vulputate risus phasellus suspendisse vitae in nulla.</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>

                    <div class="testimonial card-2">
                        <div class="info">
                        <span class="card-time"> 4min ago</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>Client name</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget augue volutpat, tellus
                                ullamcorper eu non massa vitae aenean. Congue pulvinar elit euismod sapien ultrices tortor
                                cursus. Maecenas vulputate risus phasellus suspendisse vitae in nulla.</p>
                            <img src="{{ asset('img/quotes-mark.png') }}" class="right-marks" alt="quotemark">
                        </div>
                    </div>

                    <div class="testimonial card-3">
                        <div class="info">
                        <span class="card-time"> 4min ago</span>
                            <div class="image">
                                <img src="{{ asset('img/testimonial-image.png') }}" alt="profile-image">
                            </div>
                            <div class="name-rate">
                                <h3>Client name</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ asset('img/quotes-mark.png') }}" class="left-marks" alt="quotemark">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget augue volutpat, tellus
                                ullamcorper eu non massa vitae aenean. Congue pulvinar elit euismod sapien ultrices tortor
                                cursus. Maecenas vulputate risus phasellus suspendisse vitae in nulla.</p>
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
                <div class="col-4 col-md-7 image-content-col">
                    <div class="image-content">
                        <img src="{{ asset('img/features.png') }}" alt="features">

                    </div>
                </div>
                <div class="col-8 col-md-4">
                    <div class="info text-content">
                        <h2>Every room deserve to be amazing</h2>
                        <ul>
                            <li><span>&#10230;</span> Home Furniture</li>
                            <li><span>&#10230;</span> Corporate Equipment</li>
                            <li><span>&#10230;</span> Hall Furniture</li>
                            <li><span>&#10230;</span> Resturant Equipment</li>
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
                <div class="col-md-6">
                    <img src="{{ asset('img/contact-image.png') }}" id="contact_image" alt="contact">
                    <img src="{{ asset('img/contact-image-mobile.png') }}" id="contact_mobile_image" alt="contact">
                </div>
                <div class="col-md-6">
                    <form class="contact-form">
                        <h3>Apply the form</h3>
                        <div class="input">
                            <label for="fullName" class="form-label"> Full name </label>
                            <input type="text" class="form-control" id="fullName" />
                        </div>
                        <div class="input">
                            <label for="email" class="form-label"> Email </label>
                            <input type="email" class="form-control" id="email" />
                        </div>
                        <div class="input">
                            <label for="phoneNumber" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phoneNumber" />
                        </div>
                        <div class="input">
                            <label for="selectService" class="form-label">Message</label>
                            <div class="">
                                <textarea class="form-control" id="Message" rows="6"></textarea>
                            </div>
                        </div>
                        <input type="submit" value="Send">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Us -->

@stop
