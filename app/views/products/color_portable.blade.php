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
        <h4 class="heading colr">彩色portable</h4>
        <!-- Product Detail -->
        <div class="prod_detail">
            <div class="big_thumb">
                <div id="slider2">
                    <div class="contentdiv">
                        <img src="{{asset('images\products\colorportable\colorportable_detail_1.jpg')}}" alt="" />
                        <a rel="example_group" href="{{asset('images\products\colorportable\colorportable_1.jpg')}}" title="" class="zoom">&nbsp;</a>
                    </div>
                    <div class="contentdiv">
                        <img src="{{asset('images\products\colorportable\colorportable_detail_2.jpg')}}" alt="" />
                        <a rel="example_group" href="{{asset('images\products\colorportable\colorportable_2.jpg')}}" title="" class="zoom">&nbsp;</a>
                    </div>
                    <div class="contentdiv">
                        <img src="{{asset('images\products\colorportable\colorportable_detail_3.jpg')}}" alt="" />
                        <a rel="example_group" href="{{asset('images\products\colorportable\colorportable_3.jpg')}}" title="" class="zoom">&nbsp;</a>
                    </div>

                </div>
                <a href="javascript:void(null)" class="prev"><img src="{{asset('images/prev.gif')}}" alt="" /></a>
                <div style="float:left; width:189px !important; overflow:hidden;">
                    <div class="anyClass" id="paginate-slider2">
                        <ul>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\colorportable\colorportable_detail_small_1.jpg')}}" alt="" /></a></li>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\colorportable\colorportable_detail_small_2.jpg')}}" alt="" /></a></li>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\colorportable\colorportable_detail_small_3.jpg')}}" alt="" /></a></li>
                        </ul>
                    </div>
                </div>
                <a href="javascript:void(null)" class="next"><img src="{{asset('images/next.gif')}}" alt="" /></a>
            </div>
            <div class="desc">
                <h2>彩色portable</h2>
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
                            <p class="des">1.Imaging Modes: B, B/B, B/M, M, 4B, C, PDI, PW;</p>
                            <p class="des">2.Scanning mode: Convex, Linear, Endocavity;</p>
                            <p class="des">3.Gray scale levels:256;</p>
                            <p class="des">4.Display:15" high resolution LCD monitor;</p>
                            <p class="des">5.Transducer Connector:2 standard;</p>
                            <p class="des">6.Scanning depth: up to 351mm;</p>
                            <p class="des">7.Physical channels64;</p>
                            <p class="des">8.Transducer element128;</p>
                            <p class="des">9.Dynamic imaging technologies: Digital Beam-forming;</p>
                            <p class="des">10.Digital Frequency Scan;</p>
                            <p class="des">11.Dynamic Receiving focusing;</p>
                            <p class="des">12.Dynamic Receiving apodization;</p>
                            <p class="des">13.Real-time Dynamic Aperture;</p>
                            <br/>
                            <img src="{{asset('images\products\colorportable\colorportable_d_1.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\colorportable\colorportable_d_2.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\colorportable\colorportable_d_3.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\colorportable\colorportable_d_4.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\colorportable\colorportable_d_5.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\colorportable\colorportable_d_6.jpg')}}" alt=""/>
                        </div>
                        <!-- END -->



                        <!-- Recent Comments -->
                        <div id="tab_sidebar_comments" class="tab_sidebar_list">
                            <div class="aditional_info">
                                <ul>
                                    <li class="bold title">Imaging processing</li>
                                    <li class="desc">
                                        <p>Pre-processing:8-segment TGC adjustment, Dynamic range (0-100), Frame correlation (0-7), Edge enhancement (0-7), Line density (High/Mid/Low)</p>
                                        <p>Post-processing: Gray scale (0-14), Scan angle up to 150, left/right reverse, up/down reverse</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">Function</li>
                                    <li class="desc">
                                        <p>Zoom: 10 times</p>
                                        <p>Cine loop: up to 6400 frames</p>
                                        <p>HDD 500GB</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">Software function</li>
                                    <li class="desc">
                                        <p>General Measurement: distance, circumference, area, (trace/ellipse), volume, etc.</p>
                                        <p>Calculation package: abdomen, cardiac, gynecology, obstetrics, urology,, small parts (thyroid), etc.</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">Peripheral Ports</li>
                                    <li class="desc">
                                        <p>Two Transducer Ports</p>
                                        <p>Two USB Ports</p>
                                        <p>DVI (to connect to external monitor or projector)</p>
                                        <p>Remote</p>
                                        <p>Video Output</p>
                                        <p>S Video</p>
                                        <p>LAN</p>
                                        <p>Power Input Port</p>
                                        <p>Foot switch</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">Standard Configuration</li>
                                    <li class="desc">
                                        <p>15" high definition LED monitor</p>
                                        <p>Two transducer connectors</p>
                                        <p>Back lit control panel</p>
                                        <p>8-segment TGC</p>
                                        <p>982-frame cine loop</p>
                                        <p>Integrated 500GB Hard disk</p>
                                        <p>Internal lithium Battery Supporting normal diagnosis up to 1.5 hours</p>
                                        <p>Inverted Harmonic Imaging</p>
                                        <p>Pseudo color imaging mode</p>
                                        <p>Annotation library for quick comment</p>
                                        <p>Graph/text report function</p>
                                        <p>DICOM storage SCU</p>
                                        <p>User defined exam settings</p>
                                        <p>User defined parameters capture (Acquire Set)</p>
                                        <p>Intuitive soft key at the bottom of screen, clicking supported</p>
                                        <p>Beam steering for better needle visualization</p>
                                        <p>Patient information management system</p>
                                        <p>Fetal trending--Fetal growth curve graph</p>
                                        <p>Lithotripsy function supported</p>
                                        <p>Biopsy function supported</p>
                                        <p>Support polyembryony measurement up to six</p>
                                        <p>Intuitive context dependent soft key</p>
                                        <p>USB image transfer and software upgrade</p>
                                        <p>Language of UI: Chinese, English</p>
                                        <p>3C6C convex array transducer（2.5/3.5/4.5/H5.0/H6.0MHz）</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">Options</li>
                                    <li class="desc">
                                        <p>3C6C convex array transducer (2.5/3.5/4.5/H5.0/H6.0MHz)</p>
                                        <p>7L4C linear array transducer (6.5/7.5/8.5/H9.0/H10MHz)</p>
                                        <p>6E1C endocavity transducer (5.0/6.5/8.0/H8.0/H9.0MHz)</p>
                                        <p>8L4C high frequency linear probe</p>
                                        <p>6C1C micro convex probe</p>
                                        <p>6I7C rectal linear probe</p>
                                        <p>Needle-guided brackets</p>
                                        <p>Home charger and Cararger</p>
                                        <p>Wireless data transfer function</p>
                                        <p>USB water-resistant footswitch</p>
                                        <p>Mobile trolley</p>
                                        <p>Wheeled transport case</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">Others</li>
                                    <li class="desc">
                                        <p>Net weight: Approx.8.5 kg</p>
                                        <p>Power supply: 100~240VAC, 50Hz/60Hz</p>
                                        <p>Dimensions: 400mm×394mm×172mm</p>
                                    </li>
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