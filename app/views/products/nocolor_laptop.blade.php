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
        <h4 class="heading colr">黑白laptop</h4>
        <!-- Product Detail -->
        <div class="prod_detail">
            <div class="big_thumb">
                <div id="slider2">
                    <div class="contentdiv">
                        <img src="{{asset('images\products\nocoloripad\nocoloripad_detail_1.jpg')}}" alt="" />
                        <a rel="example_group" href="{{asset('images\products\nocoloripad\nocoloripad_1.jpg')}}" title="" class="zoom">&nbsp;</a>
                    </div>
                    <div class="contentdiv">
                        <img src="{{asset('images\products\nocoloripad\nocoloripad_detail_2.jpg')}}" alt="" />
                        <a rel="example_group" href="{{asset('images\products\nocoloripad\nocoloripad_2.jpg')}}" title="" class="zoom">&nbsp;</a>
                    </div>
                    <div class="contentdiv">
                        <img src="{{asset('images\products\nocoloripad\nocoloripad_detail_3.jpg')}}" alt="" />
                        <a rel="example_group" href="{{asset('images\products\nocoloripad\nocoloripad_3.jpg')}}" title="" class="zoom">&nbsp;</a>
                    </div>

                </div>
                <a href="javascript:void(null)" class="prev"><img src="{{asset('images/prev.gif')}}" alt="" /></a>
                <div style="float:left; width:189px !important; overflow:hidden;">
                    <div class="anyClass" id="paginate-slider2">
                        <ul>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\nocoloripad\nocoloripad_detail_small_1.jpg')}}" alt="" /></a></li>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\nocoloripad\nocoloripad_detail_small_2.jpg')}}" alt="" /></a></li>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\nocoloripad\nocoloripad_detail_small_3.jpg')}}" alt="" /></a></li>
                        </ul>
                    </div>
                </div>
                <a href="javascript:void(null)" class="next"><img src="{{asset('images/next.gif')}}" alt="" /></a>
            </div>
            <div class="desc">
                <h2>黑白laptop</h2>
                <a href="#" class="email">Email to Us</a>
                <div class="clear"></div>
                <br/>
                <p><span class="bold">Availability:</span> In stock</p>
                <div class="quickreview">
                    <h6>Quick Overview</h6>
                    <p>
                        产品的简单介绍
                    </p>
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
                        <li><a class="" rel="tab_sidebar_comments">Details and Parameters</a></li>
                    </ul> <!-- END -->
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <div class="tab_container">
                    <div class="tab_container_in">
                        <!-- Recent Articles -->
                        <div id="tab_sidebar_recent" class="tab_sidebar_list">
                            <h4>功能特点</h4><br />
                            <p class="des">一段能把他与另外2台区别开的话</p>
                            <br/>
                            <p class="des">Dual interface</p>
                            <p class="des">Can directly match video,laser,ink jet printers to print report,no need any software,and image is real</p>
                            <p class="des">Can directly connect various kinds of probes with different elements,different specifications and different applications</p>
                            <p class="des">Equipped with lithium battery,which can be used more than four hours when the power is off</p>
                            <p class="des">Advanced and reliable pure digital PC platform,back lit silica gel keyboard</p>
                            <p class="des">Net weight:2.9kg, packaged by metal suitcase, light and easy to carry</p>
                            <p class="des">High definition 10.4/12.1 inch medical liquid crystal display</p>
                            <p class="des">with 3D reconstruction function</p>

                            <br/>
                            <img src="{{asset('images\products\nocoloripad\nocoloripad_d_1.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\nocoloripad\nocoloripad_d_2.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\nocoloripad\nocoloripad_d_3.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\nocoloripad\nocoloripad_d_4.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\nocoloripad\nocoloripad_d_5.jpg')}}" alt=""/>
                            <br/><br/>
                        </div>
                        <!-- END -->



                        <!-- Recent Comments -->
                        <div id="tab_sidebar_comments" class="tab_sidebar_list">
                            <div class="aditional_info">
                                <ul>
                                    <li class="bold title">Product Name</li>
                                    <li class="desc">Full Digital Diagnostic Ultrasound System</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Display Mode</li>
                                    <li class="desc"> B, B/B, B/M, M, 4B, 9B</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Scanning Mode</li>
                                    <li class="desc">Electronic Convex/ Linear/ Micro-convex</li>
                                </ul>
                            </div>
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