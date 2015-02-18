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
    <div class="content_sec">
        <div class="cont_top">&nbsp;</div>
        <div class="cont_center cont_center_sh">
            <!-- Column1 Section -->
            <div class="col1">
                <!-- Categories -->
                <div class="category">
                    <div class="small_heading">
                        <h5 class="colr">Category</h5>
                    </div>
                    <div class="arrowlistmenu">
                        <a class="menuheader expandable">彩超</a>
                        <ul class="categoryitems">
                            <li><a href="{{url('colordevice/ipad')}}">Ipad</a></li>
                            <li><a href="{{url('colordevice/laptop')}}">Laptop</a></li>
                            <li><a href="{{url('colordevice/portable')}}">Portable</a></li>
                        </ul>
                        <a class="menuheader expandable">黑白超</a>
                        <ul class="categoryitems">
                            <li><a href="{{url('nocolordevice/ipad')}}">Ipad</a></li>
                            <li><a href="{{url('nocolordevice/laptop')}}">Laptop</a></li>
                        </ul>
                        <a class="menuheader expandable">配件</a>
                        <ul class="categoryitems">
                            <li><a href="{{url('nocolordevice/ipad')}}">手柄</a></li>
                            <li><a href="{{url('nocolordevice/laptop')}}">其他</a></li>
                        </ul>

                    </div>
                    <div class="clear"></div>
                    <div class="left_botm">&nbsp;</div>
                </div>
                <!-- Categories -->
                    <div class="category">
                        <div class="small_heading">
                            <h5 class="colr">促销信息</h5>
                        </div>
                        <p>dsasaas</p>
                        <p>dsaas</p>
                        </div>
                        <div class="clear"></div>
                        <div class="left_botm">&nbsp;</div>



                    <div class="category">
                        <div class="small_heading">
                            <h5 class="colr">快捷联系</h5>
                        </div>
                        <p>dsasaas</p>
                        <p>dsaas</p>
                        </div>
                        <div class="clear"></div>
                        <div class="left_botm">&nbsp;</div>
                </div>



            <!-- Column2 Section -->
            @yield('side_content')


            <div class="clear"></div>
        </div>
        <div class="cont_botm">&nbsp;</div>
    </div>

    <div class="clear"></div>
@stop