@extends('frontEnd.master')

@section('mainContent')

    <!-- Start single page header -->
    <section id="single-page-header">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single-page-header-left">
                            <h2>notice</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single-page-header-right">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Notice</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End single page header -->

    <!-- Start latest news -->
    <section id="latest-news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area">
                        <h2 class="title">Latest News</h2>
                        <span class="line"></span>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="latest-news-content">
                        <div class="row">
                            <!-- start single latest news -->
                            <div class="col-md-4">
                                <article class="blog-news-single">
                                    <div class="blog-news-img">
                                        <a href="blog-single-with-right-sidebar.html"><img src="{{asset('frontEnd')}}/assets/images/blog-img-1.jpg" alt="image"></a>
                                    </div>
                                    <div class="blog-news-title">
                                        <h2><a href="blog-single-with-right-sidebar.html">All about writing story</a></h2>
                                        <p>By <a class="blog-author" href="#">John Powell</a> <span class="blog-date">|18 October 2015</span></p>
                                    </div>
                                    <div class="blog-news-details">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                                        <a class="blog-more-btn" href="blog-single-with-right-sidebar.html">Read More</a>
                                    </div>
                                </article>
                            </div>
                            <!-- start single latest news -->
                            <div class="col-md-4">
                                <article class="blog-news-single">
                                    <div class="blog-news-img">
                                        <a href="blog-single-with-right-sidebar.html"><img src="{{asset('frontEnd')}}/assets/images/blog-img-2.jpg" alt="image"></a>
                                    </div>
                                    <div class="blog-news-title">
                                        <h2><a href="blog-single-with-right-sidebar.html">Best Mobile Device</a></h2>
                                        <p>By <a class="blog-author" href="#">John Powell</a> <span class="blog-date">|18 October 2015</span></p>
                                    </div>
                                    <div class="blog-news-details">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                                        <a class="blog-more-btn" href="blog-single-with-right-sidebar.html">Read More </a>
                                    </div>
                                </article>
                            </div>
                            <!-- start single latest news -->
                            <div class="col-md-4">
                                <article class="blog-news-single">
                                    <div class="blog-news-img">
                                        <a href="blog-single-with-right-sidebar.html"><img src="{{asset('frontEnd')}}/assets/images/blog-img-3.jpg" alt="image"></a>
                                    </div>
                                    <div class="blog-news-title">
                                        <h2><a href="blog-single-with-right-sidebar.html">Personal Note Details</a></h2>
                                        <p>By <a class="blog-author" href="#">John Powell</a> <span class="blog-date">|18 October 2015</span></p>
                                    </div>
                                    <div class="blog-news-details">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                                        <a class="blog-more-btn" href="blog-single-with-right-sidebar.html">Read More</a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End latest news -->

    @endsection