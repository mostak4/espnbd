@extends('frontEnd.master')

@section('mainContent')

    <!-- Start single page header -->
    <section id="single-page-header">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single-page-header-left">
                            <h2>Blog Archive</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single-page-header-right">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Blog Archive</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End single page header -->

    <!-- Start blog archive -->
    <section id="blog-archive">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-archive-area">
                        <div class="row">
                            @foreach($categoryProducts as $categoryProduct)
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="single-table-price wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                    <div class="price-header" style="margin-bottom:8%;">
                                        <div class="price">
                                            <h3 style="font-size: 14px !important; margin-top: -3px;">{{$categoryProduct->product_name}} </h3>
                                            <h4>MRP. {{$categoryProduct->product_price}} BDT</h4>
                                        </div>
                                    </div>
                                    <div class="price-article">
                                        <img src="{{asset($categoryProduct->product_image)}}" style="width: 200px; height: 200px;">
                                    </div>
                                    <div class="price-footer">
                                        <a class="purchase-btn" href="#">Details</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                <aside class="blog-side-bar">
                                    <!-- Start sidebar widget -->
                                    <div class="sidebar-widget">
                                        <!-- Start blog search -->
                                        <form>
                                            <div class="search-group">
                                                <button type="button" class="blog-search-btn"><span class="fa fa-search"></span></button>
                                                <input type="search" placeholder="Search">
                                            </div>
                                        </form>
                                        <!-- End blog search -->
                                    </div>
                                    <!-- Start sidebar widget -->
                                    <div class="sidebar-widget">
                                        <h4 class="widget-title">Categories</h4>
                                        <ul class="widget-catg">
                                            <li><a href="#">Photoshop</a></li>
                                            <li><a href="#">Web Design</a></li>
                                            <li><a href="#">Web Development</a></li>
                                            <li><a href="#">UI Design</a></li>
                                            <li><a href="#">Photography</a></li>
                                        </ul>
                                    </div>
                                    <!-- Start sidebar widget -->
                                    <div class="sidebar-widget">
                                        <h4 class="widget-title">Text Widget</h4>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    </div>
                                    <!-- Start sidebar widget -->
                                    <div class="sidebar-widget">
                                        <h4 class="widget-title">Tags</h4>
                                        <div class="tag-cloud">
                                            <a href="#">Responsive</a>
                                            <a href="#">Design</a>
                                            <a href="#">Modern</a>
                                            <a href="#">Business</a>
                                            <a href="#">Software</a>
                                            <a href="#">Photoshop</a>
                                            <a href="#">Fashion</a>
                                            <a href="#">News</a>
                                            <a href="#">Health</a>
                                            <a href="#">Education</a>
                                        </div>
                                    </div>
                                    <!-- Start sidebar widget -->
                                    <div class="sidebar-widget">
                                        <h4 class="widget-title">Archive</h4>
                                        <ul class="widget-archive">
                                            <li><a href="#">November 2015<span>(35)</span></a></li>
                                            <li><a href="#">October 2015<span>(55)</span></a></li>
                                            <li><a href="#">September 2015<span>(65)</span></a></li>
                                            <li><a href="#">August 2015<span>(75)</span></a></li>
                                            <li><a href="#">July 2015<span>(105)</span></a></li>
                                        </ul>
                                    </div>
                                    <!-- Start sidebar widget -->
                                    <div class="sidebar-widget">
                                        <h4 class="widget-title">Important Links</h4>
                                        <ul>
                                            <li><a href="#">Link 1</a></li>
                                            <li><a href="#">Link 2</a></li>
                                            <li><a href="#">Link 3</a></li>
                                            <li><a href="#">Link 4</a></li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog archive -->


@endsection