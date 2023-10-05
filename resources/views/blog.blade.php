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

                @if (count($data)==0)
                <div class="row justify-content-center col-12">

                    <div class="col-md-10 col-xl-8">
                             <h3>No Blogs {{request('search') ? "matching ".request('search') : ""}}</h3>
                    </div>
                </div>
                @else

                    @foreach ($data as $row)
                    <article class="vertical-item ls text-center rounded post type-post status-publish format-standard has-post-thumbnail">
                        <div class="item-media post-thumbnail">
                            <a href="{{url('blog')}}">
                                <img src="{{url('public/blog/'.$row->blog_image)}}" alt="img">
                            </a>
                        </div><!-- .post-thumbnail -->
                        <div class="item-content">
                            <header class="entry-header">
                                <div class="entry-meta">
                                    <div class="byline">
                                        <span class="date">
                                            <a href="{{url('blog')}}" rel="bookmark">
                                                <time class="published entry-date">{{ (new \DateTime($row->created_at))->format("d.m.Y") }}</time>
                                            </a>
                                        </span>
                                        <span class="author vcard">
                                            <a class="url fn n" href="{{url('blog')}}" rel="author"><span>by</span> Admin</a>
                                        </span>
                                    </div>
                                </div>
                                <h3 class="entry-title">
                                    <a href="{{url('blog')}}" rel="bookmark">
                                       {{$row->blog_title}}
                                    </a>
                                </h3>

                            </header>

                            <div class="entry-content">
                                <p>
                                    {!! $row->blog_short_desc !!}
                                </p>
                            </div><!-- .entry-content -->
                            <a class="btn btn-gradient big-btn" href="{{url('blog')}}">read more</a>

                        </div><!-- .item-content -->
                    </article>
                    @endforeach
                @endif


                <nav class="navigation pagination" role="navigation">
                    <h2 class="screen-reader-text">Posts navigation</h2>
                    <div class="nav-links">
                        @if ($data->previousPageUrl())
                            <a class="prev page-numbers" href="{{ $data->previousPageUrl() }}">
                                <span class="screen-reader-text">Previous page</span>
                            </a>
                        @endif

                        @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
                            <a class="page-numbers{{ $page === $data->currentPage() ? ' current' : '' }}" href="{{ $url }}">
                                <span class="meta-nav screen-reader-text">Page </span>
                                {{ $page }}
                            </a>
                        @endforeach

                        @if ($data->nextPageUrl())
                            <a class="next page-numbers" href="{{ $data->nextPageUrl() }}">
                                <span class="screen-reader-text">Next page</span>
                                >
                            </a>

                        @endif
                    </div>
                </nav>

            </main>

            <aside class="col-lg-5 col-xl-4">

                <div class="widget widget_search">
                    <h3 class="widget-title">Search</h3>
                    <form method="get" action="{{url('blog')}}">
                        <label for="search-form-widget3">
                            <span class="screen-reader-text">Search for:</span>
                        </label>
                        <input type="search" id="search-form-widget3" class="search-field" placeholder="Search" value="{{request('search')}}" name="search">
                        <button type="submit" >
                            <span class="screen-reader-text">Search</span>
                        </button>
                    </form>
                </div>

                <div class="widget widget_recent_posts">

                    <h3 class="widget-title">Top Blog</h3>
                    <ul class="list-unstyled">

                        @foreach ($top_blog as $row)
                        <li class="media">
                            <a class="media-image" href="{{url('blog')}}">
                                <img src="{{url('public/blog/'.$row->blog_image)}}" alt="">
                            </a>
                            <div class="media-body">
                                <h4>
                                    <a href="{{url('blog')}}">{{$row->blog_title}}</a>
                                </h4>
                                <p class="item-meta">
                                    <i class="far fa-calendar-alt"></i>
                                    {{ date('d M y', strtotime($row->created_at)) }}
                                </p>
                            </div>
                        </li>
                        @endforeach



                    </ul>
                </div>


                {{-- <div class="widget widget_tag_cloud">

                    <h3 class="widget-title">Tags</h3>

                    <div class="tagcloud">

                        <a href="{{url('blog')}}" class="tag-cloud-link">
                            oil
                        </a>

                        <a href="{{url('blog')}}" class="tag-cloud-link">
                            gas
                        </a>

                        <a href="{{url('blog')}}" class="tag-cloud-link">
                            industry
                        </a>

                        <a href="{{url('blog')}}" class="tag-cloud-link">
                            plant
                        </a>

                        <a href="{{url('blog')}}" class="tag-cloud-link">
                            lab
                        </a>

                    </div>
                </div> --}}


            </aside>


        </div>

    </div>
</section>
@endsection
