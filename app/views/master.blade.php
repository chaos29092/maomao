<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>@yield('title')</title>
<meta name="keywords" content="@yield('keywords')">
<meta name="description" content="@yield('description')">
<!-- // Stylesheets // -->
<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/slider.css')}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{asset('css/default.advanced.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/contentslider.css')}}" type="text/css"  />
<link rel="stylesheet" href="{{asset('css/jquery.fancybox-1.3.1.css')}}" type="text/css" media="screen" />

</head>

<body>
<a name="top"></a>
<div id="wrapper_sec">
	<!-- Header -->
	<div id="masthead">
        <div class="clear"></div>
    	<div class="logo">
        	<a href="index.html"><img src="images/logo.png" alt="" /></a>
            <h5 class="slogn">The best watches for all</h5>
        </div>
        <div class="clear"></div>
        <div class="navigation">
            <ul id="nav" class="dropdown dropdown-linear dropdown-columnar">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('about')}}">About Us</a></li>
                <li class="dir"><a href="#">Mens</a>
                    <ul>
                        <li class="dir"><span class="colr bold navihead">Citizen</span>
                            <ul>
                                <li><a href="categories.html">AK Anne Klein</a></li>
                                <li><a href="categories.html">Alexander Christie</a></li>
                                <li><a href="categories.html">Arbutus</a></li>
                                <li><a href="categories.html">Armitron</a></li>
                                <li><a href="categories.html">Body Glove</a></li>
                                <li><a href="categories.html">Calvin Klein</a></li>
                            </ul>
                        </li>
                        <li class="dir"><span class="colr bold navihead">Calvin Klein</span>
                            <ul>
                                <li><a href="categories.html">AK Anne Klein</a></li>
                                <li><a href="categories.html">Alexander Christie</a></li>
                                <li><a href="categories.html">Arbutus</a></li>
                                <li><a href="categories.html">Armitron</a></li>
                                <li><a href="categories.html">Body Glove</a></li>
                                <li><a href="categories.html">Calvin Klein</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="{{url('contact')}}">Contact</a></li>
                <li class="dir"><a href="#">Pages</a>
                    <ul class="pad">
                    	<li class="clear"><a href="index.html">Home Page</a></li>
                        <li class="clear"><a href="account.html">Account Page</a></li>
                        <li class="clear"><a href="cart.html">Shopping Cart Page</a></li>
                        <li class="clear"><a href="categories.html">Categories</a></li>
                        <li class="clear"><a href="detail.html">Product Detail Page</a></li>
                        <li class="clear"><a href="listing.html">Listing Page</a></li>
                        <li class="clear"><a href="login.html">Login Page</a></li>
                        <li class="clear"><a href="static.html">Static Page</a></li>
                        <li class="clear"><a href="contact.html">Contact Page</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="lang">
            	<li>Language:</li>
                <li><a href="#">English</a></li>
                <li><a href="#">中文</a></li>
                <li><a href="#">Español</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>

    @yield('content')

</div>
<!-- Footer Section -->
	<div id="footer">
    	<div class="foot_inr">
        <div class="topdiv">
        	<a href="#top" class="top">&nbsp;</a>
        </div>
        <div class="emailsignup">
        	<h5>Email Signup</h5>
            <ul class="inp">
            	<li><input name="newsletter" type="text" class="bar" /></li>
                <li><a href="#" class="simplebtn">Signup</a></li>
            </ul>
            <div class="clear"></div>
            <p class="signtxt">
            	By entering my email address, I certify that the information I am providing is accurate and that I am at least 18 years of age.
            </p>
            <h6>FLEXIBLE PAYMENT METHODS</h6>
            <ul class="cards">
            	<li><img src="images/visa.gif" alt="visa" /></li>
                <li><img src="images/master.gif" alt="master" /></li>
                <li><img src="images/paypal.gif" alt="paypal" /></li>
                <li><img src="images/american.gif" alt="american" /></li>
            </ul>
        </div>
        
    	<div class="partners">
        	<h5>Our Partners</h5>
            <ul>
            	<li><a href="static.html">Lorem ipsum</a></li>
                <li><a href="static.html">Dolor sit amet consectetur</a></li>
                <li><a href="static.html">Edipisicing elitseddo</a></li>
                <li><a href="static.html">Eiusmod tempor incididunt</a></li>
                <li><a href="static.html">Lorem ipsum</a></li>
                <li><a href="static.html">Dolor sit amet consectetur</a></li>
                <li><a href="static.html">Edipisicing elitseddo</a></li>
                <li><a href="static.html">Eiusmod tempor incididunt</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="partners">
        	<h5>Customer Services</h5>
            <ul>
            	<li><a href="static.html">Lorem ipsum</a></li>
                <li><a href="static.html">Dolor sit amet consectetur</a></li>
                <li><a href="static.html">Edipisicing elitseddo</a></li>
                <li><a href="static.html">Eiusmod tempor incididunt</a></li>
                <li><a href="static.html">Lorem ipsum</a></li>
                <li><a href="static.html">Dolor sit amet consectetur</a></li>
                <li><a href="static.html">Edipisicing elitseddo</a></li>
                <li><a href="static.html">Eiusmod tempor incididunt</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="copyrights">
        	<p>© 2010 DUMY. All Rights Reserved</p>
            <div class="footer_links">
            	<ul>
                	<li><a href="#">Privacy</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Shipping &amp; Returns</a></li>
                    <li class="last"><a href="#">Product Warranty Info</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        </div>
    </div>

<!-- // Javascript // -->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.min14.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.easing.1.2.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.anythingslider.js')}}"></script>
<script type="text/javascript" src="{{asset('js/anything.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jcarousellite_1.0.1.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scroll.js')}}"></script>
<script type="text/javascript" src="{{asset('js/ddaccordion.js')}}"></script>
<script type="text/javascript" src="{{asset('js/acordn.js')}}"></script>
<script type="text/javascript" src="{{asset('js/cufon-yui.js')}}"></script>
<script type="text/javascript" src="{{asset('js/Trebuchet_MS_400-Trebuchet_MS_700-Trebuchet_MS_italic_700-Trebuchet_MS_italic_400.font.js')}}"></script>
<script type="text/javascript" src="{{asset('js/cufon.js')}}"></script>
<script type="text/javascript" src="{{asset('js/contentslider.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.fancybox-1.3.1.js')}}"></script>
<script type="text/javascript" src="{{asset('js/lightbox.js')}}"></script>
<!--[if lte IE 7]>
<script type="text/javascript" src="{{asset('js/jquery.dropdown.js')}}"></script>
<![endif]-->
</body>
</html>
