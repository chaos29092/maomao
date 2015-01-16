@extends('master')

@section('title')
  maomao
@stop
@section('description')
  des
@stop
@section('keywords')
  keywords
@stop

@section('slide')
  <div class="container">
    <div class="row">
      <div class="span12">
        <div id="page-title">
          <ul class="breadcrumb">
            <li><a href="#">Home</a> <span class="divider">/</span></li>
            <li><a href="#">Layouts</a> <span class="divider">/</span></li>
            <li class="active">About us</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@stop

@section('content')
  <section id="content">
    <div class="container">
      <!-- welcome text -->
      <div class="row">
        <div class="span12">
          <div class="effect-left"></div>
          <div class="effect-right"></div>
          <div class="page-header1">
            <h2>About Us<small> components, javascript plugins</small></h2>
          </div>
        </div>
      </div>
      <!-- Icons -->
      <div class="row">
        <div class="span8">
          <h2>What Can We Do</h2>
          <div class="img-border2"><img src="img/page2-img1.jpg" alt=""></div>
          <p>Suspendisse vitae libero justo. Integer eu dui nulla. Duis in risus elit, ac vulputate purus. Quisque porttitor luctus risus ac pharetra. Donec pharetra, lectus nec dignissim pharetra, leo felis dapibus nunc, eu laoreet lorem nibh quis libero. Nulla facilisi. Sed pulvinar sem nec tortor congue dictum sed non nibh.</p>
          <p>Nam condimentum ante sed tellus dictum non feugiat purus imperdiet. Proin arcu tellus, placerat facilisis rhoncus eget, mollis ac erat. Donec accumsan erat in elit condimentum dictum pharetra est molestie. Donec eget felis in ligula bibendum gravida consectetur at dolor. </p>
        </div>
        <div class="span4">
          <div class="hiring">
            <h2>&mdash; We Are Hiring &mdash;</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eui Nam condimentum ante sed tellus dictum non feugiat purus imperdiet. Proin arcu tellus, placerat facilisis rhoncus eget, mollis ac erat. Donec erat in elit pharetra est molestie.</p>
            <a class="btn btn-large btn-success" href="#"><i class="icon-hand-right icon-white"></i> Apply Now</a> </div>
        </div>
      </div>
    </div>
    <div class="section-4 centre">
      <div class="container">
        <!-- Strip with button -->
        <div class="row">
          <div class="span12">
            <h2>Welcome to Simplyapp. We provide <span>Clean</span> and <span>Simple</span> design.</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eui
              smod tincidunt ut laor.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <!-- welcome -->
        <div class="span12">
          <h2>Meet The Team</h2>
          <p class="p0">Nullam egestas nulla rutrum lorem varius nec faucibus est fringilla. Quisque at urna vel leo tincidunt rutrum vitae at enim. Duis ac mi nulla. Sed convallis lobortis vulputate. Etiam feugiat sapien vel felis scelerisque dapibus. Curabitur dictum massa id urna imperdiet eu blandit dolor faucibus. Fusce eu lobortis sem. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eui smod tincidunt ut laor.</p>
          <ul class="thumbnails p0">
            <li class="span3">
              <div class="thumbnail">
                <figure class="img-border1"><img alt="" src="img/page1-img13.jpg"></figure>
                <h2 class="our-team">John Doe<span>Creative Design</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eui
                  smod tincidunt ut laor.</p>
                <ul class="team-social-icon tooltip-demo">
                  <li><a href="#" title="RSS" rel="tooltip"><img src="img/social_icons/rss.png" alt="RSS"></a></li>
                  <li><a href="#" title="Twitter" rel="tooltip"><img src="img/social_icons/twitter.png" alt="Twitter"></a></li>
                  <li><a href="#" title="Facebook" rel="tooltip"><img src="img/social_icons/facebook.png" alt="Facebook"></a></li>
                  <li><a href="#" rel="tooltip" data-original-title="Skype"><img src="img/social_icons/skype.png" alt="Skype"></a></li>
                </ul>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
                <figure class="img-border1"><img alt="" src="img/page1-img12.jpg"></figure>
                <h2 class="our-team">John Doe<span>Creative Design</span></h2>
                <p>Lorem ipsum dolor sit amet, consecteter
                  dipiscing elit, sed diam nonummy nibh euis
                  mod tincidunt ut laore.</p>
                <ul class="team-social-icon tooltip-demo">
                  <li><a href="#" title="Twitter" rel="tooltip"><img src="img/social_icons/twitter.png" alt="Twitter"></a></li>
                  <li><a href="#" title="Facebook" rel="tooltip"><img src="img/social_icons/facebook.png" alt="Facebook"></a></li>
                  <li><a href="#" title="Email" rel="tooltip"><img src="img/social_icons/mail.png" alt="Email"></a></li>
                </ul>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
                <figure class="img-border1"><img alt="" src="img/page1-img13.jpg"></figure>
                <h2 class="our-team">John Doe<span>Creative Design</span></h2>
                <p>Lorem ipsum dolor sit amet, consectet
                  er adipiscing elit, sed diam nonummy nibh euismod tincidunt ut lao.</p>
                <ul class="team-social-icon tooltip-demo">
                  <li><a href="#" title="Skype" rel="tooltip"><img src="img/social_icons/skype.png" alt="Skype"></a></li>
                  <li><a href="#" title="Twitter" rel="tooltip"><img src="img/social_icons/twitter.png" alt="Twitter"></a></li>
                  <li><a href="#" title="Facebook" rel="tooltip"><img src="img/social_icons/facebook.png" alt="Facebook"></a></li>
                  <li><a href="#" title="Dribbble" rel="tooltip"><img src="img/social_icons/dribbble.png" alt="Dribbble"></a></li>
                </ul>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
                <figure class="img-border1"><img alt="" src="img/page1-img12.jpg"></figure>
                <h2 class="our-team">John Doe<span>Creative Design</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eui
                  smod tincidunt ut laor.</p>
                <ul class="team-social-icon tooltip-demo">
                  <li><a href="#" title="RSS" rel="tooltip"><img src="img/social_icons/rss.png" alt="RSS"></a></li>
                  <li><a href="#" title="Twitter" rel="tooltip"><img src="img/social_icons/twitter.png" alt="Twitter"></a></li>
                  <li><a href="#" title="Facebook" rel="tooltip"><img src="img/social_icons/facebook.png" alt="Facebook"></a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
@stop

