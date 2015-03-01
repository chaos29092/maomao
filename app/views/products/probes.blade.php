@extends('master_side')

@section('title')
    index
@stop
@section('keywords')
    keywords
@stop
@section('description')
    description
@stop

@section('side_content')
    <div class="col2">
        <h4 class="heading colr">探头</h4>
        <!-- Product Detail -->
        <div class="prod_detail">
            <div class="big_thumb">
                <div id="slider2">
                    <div class="contentdiv">
                        <img src="{{asset('images\products\probes\probes_detail_1.jpg')}}" alt="" />
                        <a rel="example_group" href="{{asset('images\products\probes\probes_1.jpg')}}" title="" class="zoom">&nbsp;</a>
                    </div>
                    <div class="contentdiv">
                        <img src="{{asset('images\products\probes\probes_detail_2.jpg')}}" alt="" />
                        <a rel="example_group" href="{{asset('images\products\probes\probes_2.jpg')}}" title="" class="zoom">&nbsp;</a>
                    </div>
                    <div class="contentdiv">
                        <img src="{{asset('images\products\probes\probes_detail_3.jpg')}}" alt="" />
                        <a rel="example_group" href="{{asset('images\products\probes\probes_3.jpg')}}" title="" class="zoom">&nbsp;</a>
                    </div>

                </div>
                <a href="javascript:void(null)" class="prev"><img src="{{asset('images/prev.gif')}}" alt="" /></a>
                <div style="float:left; width:189px !important; overflow:hidden;">
                    <div class="anyClass" id="paginate-slider2">
                        <ul>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\probes\probes_detail_small_1.jpg')}}" alt="" /></a></li>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\probes\probes_detail_small_2.jpg')}}" alt="" /></a></li>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\probes\probes_detail_small_3.jpg')}}" alt="" /></a></li>
                        </ul>
                    </div>
                </div>
                <a href="javascript:void(null)" class="next"><img src="{{asset('images/next.gif')}}" alt="" /></a>
            </div>
            <div class="desc">
                <h2>探头</h2>
                <a href="#" class="email">Email to Us</a>
                <div class="clear"></div>
                <br/>
                <p><span class="bold">Availability:</span> In stock</p>
                <div class="quickreview">
                    <h6>Promotion:</h6>
                    <p>15% OFF for 3 probes</p>
                </div>
                <div class="addtocart">
                    <br/>
                    <ul class="inp">
                        <li><a href="{{url('contact')}}" class="simplebtn">Contact Us</a></li>
                    </ul>
                    <ul>
                        <li class="bold or">OR</li>
                        <li>
                            <a href="#" class="add clear">下载仪器资料</a>
                            <a href="#" class="add clear">查看购买帮助</a>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="prod_desc">
                <div class="tab_menu_container">
                    <ul id="tab_menu">
                        <li><a class="" rel="tab_sidebar_recent">Product Description</a></li>
                    </ul> <!-- END -->
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <div class="tab_container">
                    <div class="tab_container_in">
                        <!-- Recent Articles -->
                        <div id="tab_sidebar_recent" class="tab_sidebar_list">
                            <h4>功能特点</h4><br />
                            <p class="des">Main characteristic
                                We have several probes for different measurements, please contact our salesman for further information.
                                <br/>
                                Following are some main probes for your reference.
                            </p>
                            <br/>
                            <a href="{{url('contact')}}" class="simplebtn">Contact Now!</a>
                            <br/><br/>

                            <img src="{{asset('images\products\probes\probes_d_1.jpg')}}" alt="Convex probe (C3.5MHzR60)"/>
                            <br/><br/>
                            <img src="{{asset('images\products\probes\probes_d_2.jpg')}}" alt="Cardiac probe(C5.0MHzR20)"/>
                            <br/><br/>
                            <img src="{{asset('images\products\probes\probes_d_3.jpg')}}" alt="Linear probe(L7.5MHzL40)"/>
                            <br/><br/>
                            <img src="{{asset('images\products\probes\probes_d_4.jpg')}}" alt="Intracavity probe(E6.5MHzR13)"/>
                            <br/><br/>
                            <img src="{{asset('images\products\probes\probes_d_5.jpg')}}" alt="Intracavity probe(E6.5MHzR13)"/>
                        </div>
                        <!-- END -->
                        <div class="clear"></div>

                    </div>

                </div>
                <script type="text/javascript" src="{{asset('js/tabs.js')}}"></script>
            </div>
        </div>
        <div class="clear"></div>
    </div>
@stop