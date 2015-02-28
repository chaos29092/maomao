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
    <!-- Scroolling Products -->
    <div class="content_sec">
        <div class="cont_top">&nbsp;</div>
        <div class="cont_center">
            <h3 class="heading colr">彩超</h3>
            <div class="categories">
                <div class="cats">
                    <a href="{{url('colordevice/laptop')}}"><img src="images/products_1.jpg" alt="" /></a>
                </div>
                <div class="cats_big">
                    <a href="{{url('colordevice/ipad')}}"><img src="images/products_2.jpg" alt="" /></a>
                </div>
            </div>


            <a href="{{url('colordevice/portable')}}"><img src="images/products_3.jpg" alt="" /></a>
            <div class="clear"></div>
        </div>
        <div class="cont_botm">&nbsp;</div>
    </div>

    <div class="clear"></div>
@stop