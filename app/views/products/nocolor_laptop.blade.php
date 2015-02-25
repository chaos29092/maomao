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
                        <img src="{{asset('images\products\nocolorlaptop\nocolorlaptop_detail_1.jpg')}}" alt="" />
                        <a rel="example_group" href="{{asset('images\products\nocolorlaptop\nocolorlaptop_1.jpg')}}" title="" class="zoom">&nbsp;</a>
                    </div>
                    <div class="contentdiv">
                        <img src="{{asset('images\products\nocolorlaptop\nocolorlaptop_detail_2.jpg')}}" alt="" />
                        <a rel="example_group" href="{{asset('images\products\nocolorlaptop\nocolorlaptop_2.jpg')}}" title="" class="zoom">&nbsp;</a>
                    </div>

                </div>
                <a href="javascript:void(null)" class="prev"><img src="{{asset('images/prev.gif')}}" alt="" /></a>
                <div style="float:left; width:189px !important; overflow:hidden;">
                    <div class="anyClass" id="paginate-slider2">
                        <ul>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\nocolorlaptop\nocolorlaptop_detail_small_1.jpg')}}" alt="" /></a></li>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\nocolorlaptop\nocolorlaptop_detail_small_2.jpg')}}" alt="" /></a></li>
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
                            <p class="des">一段能把他与另外2台区别开的话.Comprehensive easy-to-use measurements and comments, including general, OBGYN, Cardiac,Urology, Small parts, etc. And the measurement results can be stored in the images or the patients files and automatically generate the report. Reference and import function of typical cases for assistance in diagnosis. Easy-to-use functions of setting up, searching, calling up and printing the patient files including images and reports.</p>
                            <br/>
                            <p class="des">1.12.1 inch TFT color LCD (1024*768)</p>
                            <p class="des">2.Full digital system based on Windows XP</p>
                            <p class="des">3.High-accuracy full digital imaging technology shows true details of the tissues' structure</p>
                            <p class="des">4.Various display modes realizes comparative observation from multiple angles and direction.</p>
                            <p class="des">5.DICOM 3.0 interface supports display and transfer in DICOM format</p>
                            <p class="des">6.PAL-D, XGA, RS232 ports support external large screen display devices</p>
                            <p class="des">7.DVD-RW (optional), built-in hard disk and USB printers offer multiple ways to store files</p>

                            <br/>
                            <img src="{{asset('images\products\nocolorlaptop\nocolorlaptop_d_4.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\nocolorlaptop\nocolorlaptop_d_3.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\nocolorlaptop\nocolorlaptop_d_2.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\nocolorlaptop\nocolorlaptop_d_1.jpg')}}" alt=""/>
                            <br/><br/>
                        </div>
                        <!-- END -->



                        <!-- Recent Comments -->
                        <div id="tab_sidebar_comments" class="tab_sidebar_list">
                            <div class="aditional_info">
                                <ul>
                                    <li class="bold title">Scanning mode</li>
                                    <li class="desc">Convex/Linear</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Display mode</li>
                                    <li class="desc">B,B+B,B+M,M,4B </li>
                                </ul>
                                <ul>
                                    <li class="bold title">Scanning depth</li>
                                    <li class="desc">250mm (Max) </li>
                                </ul>
                                <ul>
                                    <li class="bold title">Gray scales</li>
                                    <li class="desc">256</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Cine-loop</li>
                                    <li class="desc">1024 frames</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Image conversion</li>
                                    <li class="desc">up/down, left/right, black/white</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Zoom</li>
                                    <li class="desc">10 steps</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Measurement </li>
                                    <li class="desc">distance, circumference, area, volume, EF rate, heart rate</li>
                                </ul>
                                <ul>
                                    <li class="bold title">OB measurments</li>
                                    <li class="desc">EDD, GA, FW ( with BPD, GS, CRL, FL, HC, AC )</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Probes selectable</li>
                                    <li class="desc">convex, linear, micro-convex, transvaginal and endorectal</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Monitor</li>
                                    <li class="desc">10.4 TFT color LCD</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Comment </li>
                                    <li class="desc">date&time, name, sex, age, doctor, hospital, annotation </li>
                                </ul>
                                <ul>
                                    <li class="bold title">Wide application</li>
                                    <li class="desc">abdominal, OB/GYN, urology, cardiology, small parts examination, etc</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Standard</li>
                                    <li class="desc">
                                        <p>60R/3.5MHz Convex</p>
                                        <p>A Lithium Battery</p>
                                        <p>A Metal Suitcase</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">Optional</li>
                                    <li class="desc">
                                        <p>7.5MHz Endorectal Linear</p>
                                        <p>7.5MHz Linear </p>
                                        <p>20R/5.0MHz Micro-Convex</p>
                                        <p>13R/6.5MHz Transvaginal Convex</p>
                                        <p>Video Printer</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title"></li>
                                    <li class="desc"></li>
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