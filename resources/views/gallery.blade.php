@extends('layout')
@section('content')
<section class="page_title ds s-parallax s-pb-xl-80  s-pb-lg-100  s-pb-md-90 s-pt-md-190 s-pt-180 s-pb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Gallery</h1>
                <div class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Gallery
                        </li>
                    </ol>
                </div>

            </div>


        </div>
    </div>
</section>

<section class="ls ms portfolio text-center s-pt-xl-160 s-pt-lg-130 s-pt-md-90 s-pt-60 s-pb-xl-280 s-pb-lg-250 s-pb-md-90 s-pb-60">
    <div class="container">
        <div class="row justify-content-center">
            {{-- <div class="col-md-10 col-xl-8">
                <div class="filters gallery-filters">
                    <a href="#" data-filter="*" class="active selected">show All</a>
                    <a href="#" data-filter=".corporate">Gas</a>
                    <a href="#" data-filter=".business">oil</a>
                    <a href="#" data-filter=".entertainment">Industry</a>
                    <a href="#" data-filter=".innovations">eco</a>
                    <a href="#" data-filter=".news">Factory</a>

                </div>
            </div> --}}
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="row isotope-wrapper masonry-layout c-mb-30" data-filters=".gallery-filters">

                    @if (count($data) == 0)
                    <div class="row justify-content-center col-12">

                        <div class="col-md-10 col-xl-8">
                                 <h3>No Gallery Images</h3>
                        </div>
                    </div>
                    @else
                        @foreach ($data as $row)
                        <div class="col-xl-4 col-sm-6">

                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="{{url('public/gallery/'.$row->gallery_image)}}" alt="img">

                                </div>
                                <div class="item-content">
                                    <div class="links-wrap">
                                        <a class="link-zoom photoswipe-link" title="" href="{{url('public/gallery/'.$row->gallery_image)}}"></a>

                                    </div>
                                    {{-- <h6>
                                        <a href="gallery-single.html">Lorem ipsum dolor sit</a>
                                    </h6> --}}

                                </div>
                            </div>

                        </div>
                        @endforeach
                    @endif




                </div>
                <!-- .isotope-wrapper-->
            </div>
        </div>
        <div class="mt--30"></div>
        {{-- <div class="row">
            <div class="col-lg-12">
                <div class="divider-60"></div>
                <a class="btn btn-outline-maincolor2 big-btn" href="#">get a quote</a>
            </div>
        </div> --}}
    </div>
</section>
@endsection
