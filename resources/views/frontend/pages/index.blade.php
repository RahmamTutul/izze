@extends('frontend.layouts.app')

@section('css')
    
@endsection

@section('body')
     <!-- about area start  -->
     <div id="about" class="about__area theme-bg pt-120 pb-85">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="about__heading mb-30">
                        <h3>10+ Years Experience
                            In this game, Means
                            Visual design.</h3>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="about__right mb-30">
                        <div class="work-done mr-60 mb-30">
                            <h4>100<span>%</span></h4>
                            <p>Work Done</p>
                        </div>
                        <div class="about__p">
                            <p>Apparently we had reached a great height in the atmosphere, for the sky was a dead
                                black, and the stars had ceased to twinkle. By the same illusion which lifts the
                                horizon of the sea to the level of the spectator on a hillside, the sable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->
    <!-- service area start  -->
    <div class="service__area position-relative grey-bg pt-120 pb-60">
        <div class="service__back-text">
            <span>Projects</span>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="section__title mb-70 text-center">
                        <h3>Our Services<span>.</span></h3>
                        <p>Apparently we had reached a great height in the atmosphere, for the sky was a dead black,
                            and the stars had ceased to twinkle.</p>
                        <div class="back-text">
                            <h2>services</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="service__item">
                        <div class="service__icon">
                            <img src="{{asset('assets/frontend/img/service/service-icon1.png')}}" alt="">
                        </div>
                        <div class="service__content">
                            <h4>Visual identity</h4>
                            <p>For the sky was a dead
                                black, apparent we had reached a great height in the atmosphere. </p>
                        </div>
                        <div class="service__contact text-center"
                            data-background="{{asset('assets/frontend/img/service/service-bg.jpg')}}">
                            <div>
                                <p>Apparently we had reached a great height in the
                                    atmosphere, for the sky was a dead black, and the stars had ceased to twinkle.
                                    By the same illusion which lifts the horizon of the sea to the level of the
                                    spectator on a hillside, the sable.</p>
                                <a class="smooth-scroll" href="#contact">contact now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="service__item">
                        <div class="service__icon">
                            <img src="{{asset('assets/frontend/img/service/service-icon2.png')}}" alt="">
                        </div>
                        <div class="service__content">
                            <h4>Carecter Design</h4>
                            <p>Apparent we had reached a great height in the atmosphere, for the sky was a dead
                                black. </p>
                        </div>
                        <div class="service__contact text-center"
                            data-background="{{asset('assets/frontend/img/service/service-bg.jpg')}}">
                            <div>
                                <p>Apparently we had reached a great height in the
                                    atmosphere, for the sky was a dead black, and the stars had ceased to twinkle.
                                    By the same illusion which lifts the horizon of the sea to the level of the
                                    spectator on a hillside, the sable.</p>
                                <a class="smooth-scroll" href="#contact">contact now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="service__item">
                        <div class="service__icon">
                            <img src="{{asset('assets/frontend/img/service/service-icon3.png')}}" alt="">
                        </div>
                        <div class="service__content">
                            <h4>Graphic Design</h4>
                            <p>Apparent we had reached a great height in the atmosphere, for the sky was a dead
                                black. </p>
                        </div>
                        <div class="service__contact text-center"
                            data-background="{{asset('assets/frontend/img/service/service-bg.jpg')}}">
                            <div>
                                <p>Apparently we had reached a great height in the
                                    atmosphere, for the sky was a dead black, and the stars had ceased to twinkle.
                                    By the same illusion which lifts the horizon of the sea to the level of the
                                    spectator on a hillside, the sable.</p>
                                <a class="smooth-scroll" href="#contact">contact now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="service__item">
                        <div class="service__icon">
                            <img src="{{asset('assets/frontend/img/service/service-icon4.png')}}" alt="">
                        </div>
                        <div class="service__content">
                            <h4>Website design</h4>
                            <p>For the sky was a dead
                                black, apparent we had reached a great height in the atmosphere. </p>
                        </div>
                        <div class="service__contact text-center"
                            data-background="{{asset('assets/frontend/img/service/service-bg.jpg')}}">
                            <div>
                                <p>Apparently we had reached a great height in the
                                    atmosphere, for the sky was a dead black, and the stars had ceased to twinkle.
                                    By the same illusion which lifts the horizon of the sea to the level of the
                                    spectator on a hillside, the sable.</p>
                                <a class="smooth-scroll" href="#contact">contact now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->
    <!-- portfolio area start  -->
    <div id="portfolio" class="portfolio__area">
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="portfolio__item">
                        <img src="{{asset('assets/frontend/img/portfolio/portfolio1.jpg')}} " alt="">
                        <a class="portfolio__overlay popup-image" href="{{asset('assets/frontend/img/portfolio/portfolio1.jpg')}}">
                            <div class="portfolio__overlay-icon">
                                <i class="fal fa-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="portfolio__item">
                        <img src="{{asset('assets/frontend/img/portfolio/portfolio2.jpg')}} " alt="">
                        <a class="portfolio__overlay popup-image" href="{{asset('assets/frontend/img/portfolio/portfolio2.jpg')}}">
                            <div class="portfolio__overlay-icon">
                                <i class="fal fa-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="portfolio__item">
                        <img src="{{asset('assets/frontend/img/portfolio/portfolio3.jpg')}}" alt="">
                        <a class="portfolio__overlay popup-image" href="{{asset('assets/frontend/img/portfolio/portfolio3.jpg')}}">
                            <div class="portfolio__overlay-icon">
                                <i class="fal fa-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="portfolio__item">
                        <img src="{{asset('assets/frontend/img/portfolio/portfolio4.jpg')}}" alt="">
                        <a class="portfolio__overlay popup-image" href="{{asset('assets/frontend/img/portfolio/portfolio4.jpg')}} ">
                            <div class="portfolio__overlay-icon">
                                <i class="fal fa-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="portfolio__item">
                        <img src="{{asset('assets/frontend/img/portfolio/portfolio5.jpg')}}"  alt="">
                        <a class="portfolio__overlay popup-image" href="{{asset('assets/frontend/img/portfolio/portfolio5.jpg')}} ">
                            <div class="portfolio__overlay-icon">
                                <i class="fal fa-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="portfolio__item">
                        <img src="{{asset('assets/frontend/img/portfolio/portfolio6.jpg')}} " alt="">
                        <a class="portfolio__overlay popup-image" href="{{asset('assets/frontend/img/portfolio/portfolio6.jpg')}}">
                            <div class="portfolio__overlay-icon">
                                <i class="fal fa-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- portfolio area end -->
    <!-- work process area start  -->
    <div class="process__area grey-bg pt-120 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="section__title mb-70 text-center">
                        <h3>My Work Process<span>.</span></h3>
                        <p>Apparently we had reached a great height in the atmosphere, for the sky was a dead black,
                            and the stars had ceased to twinkle.</p>
                        <div class="back-text">
                            <h2>process</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt--45">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="process__item mb-30">
                        <span>01</span>
                        <h4>inspiration Collect</h4>
                        <p>For the sky was a dead black,
                            and the stars had ceased to twinkle, apparently we had reached a great height in the
                            atmosphere.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="process__item mb-30">
                        <span>02</span>
                        <h4>project planning</h4>
                        <p>Apparently we had reached a great height in the atmosphere, for the sky was a dead black,
                            and the stars had ceased to twinkle.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="process__item mb-30">
                        <span>03</span>
                        <h4>instrument collect</h4>
                        <p>For the sky was a dead black,
                            and the stars had ceased to twinkle, apparently we had reached a great height in the
                            atmosphere.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="process__item mb-30">
                        <span>04</span>
                        <h4>implementation</h4>
                        <p>Apparently we had reached a great height in the atmosphere, for the sky was a dead black,
                            and the stars had ceased to twinkle.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- work process area end  -->
    <!-- award area start  -->
    <div class="award__area theme-bg position-relative pt-120 pb-75 fix">
        <div class="award__back-text">
            <span>qualification</span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="award__left mb-30 pr-100">
                        <h3>Get So many Awards
                            in 10 years.</h3>
                        <div class="award__btn">
                            <a href="team-details.html" class="m-btn mr-15">my Experienace</a>
                            <a href="team-details.html" class="m-btn  red-btn mr-15">qualification</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="award__right">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="award__item mb-40">
                                    <h4>2010 /gaming</h4>
                                    <p>Apparently we had reached a great height in the atmosphere, for the sky was a
                                        dead.</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="award__item mb-40">
                                    <h4>2013 /Visual design</h4>
                                    <p>For the sky was a
                                        dead, apparently we had reached a great height in the atmosphere.</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="award__item mb-40">
                                    <h4>2016 /app design</h4>
                                    <p>For the sky was a
                                        dead, apparently we had reached a great height in the atmosphere.</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="award__item mb-40">
                                    <h4>2020 /illustration</h4>
                                    <p>Apparently we had reached a great height in the atmosphere, for the sky was a
                                        dead.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- award area end -->
    <!-- video area start  -->
    <div class="video__area text-center" data-background="{{asset('assets/frontend/img/bg/video-bg.jpg')}}">
        <a class="video__link position-relative popup-video" href="https://www.youtube.compg/watch?v=FpQIWrHeFXo">
            <img src="{{asset('assets/frontend/img/bg/video-btn-bg.png')}}"  alt="">
            <span>play</span>
        </a>
    </div>
    <!-- video area end -->
    <!-- testimonial area start  -->
    <div class="testimonial__area grey-bg fix pt-120 pb-80">
        <div class="container">
            <div class="testimonial__active">
                <div class="testimonial__item">
                    <div class="testimonial__img position-relative mb-30">
                        <img src="{{asset('assets/frontend/img/testimonial/testimonial-border.png')}}"  alt="">
                        <a href="team-details.html"><img src="{{asset('assets/frontend/img/testimonial/testimonial-1.png')}}" alt=""
                                class="center-img"></a>
                    </div>
                    <div class="testimonial__content mb-30">
                        <h3>As an award winning publicist I
                            have tried many release.</h3>
                        <p>This, as much as the quality of their products, is the reason I have decided to do
                            business
                            with them going forward.</p>
                        <h4><a href="team-details.html">Rosalina D. William</a></h4>
                        <span>- Founder or UXninja</span>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="testimonial__img position-relative mb-30">
                        <img src="{{asset('assets/frontend/img/testimonial/testimonial-border.png')}}" alt="">
                        <a href="team-details.html"><img src="{{asset('assets/frontend/img/testimonial/testimonial-2.png')}}" alt=""
                                class="center-img"></a>
                    </div>
                    <div class="testimonial__content mb-30">
                        <h3>I
                            have tried many release, as an award winning publicist.</h3>
                        <p>This, as much as the quality of their products, is reason I have decided to do business
                            with them going forward.</p>
                        <h4><a href="team-details.html">Tromalinkton Blender</a></h4>
                        <span>- CEO</span>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="testimonial__img position-relative mb-30">
                        <img src="{{asset('assets/frontend/img/testimonial/testimonial-border.png')}}" alt="">
                        <a href="team-details.html"><img src="{{asset('assets/frontend/img/testimonial/testimonial-3.png')}}" alt=""
                                class="center-img"></a>
                    </div>
                    <div class="testimonial__content mb-30">
                        <h3>As an award winning publicist I
                            have tried many release.</h3>
                        <p>This, as much as the quality of products, is the reason I have decided to do business
                            with them going forward.</p>
                        <h4><a href="team-details.html">Rosalina D. William</a></h4>
                        <span>- Founder or UXninja</span>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="testimonial__img position-relative mb-30">
                        <img src="{{asset('assets/frontend/img/testimonial/testimonial-border.png')}}" alt="">
                        <a href="team-details.html"><img src="{{asset('assets/frontend/img/testimonial/testimonial-4.png')}}" alt=""
                                class="center-img"></a>
                    </div>
                    <div class="testimonial__content mb-30">
                        <h3>I
                            have tried many release, as an award winning publicist.</h3>
                        <p>This, as much as of their products, is the reason I have decided to do business
                            with them going forward.</p>
                        <h4><a href="team-details.html">Tromalinkton Blender</a></h4>
                        <span>- CEO</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial area end -->
    <!-- contact area start  -->
    <div id="contact" class="contact__area grey-bg pb-120">
        <div class="contact__inner white-bg pt-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-10">
                        <div class="section__title mb-70 text-center">
                            <h3>Get In Touch<span>.</span></h3>
                            <p>Apparently we had reached a great height in the atmosphere, for the sky was a dead
                                black, and the stars had ceased to twinkle.</p>
                            <div class="back-text">
                                <h2 class="color-grey">contact</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact__form pb-100">
                    <form action="#">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="input-field">
                                    <input type="text" placeholder="Enter your name">
                                    <i class="fal fa-user"></i>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="input-field">
                                    <input type="text" placeholder="info@webmail....">
                                    <i class="fal fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="input-field">
                                    <input type="number" placeholder="Enter your phone number">
                                    <i class="fal fa-phone"></i>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="input-field">
                                    <select required>
                                        <option value="" disabled selected>Select your subject</option>
                                        <option value="0">graphic design</option>
                                        <option value="1">web design</option>
                                        <option value="1">digital marketing</option>
                                        <option value="1">SEO</option>
                                    </select>
                                    <i class="fal fa-arrow-down"></i>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="input-field">
                                    <textarea name="message" placeholder="Enter your message" id="message" cols="30"
                                        rows="10"></textarea>
                                    <i class="fal fa-edit"></i>
                                </div>
                            </div>
                            <div class="contact__btn">
                                <a href="#" class="m-btn  red-btn theme-color">submit now</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->
@endsection

@section('js')
    
@endsection