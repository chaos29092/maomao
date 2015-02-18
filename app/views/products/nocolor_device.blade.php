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
            <h3 class="heading colr">黑白超</h3>
            <div class="categories">
                <div class="cats">
                    <a href="{{url('nocolordevice/laptop')}}"><img src="images/products_4.jpg" alt="" /></a>
                </div>
                <div class="cats_big">
                    <a href="{{url('nocolordevice/ipad')}}"><img src="images/products_5.jpg" alt="" /></a>
                </div>
            </div>


            <div class="clear"></div>
        </div>
        <div class="cont_botm">&nbsp;</div>
    </div>

    <div class="clear"></div>
@stop