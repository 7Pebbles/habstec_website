@extends('layout')
@section('content')
<section class="page_title ds s-parallax s-pb-xl-80  s-pb-lg-100  s-pb-md-90 s-pt-md-190 s-pt-180 s-pb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Blog</h1>
                <div class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Blog
                        </li>
                    </ol>
                </div>

            </div>


        </div>
    </div>
</section>

<section class="ls ms s-pt-xl-160 s-pb-xl-280 s-pt-lg-130 s-pb-lg-250 s-py-md-90 s-py-60">
    <div class="container">
        <div class="row c-gutter-60">

            <main class="col-lg-7 col-xl-8">


                <article class="vertical-item ls text-center rounded post type-post status-publish format-standard has-post-thumbnail">
                    <div class="item-media post-thumbnail">
                        <a href="blog-single-right.html">
                            <img src="{{url('public/template/images/blog/01.jpg')}}" alt="img">
                        </a>
                    </div><!-- .post-thumbnail -->
                    <div class="item-content">
                        <header class="entry-header">
                            <div class="entry-meta">
                                <div class="byline">
                                    <span class="date">
                                        <a href="blog-right.html" rel="bookmark">
                                            <time class="published entry-date" datetime="2019-04-09T12:23:09+00:00">20.03.2019</time>
                                        </a>
                                    </span>
                                    <span class="author vcard">
                                        <a class="url fn n" href="blog-right.html" rel="author"><span>by</span> Admin</a>
                                    </span>
                                </div>
                            </div>
                            <h3 class="entry-title">
                                <a href="blog-single-right.html" rel="bookmark">
                                    Sample Post With Image
                                </a>
                            </h3>

                            <!-- .entry-meta -->
                        </header>
                        <!-- .entry-header -->

                        <div class="entry-content">
                            <p>
                                Tempor incididunt labore dolmagna aliqua eniminim veniam quis. Nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat duis aute.Irure dolor in reprehenderit in voluptate velit. Esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                            </p>
                        </div><!-- .entry-content -->
                        <a class="btn btn-gradient big-btn" href="blog-single-full.html">read more</a>

                    </div><!-- .item-content -->
                </article><!-- #post-## -->

                <nav class="navigation pagination " role="navigation">
                    {{-- <h2 class="screen-reader-text">Posts navigation</h2>
                    <div class="nav-links">
                        <a class="prev page-numbers" href="blog-right.html">
                            <i class="fa fa-chevron-left"></i>
                            <span class="screen-reader-text">Previous page</span>
                        </a>
                        <a class="page-numbers" href="blog-right.html">
                            <span class="meta-nav screen-reader-text">Page </span>
                            1
                        </a>
                        <span class="page-numbers current">
                            <span class="meta-nav screen-reader-text">Page </span>
                            2
                        </span>
                        <a class="page-numbers" href="blog-right.html">
                            <span class="meta-nav screen-reader-text">Page </span>
                            3
                        </a>
                        <a class="next page-numbers" href="blog-right.html">
                            <span class="screen-reader-text">Next page</span>
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div> --}}
                </nav>
            </main>

            <aside class="col-lg-5 col-xl-4">

                <div class="widget widget_search">
                    <h3 class="widget-title">Search</h3>
                    <form role="search" method="get" class="search-form" action="{{url('blog')}}">
                        <label for="search-form-widget3">
                            <span class="screen-reader-text">Search for:</span>
                        </label>
                        <input type="search" id="search-form-widget3" class="search-field" placeholder="Search" value="" name="search">
                        <button type="submit" class="search-submit">
                            <span class="screen-reader-text">Search</span>
                        </button>
                    </form>
                </div>


              {{--   <div class="widget widget_categories">

                    <h3 class="widget-title">Categories</h3>

                    <ul>
                        <li class="cat-item">
                            <a href="blog-right.html">Corporate</a>
                            (12)
                            <ul class="children">
                                <li class="cat-item">
                                    <a href="blog-right.html">Business
                                    </a>
                                    (1)
                                </li>
                            </ul>
                        </li>
                        <li class="cat-item">
                            <a href="blog-right.html">Entertainment</a>
                            (21)
                        </li>
                        <li class="cat-item">
                            <a href="blog-right.html">Innovations</a>
                            (18)
                        </li>
                        <li class="cat-item">
                            <a href="blog-right.html">News</a>
                            (43)
                        </li>
                        <li class="cat-item">
                            <a href="blog-right.html">Knowledge
                            </a>
                            (8)
                        </li>
                    </ul>
                </div> --}}


                <div class="widget widget_recent_posts">

                    <h3 class="widget-title">Top Blog</h3>
                    <ul class="list-unstyled">
                        <li class="media">
                            <a class="media-image" href="blog-single-right.html">
                                <img src="{{url('public/template/images/gallery/square/01.jpg')}}" alt="">
                            </a>
                            <div class="media-body">
                                <h4>
                                    <a href="blog-single-right.html">Tools of Trading: Modern Marketing</a>
                                </h4>
                                <p class="item-meta">
                                    <i class="far fa-calendar-alt"></i>
                                    02 Jan 19
                                </p>

                            </div>
                        </li>

                        <li class="media">
                            <a class="media-image" href="blog-single-right.html">
                                <img src="{{url('public/template/images/gallery/square/02.jpg')}}" alt="">
                            </a>
                            <div class="media-body">
                                <h4>
                                    <a href="blog-single-right.html">Tools of Trading: Modern Marketing</a>
                                </h4>
                                <p class="item-meta">
                                    <i class="far fa-calendar-alt"></i>
                                    02 Jan 19
                                </p>
                            </div>
                        </li>

                        <li class="media">
                            <a class="media-image" href="blog-single-right.html">
                                <img src="{{url('public/template/images/gallery/square/03.jpg')}}" alt="">
                            </a>
                            <div class="media-body">
                                <h4>
                                    <a href="blog-single-right.html">Tools of Trading: Modern Marketing</a>
                                </h4>
                                <p class="item-meta">
                                    <i class="far fa-calendar-alt"></i>
                                    02 Jan 19
                                </p>

                            </div>
                        </li>

                    </ul>
                </div>


                {{-- <div class="widget widget_tag_cloud">

                    <h3 class="widget-title">Tags</h3>

                    <div class="tagcloud">

                        <a href="blog-right.html" class="tag-cloud-link">
                            oil
                        </a>

                        <a href="blog-right.html" class="tag-cloud-link">
                            gas
                        </a>

                        <a href="blog-right.html" class="tag-cloud-link">
                            industry
                        </a>

                        <a href="blog-right.html" class="tag-cloud-link">
                            plant
                        </a>

                        <a href="blog-right.html" class="tag-cloud-link">
                            lab
                        </a>

                    </div>
                </div> --}}


            </aside>


        </div>

    </div>
</section>
@endsection
