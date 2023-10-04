@extends('layout')
@section('content')
<section class="page_title ds s-parallax s-pb-xl-80  s-pb-lg-100  s-pb-md-90 s-pt-md-190 s-pt-180 s-pb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>About Us</h1>
                <div class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            About Us
                        </li>
                    </ol>
                </div>

            </div>


        </div>
    </div>
</section>

<section class="ls s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3 text-center">
                <h2 class="special-heading text-center">
                    <span class="text-capitalize">
                        welcome!
                    </span>
                </h2>
                <div class="divider-30"></div>
                <a class="btn btn-gradient big-btn" href="#">get a quote</a>
            </div>
            <div class="col-12 col-lg-6 text-center">
                <div class="divider-35 hidden-above-lg"></div>
                <div class="divider--5"></div>
                <p class="excerpt">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                </p>
                <p>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum doloreu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                    sunt in culpa qui officia deserunt mollit animest laborum sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
                </p>
            </div>
            <div class="col-12 col-lg-3 text-sm-left text-center">
                <div class="divider-35 hidden-above-lg"></div>
                <div class="signature">
                    <div class="signature-image">
                        <img src="{{url('public/template/images/team/testimonial2.jpg')}}" alt="">
                    </div>
                    <div class="signature-content">
                        <span>Diana T. Davis</span>
                        <img src="{{url('public/template/images/signature.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ds container-px-xl-0 ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-12 px-xl-50 ds column-overlay d-flex flex-column align-items-center justify-content-center text-center column-video">
                <div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90 divider-60"></div>
                <h2 class="special-heading text-center">
                    <span class="text-capitalize">
                        How It Works
                    </span>
                </h2>
                <div class="divider-30"></div>
                <div class="video-shortcode">
                    <a href="{{url('public/template/images/services/service3.jpg')}}" class="photoswipe-link" data-width="800" data-height="800" data-iframe="https://www.youtube.com/embed/GhthHC0s38A"></a>
                </div>

                <div class="divider-30"></div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <div class="fw-divider-space divider-xl-135 divider-lg-95 divider-md-65 divider-35"></div>
            </div>
            <div class="col-lg-9 p-0 col-12">
                <div class="step-gorizontal">
                    <div class="step">
                        <div class="step-number">
                            <h3>
                                01.
                            </h3>
                        </div>
                        <h6>
                            Project Planning
                        </h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    <div class="step">
                        <div class="step-number">
                            <h3>
                                02.
                            </h3>
                        </div>
                        <h6>
                            Research & Analysis
                        </h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    <div class="step">
                        <div class="step-number">
                            <h3>
                                03.
                            </h3>
                        </div>
                        <h6>
                            Business Launch
                        </h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ls s-py-xl-160 text-sm-left text-center s-py-lg-130 s-py-md-90 s-py-60 c-gutter-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <h2 class="special-heading text-sm-left text-center">
                    <span class="text-capitalize">
                        Our Achievements
                    </span>
                </h2>
                <div class="divider-line bg-maincolor text-sm-left text-center"></div>
                <div class="fw-divider-space divider-30"></div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                </p>
                <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
                </p>
                <div class="divider-50 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
                <a class="btn btn-gradient big-btn" href="#">know more</a>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
                <div class="owl-carousel sync1" data-center="false" data-nav="false" data-margin="15" data-loop="true" data-responsive-lg="3" data-responsive-md="3" data-responsive-sm="2" data-responsive-xs="2">
                    <img class="rounded" src="{{url('public/template/images/gallery/full/01.jpg')}}" alt="">
                    <img class="rounded" src="{{url('public/template/images/gallery/full/02.jpg')}}" alt="">
                    <img class="rounded" src="{{url('public/template/images/gallery/full/03.jpg')}}" alt="">
                    <img class="rounded" src="{{url('public/template/images/gallery/full/04.jpg')}}" alt="">

                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="divider-30 hidden-above-lg"></div>
                <div class="owl-carousel sync2" data-center="false" data-draggable="false" data-nav="false" data-margin="10" data-loop="true" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-responsive-xs="1">
                    <img class="rounded" src="{{url('public/template/images/gallery/square/01.jpg')}}" alt="">
                    <img class="rounded" src="{{url('public/template/images/gallery/square/02.jpg')}}" alt="">
                    <img class="rounded" src="{{url('public/template/images/gallery/square/03.jpg')}}" alt="">
                    <img class="rounded" src="{{url('public/template/images/gallery/square/04.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="team" class="ls ms s-pt-xl-160 s-pt-lg-130 s-pt-md-90 s-pt-60 s-pb-xl-280 s-pb-lg-250 s-pb-md-90 s-pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <h2 class="special-heading text-center">
                    <span class="text-capitalize">
                        Our Team
                    </span>
                </h2>
                <div class="divider-line bg-maincolor text-center"></div>
                <div class="fw-divider-space divider-25"></div>
                <p class="special-heading text-center">
                    <span>
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam.
                    </span>
                </p>
                <div class="divider-35 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
                <div class="owl-carousel team-carousel" data-center="false" data-nav="false" data-margin="30" data-loop="true" data-responsive-lg="3" data-responsive-md="3" data-responsive-sm="2" data-responsive-xs="1">

                    <div class="vertical-item text-center">
                        <div class="item-media">
                            <img src="{{url('public/template/images/team/01.png')}}" alt="team">
                            <div class="media-links">
                                <span class="social-icons">
                                    <a href="#" class="fab fa-facebook-f" title="facebook"></a>
                                    <a href="#" class="fab fa-telegram-plane" title="telegram"></a>
                                    <a href="#" class="fab fa-instagram" title="instagram"></a>
                                </span>
                            </div>

                        </div>
                        <div class="item-content">

                            <h6>
                                <a href="team-single.html">Roger J. Watkins</a>
                            </h6>
                            <p class="small-text">
                                President
                            </p>
                        </div>
                    </div>


                    <div class="vertical-item text-center">
                        <div class="item-media">
                            <img src="{{url('public/template/images/team/02.png')}}" alt="team">
                            <div class="media-links">
                                <span class="social-icons">
                                    <a href="#" class="fab fa-facebook-f" title="facebook"></a>
                                    <a href="#" class="fab fa-telegram-plane" title="telegram"></a>
                                    <a href="#" class="fab fa-instagram" title="instagram"></a>
                                </span>
                            </div>
                        </div>
                        <div class="item-content">

                            <h6>
                                <a href="team-single.html">Anita J. Harker</a>
                            </h6>
                            <p class="small-text">
                                CEO
                            </p>
                        </div>
                    </div>


                    <div class="vertical-item text-center">
                        <div class="item-media">
                            <img src="{{url('public/template/images/team/03.png')}}" alt="team">
                            <div class="media-links">
                                <span class="social-icons">
                                    <a href="#" class="fab fa-facebook-f" title="facebook"></a>
                                    <a href="#" class="fab fa-telegram-plane" title="telegram"></a>
                                    <a href="#" class="fab fa-instagram" title="instagram"></a>
                                </span>
                            </div>

                        </div>
                        <div class="item-content">

                            <h6>
                                <a href="team-single.html">Harold K. Cave</a>
                            </h6>
                            <p class="small-text">
                                Coordinator
                            </p>
                        </div>
                    </div>


                    <div class="vertical-item text-center">
                        <div class="item-media">
                            <img src="{{url('public/template/images/team/04.png')}}" alt="team">
                            <div class="media-links">
                                <span class="social-icons">
                                    <a href="#" class="fab fa-facebook-f" title="facebook"></a>
                                    <a href="#" class="fab fa-telegram-plane" title="telegram"></a>
                                    <a href="#" class="fab fa-instagram" title="instagram"></a>
                                </span>
                            </div>
                        </div>
                        <div class="item-content">

                            <h6>
                                <a href="team-single.html">Alex M. Richardson</a>
                            </h6>
                            <p class="small-text">
                                CEO
                            </p>
                        </div>
                    </div>


                    <div class="vertical-item text-center">
                        <div class="item-media">
                            <img src="{{url('public/template/images/team/05.png')}}" alt="team">
                            <div class="media-links">
                                <span class="social-icons">
                                    <a href="#" class="fab fa-facebook-f" title="facebook"></a>
                                    <a href="#" class="fab fa-telegram-plane" title="telegram"></a>
                                    <a href="#" class="fab fa-instagram" title="instagram"></a>
                                </span>
                            </div>
                        </div>
                        <div class="item-content">

                            <h6>
                                <a href="team-single.html">Tajana N. Emmett</a>
                            </h6>
                            <p class="small-text">
                                Accountant
                            </p>
                        </div>
                    </div>


                    <div class="vertical-item text-center">
                        <div class="item-media">
                            <img src="{{url('public/template/images/team/06.png')}}" alt="team">
                            <div class="media-links">
                                <span class="social-icons">
                                    <a href="#" class="fab fa-facebook-f" title="facebook"></a>
                                    <a href="#" class="fab fa-telegram-plane" title="telegram"></a>
                                    <a href="#" class="fab fa-instagram" title="instagram"></a>
                                </span>
                            </div>
                        </div>
                        <div class="item-content">

                            <h6>
                                <a href="team-single.html">Justine E. Inger</a>
                            </h6>
                            <p class="small-text">
                                Manager
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="mt--20"></div>
    </div>
</section>
@endsection
