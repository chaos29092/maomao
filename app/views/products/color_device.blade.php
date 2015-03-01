@extends('master')

@section('title')
    ZENO - {{Lang::get('page.color_doppler')}}
@stop
@section('keywords')
    {{Lang::get('page.color_doppler')}}
@stop
@section('description')
    {{Lang::get('page.color_doppler')}}
@stop

@section('content')
    <!-- Scroolling Products -->
    <div class="content_sec">
        <div class="cont_top">&nbsp;</div>
        <div class="cont_center">
            <h3 class="heading colr">{{Lang::get('page.color_doppler')}}</h3>
            <div class="categories">
                <div class="cats">
                    <a href="{{url('colordevice/laptop')}}"><img src="images/products_1.jpg" alt="{{Lang::get('page.colorlaptop')}}" /></a>
                </div>
                <div class="cats_big">
                    <a href="{{url('colordevice/ipad')}}"><img src="images/products_2.jpg" alt="{{Lang::get('page.coloripad')}}" /></a>
                </div>
            </div>


            <a href="{{url('colordevice/portable')}}"><img src="images/products_3.jpg" alt="{{Lang::get('page.colorportable')}}" /></a>
            <div class="clear"></div>
        </div>
        <div class="cont_botm">&nbsp;</div>
    </div>

    <div class="clear"></div>
@stop