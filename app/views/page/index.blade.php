@extends('master')

@section('title')
    ZENO - {{Lang::get('page.index')}}
@stop
@section('keywords')
    {{Lang::get('page.nocoloripad')}}, {{Lang::get('page.coloripad')}}, {{Lang::get('page.colorlaptop')}}, {{Lang::get('page.nocolorlaptop')}}, {{Lang::get('page.colorportable')}}.
@stop
@section('description')
    {{Lang::get('page.nocoloripad')}}, {{Lang::get('page.coloripad')}}, {{Lang::get('page.colorlaptop')}}, {{Lang::get('page.nocolorlaptop')}}, {{Lang::get('page.colorportable')}} Manufacturers.
@stop

@section('content')
<!-- Banner Section -->
<div id="banner">
    <div class="anythingSlider">

        <div class="wrapper">
            <ul>
                <li><img src="{{asset('images/banner_1.jpg')}}" alt="{{Lang::get('page.nocoloripad')}}" /></li>
                <li><img src="{{asset('images/banner_2.jpg')}}" alt="{{Lang::get('page.coloripad')}}" /></li>
                <li><img src="{{asset('images/banner_3.jpg')}}" alt="{{Lang::get('page.colorlaptop')}}" /></li>
                <li><img src="{{asset('images/banner_4.jpg')}}" alt="{{Lang::get('page.nocolorlaptop')}}" /></li>
                <li><img src="{{asset('images/banner_5.jpg')}}" alt="{{Lang::get('page.colorportable')}}" /></li>
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
            <h3 class="colr">{{Lang::get('page.most_products')}}</h3>
            <a href="javascript:void(null)" class="prev">&nbsp;</a>
            <div class="anyClass scrol">
                <ul>
                    <li>
                        <a href="{{url('nocolordevice/ipad')}}"><img src="{{asset('images/DUS_1.jpg')}}" alt="" /></a>
                        <h6 class="colr">{{Lang::get('page.nocoloripad')}}</h6>
                        <div class="addwish">
                            <a href="{{url('nocolordevice/ipad')}}">{{Lang::get('page.view_detal')}}</a>
                        </div>
                    </li>
                    <li>
                        <a href="{{url('nocolordevice/laptop')}}"><img src="{{asset('images/DUS_2.jpg')}}" alt="" /></a>
                        <h6 class="colr">{{Lang::get('page.nocolorlaptop')}}</h6>
                        <div class="addwish">
                            <a href="{{url('nocolordevice/laptop')}}">{{Lang::get('page.view_detal')}}</a>
                        </div>
                    </li>
                    <li>
                        <a href="{{url('colordevice/laptop')}}"><img src="{{asset('images/DUS_3.jpg')}}" alt="" /></a>
                        <h6 class="colr">{{Lang::get('page.colorlaptop')}}</h6>
                        <div class="addwish">
                            <a href="{{url('colordevice/laptop')}}">{{Lang::get('page.view_detal')}}</a>
                        </div>
                    </li>
                    <li>
                        <a href="{{url('colordevice/portable')}}"><img src="{{asset('images/DUS_4.jpg')}}" alt="" /></a>
                        <h6 class="colr">{{Lang::get('page.colorportable')}}</h6>
                        <div class="addwish">
                            <a href="{{url('colordevice/portable')}}">{{Lang::get('page.view_detal')}}</a>
                        </div>
                    </li>
                    <li>
                        <a href="{{url('colordevice/ipad')}}"><img src="{{asset('images/DUS_5.jpg')}}" alt="" /></a>
                        <h6 class="colr">{{Lang::get('page.coloripad')}}</h6>
                        <div class="addwish">
                            <a href="{{url('colordevice/ipad')}}">{{Lang::get('page.view_detal')}}</a>
                        </div>
                    </li>
                    <li>
                        <a href="{{url('colordevice/probes')}}"><img src="{{asset('images/DUS_6.jpg')}}" alt="" /></a>
                        <h6 class="colr">{{Lang::get('probe')}}</h6>
                        <div class="addwish">
                            <a href="{{url('colordevice/probes')}}">{{Lang::get('page.view_detal')}}</a>
                        </div>
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
                <li><a href="#"><img src="{{asset('images/ab_1.jpg')}}" alt="{{Lang::get('page.promotion')}} Device" /></a></li>
                <li><a href="#"><img src="{{asset('images/ab_2.jpg')}}" alt="{{Lang::get('page.promotion')}} {{Lang::get('page.probe')}}" /></a></li>
            </ul>
        </div>
        <div class="clear"></div>
        <div class="clear"></div>
    </div>
    <div class="cont_botm">&nbsp;</div>
</div>
<div class="clear"></div>
@stop