<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{asset('css/inner.css')}}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{asset('css/es-carousel.css')}}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{asset('css/camera.css')}}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{asset('css/portfolio.css')}}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{asset('css/elements.css')}}" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900,400italic' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700italic,600italic,400italic,300italic,800,700,600,300|Open+Sans+Condensed:300,700,300italic|Fredericka+the+Great'
          rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900,400italic' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="{{asset('css/docs.css')}}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{asset('css/ie.css')}}" type="text/css" media="screen">
    <![endif]-->
</head>
<body class="home-page">
<!--==============================header=================================-->
<div class="header-block clearfix">
    <!-- Navigation -->
    <header>
        <div class="container clearfix">
            <div class="row ">
                <div class="span12">
                    <h1 class="brand brand_"><a href="index.html"><img src="img/logo.png" alt=""></a></h1>

                    <div class="box-soc-adress">
                        <ul class="list-soc">
                            <li><a href="#"><img alt="" src="img/header-twitter.png"></a></li>
                            <li><a href="#"><img alt="" src="img/header-facebook.png"></a></li>
                        </ul>
                        <div class="clear"></div>
                        <div class="phone-1">Tel: +1 234 123 4567</div>
                        <div class="clear"></div>
                        <div class="address-1">3301 Envato Melbourne, Little Lonsdale St</div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                    <div class="row-nav-search">
                        <form id="search" action="search.php" method="GET" accept-charset="utf-8">
                            <div class="clearfix">
                                <input type="text"
                                       onFocus="if(this.value =='Enter search keywords here' ) this.value=''"
                                       onBlur="if(this.value=='') this.value='Enter search keywords here'"
                                       value="Enter search keywords here" name="s">
                                <a href="#" onClick="document.getElementById('search').submit()"></a></div>
                        </form>
                        <div class="navbar navbar_">
                            <div class="container">
                                <!--=========== menu ===============-->
                                <div class="nav-collapse nav-collapse_ collapse">
                                    <ul class="nav sf-menu">
                                        <li class="active sub-menu"><a href="{{url('/')}}">Home</a></li>
                                        <li class="sub-menu"><a href="{{url('about')}}">About us</a></li>
                                        <li class="sub-menu"><a href="#">Elements </a>
                                            <ul>
                                                <li><a href="element.html">Element Page</a></li>
                                                <li class="sub-menu"><a href="#">Bootstrap Page</a>
                                                    <ul>
                                                        <li><a href="scaffolding.html">Scaffolding</a></li>
                                                        <li><a href="base-css.html">Base CSS</a></li>
                                                        <li><a href="components.html">Components</a></li>
                                                        <li><a href="javaScript.html">JavaScript</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu"><a href="#">Portfolio </a>
                                            <ul>
                                                <li><a href="portfolio2.html">2 Columns</a></li>
                                                <li><a href="portfolio3.html">3 Columns</a></li>
                                                <li><a href="portfolio4.html">4 Columns</a></li>
                                                <li><a href="portfolio6.html">6 Columns</a></li>
                                                <li><a href="portfolio1.html">Single Project</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu"><a href="#">Blog </a>
                                            <ul>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Single Post</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact us </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Slider -->
    @yield('slide')
</div>
<!--==============================content=================================-->
@yield('content')
<!--==============================footer=================================-->
<footer>
    <div class="section-3">
        <div class="container">
            <div class="row">
                <!-- Contact us -->
                <div class="span3">
                    <h2>Contact us</h2>
                    <address class="vcard">
                        <span class="street-address">3301 Envato Melbourne, Little Lonsdale St</span> <span class="tel">+1 234 123 4567</span>
                        <a href="mailto:info@owltemplates.com" class="email">info@owltemplates.com</a>
                    </address>
                </div>
                <!-- Follow us -->
                <div class="span3">
                    <h2>Follow Us</h2>

                    <div class="clearfix p1">
                        <p class="text-info"><i>Lorem ipsum dolor sit amet, consectetuer adipiscing, sed diam nonummy
                                nibh eui.</i></p>
                    </div>
                    <ul id="social" class="tooltip-demo">
                        <li><a rel="tooltip" title="RSS" href="#"><img alt="RSS" src="img/social_icons/rss.png"></a>
                        </li>
                        <li><a rel="tooltip" title="Twitter" href="#"><img alt="Twitter"
                                                                           src="img/social_icons/twitter.png"></a></li>
                        <li><a rel="tooltip" title="Facebook" href="#"><img alt="Facebook"
                                                                            src="img/social_icons/facebook.png"></a>
                        </li>
                        <li><a rel="tooltip" title="Dribbble" href="#"><img alt="Dribbble"
                                                                            src="img/social_icons/dribbble.png"></a>
                        </li>
                        <li><a rel="tooltip" title="Flickr" href="#"><img alt="Flickr"
                                                                          src="img/social_icons/flickr.png"></a></li>
                        <li><a rel="tooltip" title="Skype" href="#"><img alt="Skype"
                                                                         src="img/social_icons/skype.png"></a></li>
                    </ul>
                </div>
                <!-- Useful Links -->
                <div class="span3">
                    <h2>Useful Links</h2>
                    <ul class="list">
                        <li><a href="#">In faucibus orci luctus et</a></li>
                        <li><a href="#">Ultrices posuere cubilia Curae</a></li>
                        <li><a href="#">Suspendisse sollicitudin velit sed leo</a></li>
                        <li><a href="#">Nam elit agna,endrerit sit amet</a></li>
                    </ul>
                </div>
                <!-- twitter feed  -->
                <div class="span3">
                    <h2>Twitter Feed</h2>

                    <div class="tweets">
                        <p> Loading Tweets... </p>
                        <ul id="tweet-list">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer 2 -->
    <div class="footer-2">
        <div class="container">
            <div class="row">
                <div class="span12">Simplyapp &copy; 2012 <a href="#">Privacy Policy</a></div>
            </div>
        </div>
    </div>
</footer>
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.elastislide.js')}}"></script>
<script type="text/javascript" src="{{asset('js/camera.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.ui.totop.js')}}"></script>
<script type="text/javascript" src="{{asset('js/prettify.js')}}"></script>
<script type="text/javascript" src="{{asset('js/application.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.cookie.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.quicksand.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.mobile.customized.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/accordion.js')}}"></script>
<script type="text/javascript" src="{{asset('js/tabs.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sitemap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/nav-small.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.mobilemenu.js')}}"></script>
<script>
    $(document).ready(function () {
        jQuery('.camera_wrap').camera();
    });
</script>
<script>
    jQuery("#carousel-blog").elastislide({
        imageW: 270,
        minItems: 2,
        speed: 600,
        easing: "easeOutQuart",
        margin: 30,
        border: 0,
        onClick: function () {
        }
    });</script>
</body>
</html>
