<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ESPNBD - HOME</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{asset('frontEnd')}}/assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="{{asset('frontEnd')}}/assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('frontEnd')}}/assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/assets/css/slick.css"/>
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/assets/css/animate.css"/>
    <!-- Progress bar  -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/assets/css/bootstrap-progressbar-3.3.4.css"/>
    <!-- Theme color -->
    <link id="switcher" href="{{asset('frontEnd')}}/assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{asset('frontEnd')}}/style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Lato for Title -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- BEGAIN PRELOADER -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- END PRELOADER -->

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

@include('frontEnd.include.header')


@yield('mainContent')

@include('frontEnd.include.footer')


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap -->
<script src="{{asset('frontEnd')}}/assets/js/bootstrap.js"></script>
<!-- Slick Slider -->
<script type="text/javascript" src="{{asset('frontEnd')}}/assets/js/slick.js"></script>
<!-- mixit slider -->
<script type="text/javascript" src="{{asset('frontEnd')}}/assets/js/jquery.mixitup.js"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="{{asset('frontEnd')}}/assets/js/jquery.fancybox.pack.js"></script>
<!-- counter -->
<script src="{{asset('frontEnd')}}/assets/js/waypoints.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/jquery.counterup.js"></script>
<!-- Wow animation -->
<script type="text/javascript" src="{{'frontEnd'}}/assets/js/wow.js"></script>
<!-- progress bar   -->
<script type="text/javascript" src="{{asset('frontEnd')}}/assets/js/bootstrap-progressbar.js"></script>


<!-- Custom js -->
<script type="text/javascript" src="{{asset('frontEnd')}}/assets/js/custom.js"></script>

</body>
</html>