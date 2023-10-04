@extends('layout')
@section('content')
<section class="page_title ds s-parallax s-pb-xl-80  s-pb-lg-100  s-pb-md-90 s-pt-md-190 s-pt-180 s-pb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Contacts</h1>
                <div class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Contacts
                        </li>
                    </ol>
                </div>

            </div>


        </div>
    </div>
</section>

<section class="ls  container-px-xl-0">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-6 col-xl-7 ls ">
                <div class="special-column">
                    <div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90 divider-60"></div>
                    <h2 class="special-heading text-left">
                        <span class="text-capitalize">
                            Drop Us A Line
                        </span>
                    </h2>
                    <div class="divider-line bg-maincolor"></div>
                    <div class="fw-divider-space divider-25"></div>
                    <p class="special-heading text-left">
                        <span>
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non.
                        </span>
                    </p>
                    <div class="divider-50 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <form class="contact-form" method="post" action="{{url('hello')}}">
                        <div class="row c-mb-10 c-gutter-10">
                            <div class="col-lg-6">
                                <div class="form-group has-placeholder">
                                    <label for="name335x5553">Full Name <span class="required">*</span></label>
                                    <i class="fas fa-user"></i>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name335x5553" class="form-control" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group has-placeholder">
                                    <label for="email333">Email address<span class="required">*</span></label>
                                    <i class="fas fa-envelope"></i>
                                    <input type="email" aria-required="true" size="30" value="" name="email" id="email333" class="form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row c-mb-10 c-gutter-10">
                            <div class="col-lg-6">
                                <div class="form-group has-placeholder">
                                    <label for="name3355553">Phone Number <span class="required">*</span></label>
                                    <i class="fas fa-phone"></i>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name3355553" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group has-placeholder">
                                    <label for="name3355d553">Subject <span class="required">*</span></label>
                                    <i class="fas fa-paperclip"></i>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name3355d553" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="row c-mb-10 c-gutter-10">
                            <div class="col-sm-12">
                                <div class="form-group has-placeholder">
                                    <label for="message335553">Message</label>
                                    <i class="fas fa-edit"></i>
                                    <textarea aria-required="true" rows="8" cols="45" name="message" id="message335553" class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row c-mb-10 c-gutter-10">
                            <div class="col-sm-12 mb-0 mt-lg-50 mt-30">
                                <div class="form-group">
                                    <input class="btn btn-gradient big-btn" type="submit" value="Send message">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90 divider-60"></div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-5 text-sm-left text-center ls ms animate" data-animation="scaleAppear">
                <div class="special-column2">
                    <div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90 divider-60"></div>
                    <div class="media text-center text-sm-left">
                        <div class="icon-styled fs-60 color-main">
                            <i class="ico ico-location"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="">
                                Our Address
                            </h6>
                            <p class="">457 Elk City Road, Gerome, IN<br> 576 Terry Lane, Orlando, FL</p>
                        </div>
                    </div>
                    <div class="divider-50 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <div class="divider-line bg-maincolor text-center"></div>
                    <div class="divider-60 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <div class="media text-center text-sm-left">
                        <div class="icon-styled fs-60 color-main">
                            <i class="ico ico-call"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="">
                                Our Number
                            </h6>
                            <p class="">+1 (803) 321-281-9307<br> +1 (803) 407-558-1101</p>
                        </div>
                    </div>
                    <div class="divider-50 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <div class="divider-line bg-maincolor text-center"></div>
                    <div class="divider-60 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <div class="media text-center text-sm-left">
                        <div class="icon-styled fs-60 color-main">
                            <i class="ico ico-email"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="">
                                Our Email
                            </h6>
                            <p class=""><a href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e68887809287a6839e878b968a83c885898b">[email&#160;protected]</a><br> <a href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2a444b4c5e4b6a594b464f5904494547">[email&#160;protected]</a></p>
                        </div>
                    </div>
                    <div class="divider-50 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <div class="divider-line bg-maincolor text-center"></div>
                    <div class="divider-60 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <span class="social-icons">
                        <a href="#" class="fab fa-facebook-f bg-icon light-bg rounded-icon"></a>
                        <a href="#" class="fab fa-twitter bg-icon light-bg rounded-icon"></a>
                        <a href="#" class="fab fa-linkedin-in bg-icon light-bg rounded-icon"></a>
                        <a href="#" class="fab fa-instagram bg-icon light-bg rounded-icon"></a>
                    </span>
                    <div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90 divider-60"></div>

                </div>
            </div>
            <!--.col-* -->
        </div>
    </div>
</section>
<section class="ls s-py-0 container-px-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class=" ms page_map" data-draggable="false" data-scrollwheel="false">
                    <div class="marker">
                        <div class="marker-address">sydney, australia, Liverpool street, 66</div>
                        <div class="marker-title">Reach Us</div>
                        <div class="marker-description">

                            <ul class="list-unstyled">
                                <li>
                                    <span class="icon-inline">
                                        <span class="icon-styled color-main">
                                            <i class="fa fa-map-marker"></i>
                                        </span>

                                        <span>
                                            Sydney, Australia, Liverpool street, 66
                                        </span>
                                    </span>
                                </li>

                                <li>
                                    <span class="icon-inline">
                                        <span class="icon-styled color-main">
                                            <i class="fa fa-phone"></i>
                                        </span>

                                        <span>
                                            1 (800) 123-45-67
                                        </span>
                                    </span>
                                </li>
                                <li>
                                    <span class="icon-inline">
                                        <span class="icon-styled color-main">
                                            <i class="fa fa-envelope"></i>
                                        </span>

                                        <span>
                                            <a href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f19c90989db19489909c819d94df929e9c">[email&#160;protected]</a>
                                        </span>
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <img class="marker-icon" src="images/map_marker_icon.png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
