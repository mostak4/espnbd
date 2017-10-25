@extends('frontEnd.master')

@section('mainContent')



    <!-- Start single page header -->
    <section id="single-page-header">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single-page-header-left">
                            <h2>About Us</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single-page-header-right">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">About Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End single page header -->

    <!-- Start about  -->
    <section id="about">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="about-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <h3>Our Mission</h3>
                                    <div class>
                                        <p class="text-muted text-justify">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
                                        </p>
                                    </div>
                                    <h3>Our Mission</h3>
                                    <div class>
                                        <p class="text-muted text-justify">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="why-choose-us">
                                    <h3>Why Choose Us?</h3>
                                    <div class="panel-group why-choose-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                        Awesome Design Layout
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <img class="why-choose-img" src="{{asset('frontEnd')}}/assets/images/testi1.jpg" alt="img">
                                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default ">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                        Quality Coding
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                        Great Support
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about -->

    <!-- Start Pricing table -->
    <section id="our-team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area">
                        <h2 class="title">Our Team</h2>
                        <span class="line"></span>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="our-team-content">
                        <div class="row">
                            <!-- Start single team member -->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="team-member-img">
                                        <img src="{{asset('frontEnd')}}/assets/images/team-member-2.png" alt="team member img">
                                    </div>
                                    <div class="team-member-name">
                                        <p>John Doe</p>
                                        <span>CEO</span>
                                    </div>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>

                                </div>
                            </div>
                            <!-- Start single team member -->
                            <!-- Start single team member -->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="team-member-img">
                                        <img src="{{asset('frontEnd')}}/assets/images/team-member-1.png" alt="team member img">
                                    </div>
                                    <div class="team-member-name">
                                        <p>Bernice Neumann</p>
                                        <span>Designer</span>
                                    </div>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>

                                </div>
                            </div>
                            <!-- Start single team member -->
                            <!-- Start single team member -->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="team-member-img">
                                        <img src="{{asset('frontEnd')}}/assets/images/team-member-3.png" alt="team member img">
                                    </div>
                                    <div class="team-member-name">
                                        <p>Dvid Cameron</p>
                                        <span>Developer</span>
                                    </div>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>

                                </div>
                            </div>
                            <!-- Start single team member -->
                            <!-- Start single team member -->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="team-member-img">
                                        <img src="{{asset('frontEnd')}}/assets/images/team-member-1.png" alt="team member img">
                                    </div>
                                    <div class="team-member-name">
                                        <p>Bernice Neumann</p>
                                        <span>Designer</span>
                                    </div>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>

                                </div>
                            </div>
                            <!-- Start single team member -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing table -->


    @endsection