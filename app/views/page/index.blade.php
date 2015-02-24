@extends('master')

@section('title')
    index
@stop
@section('keywords')
    keywords
@stop
@section('description')
    description
@stop

@section('content')
<!-- Banner Section -->
<div id="banner">
    <div class="anythingSlider">

        <div class="wrapper">
            <ul>
                <li><img src="{{asset('images/banner_1.jpg')}}" alt="" /></li>
                <li><img src="{{asset('images/banner_2.jpg')}}" alt="" /></li>
                <li><img src="{{asset('images/banner_3.jpg')}}" alt="" /></li>
                <li><img src="{{asset('images/banner_4.jpg')}}" alt="" /></li>
                <li><img src="{{asset('images/banner_5.jpg')}}" alt="" /></li>
            </ul>
        </div>

    </div>
</div>

<div class="clear"></div>
<!-- Scroolling Products -->
<div class="content_sec">
    <div class="cont_top">&nbsp;</div>
    <div class="cont_center">
        <div id="prod_scroller">
            <h3 class="colr">Our Most Recent Products</h3>
            <a href="javascript:void(null)" class="prev">&nbsp;</a>
            <div class="anyClass scrol">
                <ul>
                    <li>
                        <a href="{{url('nocolordevice/ipad')}}"><img src="{{asset('images/DUS_1.jpg')}}" alt="" /></a>
                        <h6 class="colr">Tsovet </h6>
                        <div class="addwish">
                            <a href="{{url('nocolordevice/ipad')}}">View Detal</a>
                        </div>
                        <p class="price colr bold">Description</p>
                    </li>
                    <li>
                        <a href="{{url('nocolordevice/laptop')}}"><img src="{{asset('images/DUS_2.jpg')}}" alt="" /></a>
                        <h6 class="colr">Tsovet </h6>
                        <div class="addwish">
                            <a href="{{url('nocolordevice/laptop')}}">View Detal</a>
                        </div>
                        <p class="price colr bold">Description</p>
                    </li>
                    <li>
                        <a href="{{url('colordevice/laptop')}}"><img src="{{asset('images/DUS_3.jpg')}}" alt="" /></a>
                        <h6 class="colr">Tsovet </h6>
                        <div class="addwish">
                            <a href="{{url('colordevice/laptop')}}">View Detal</a>
                        </div>
                        <p class="price colr bold">Description</p>
                    </li>
                    <li>
                        <a href="{{url('colordevice/portable')}}"><img src="{{asset('images/DUS_4.jpg')}}" alt="" /></a>
                        <h6 class="colr">Tsovet </h6>
                        <div class="addwish">
                            <a href="{{url('colordevice/portable')}}">View Detal</a>
                        </div>
                        <p class="price colr bold">Description</p>
                    </li>
                    <li>
                        <a href="{{url('colordevice/ipad')}}"><img src="{{asset('images/DUS_5.jpg')}}" alt="" /></a>
                        <h6 class="colr">Tsovet </h6>
                        <div class="addwish">
                            <a href="{{url('colordevice/ipad')}}">View Detal</a>
                        </div>
                        <p class="price colr bold">Description</p>
                    </li>
                    <li>
                        <a href="{{url('colordevice/probes')}}"><img src="{{asset('images/DUS_6.jpg')}}" alt="" /></a>
                        <h6 class="colr">Tsovet </h6>
                        <div class="addwish">
                            <a href="{{url('colordevice/probes')}}">View Detal</a>
                        </div>
                        <p class="price colr bold">Description</p>
                    </li>
                </ul>
            </div>
            <a href="javascript:void(null)" class="next">&nbsp;</a>
        </div>
        <div class="clear"></div>
    </div>
    <div class="cont_botm">&nbsp;</div>
</div>
<div class="clear"></div>



<div class="content_sec">
    <div class="cont_top">&nbsp;</div>
    <div class="cont_center">
        <!-- Advertise Section -->
        <div class="adv">
            <ul>
                <li><a href="#"><img src="{{asset('images/ab_1.jpg')}}" alt="" /></a></li>
                <li><a href="#"><img src="{{asset('images/ab_2.jpg')}}" alt="" /></a></li>
            </ul>
        </div>
        <div class="clear"></div>
        <div class="clear"></div>
    </div>
    <div class="cont_botm">&nbsp;</div>
</div>
<div class="clear"></div>
@stop