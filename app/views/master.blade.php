<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>@yield('title')</title>
<meta name="keywords" content="@yield('keywords')">
<meta name="description" content="@yield('description')">
<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
<!-- // Stylesheets // -->
<link rel="stylesheet" href="{{asset('css/style.min.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/slider.min.css')}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{asset('css/default.advanced.min.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/contentslider.min.css')}}" type="text/css"  />
<link rel="stylesheet" href="{{asset('css/jquery.fancybox-1.3.1.min.css')}}" type="text/css" media="screen" />

</head>

<body>
<a name="top"></a>
<div id="wrapper_sec">
	<!-- Header -->
	<div id="masthead">
    	<div class="logo">
        	<a href="index.html"><img src="{{asset('images/logo.png')}}" alt="Zeno" /></a>
            <h5 class="slogn">Good doctors need good device</h5>
        </div>
        <div class="clear"></div>
        <div class="navigation">
            <ul id="nav" class="dropdown dropdown-linear dropdown-columnar">
                <li><a href="{{url('/')}}">主页</a></li>
                <li><a href="{{url('colordevice')}}">彩超</a></li>
                <li><a href="{{url('nocolordevice')}}">黑白超</a></li>
                <li><a href="{{url('colordevice/probes')}}">探头</a></li>
                <li><a href="{{url('about')}}">关于我们</a></li>
                <li><a href="{{url('contact')}}">联系方式</a></li>
                <li><a href="{{url('service')}}">如何购买</a></li>
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
        	<h5>Get Prices</h5>
            {{ Form::open(array('url' => 'getPrice', 'class' => 'form-horizontal', 'role' => 'form' )) }}
            <ul class="inp">
            	<li><input name="email" placeholder="    your email address" type="text" class="bar" /></li>
                <li>{{ Form::submit(Lang::get('page.send'), array('class' => 'simplebtn')) }}</li>
            </ul>
            {{ Form::close() }}
            <div class="clear"></div>
            <p class="signtxt">
            	By entering your email address, We will send products price to you.
            </p>
            <h6>FLEXIBLE PAYMENT METHODS</h6>
            <ul class="cards">
            	<li><img src="{{asset('images/visa.gif')}}" alt="visa" /></li>
                <li><img src="{{asset('images/master.gif')}}" alt="master" /></li>
                <li><img src="{{asset('images/paypal.gif')}}" alt="paypal" /></li>
                <li><img src="{{asset('images/american.gif')}}" alt="american" /></li>
            </ul>
        </div>
        
    	<div class="partners">
        	<h5>Products</h5>
            <ul>
                <li><a href="{{url('nocolordevice/ipad')}}">黑白超ipad</a></li>
                <li><a href="{{url('nocolordevice/laptop')}}">黑白超laptop</a></li>
            	<li><a href="{{url('colordevice/ipad')}}">彩超ipad</a></li>
                <li><a href="{{url('colordevice/laptop')}}">彩超laptop</a></li>
                <li><a href="{{url('colordevice/portable')}}">彩超portable</a></li>
                <li><a href="{{url('colordevice/probes')}}">探头</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="partners">
        	<h5>Support</h5>
            <ul>
                <li><a href="{{url('#')}}">促销信息</a></li>
                <li><a href="{{url('#')}}">资料下载</a></li>
                <li><a href="{{url('service')}}">帮助</a></li>
                <li><a href="{{url('about')}}">关于我们</a></li>
                <li><a href="{{url('#')}}">招代理商</a></li>
                <li><a href="{{url('contact')}}">联系方式</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="copyrights">
        	<p>© 2010 ZENO. All Rights Reserved</p>
            <div class="footer_links">
            	<ul>
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
<script type="text/javascript" src="{{asset('js/Trebuchet_MS_400-Trebuchet_MS_700-Trebuchet_MS_italic_700-Trebuchet_MS_italic_400.font.js')}}"></script>
<script type="text/javascript" src="{{asset('js/contentslider.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.fancybox-1.3.1.js')}}"></script>
<script type="text/javascript" src="{{asset('js/lightbox.js')}}"></script>
<script type="text/javascript" src="{{asset('js/cont_slidr.js')}}"></script>
<!--[if lte IE 7]>
<script type="text/javascript" src="{{asset('js/jquery.dropdown.js')}}"></script>
<![endif]-->
</body>
</html>
