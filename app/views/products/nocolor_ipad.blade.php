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
        <h4 class="heading colr">黑白ipad</h4>
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
                <h2>黑白ipad</h2>
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
                            <p class="des">1.Dual interface;</p>
                            <p class="des">2.Can directly matche video,laser,ink jet printers to print report,no need any software,and image is real;</p>
                            <p class="des">3.Can directly connect various kinds of probes with different elements,different specifications and different applications;</p>
                            <p class="des">4.Equipped with lithium battery,which can be used more than four hours when the power is off;</p>
                            <p class="des">5.Advanced and reliable pure digital PC platform,backlit silica gel keyboard;</p>
                            <p class="des">6.Net weight:1.9kg,packaged by metal suitcase,light and easy to carry.;</p>
                            <p class="des">7.High definition 10.4/12.1  inch medical liquid crystal display;</p>
                            <p class="des">8.with 3D reconstruction function.</p>

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
                                <ul>
                                    <li class="bold title">Depth</li>
                                    <li class="desc">240mm</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Screen</li>
                                    <li class="desc">10/inchwide screen LED</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Probe port</li>
                                    <li class="desc">2</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Resolution</li>
                                    <li class="desc">longitudinal≤1mm；horizontal≤2mm</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Output Connecter</li>
                                    <li class="desc">USB, DICOM, VGA</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Gray Scale</li>
                                    <li class="desc">256</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Time Gain</li>
                                    <li class="desc">gain：0～100dB</li>
                                </ul>
                                <ul>
                                    <li class="bold title">TGC</li>
                                    <li class="desc">8 segments，it can separately adjust under B Mode and M Mode</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Storage</li>
                                    <li class="desc">image save、cine loop,big memory capacity≥10G. measurement results storage,report storage</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Cine Loop</li>
                                    <li class="desc">64,128,256,512 frame auto/manual</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Patient Information</li>
                                    <li class="desc">
                                        <p>Hospital Name</p>
                                        <p>Patient Name</p>
                                        <p>Record Number</p>
                                        <p>Age</p>
                                        <p>Gender</p>
                                        <p>Record</p>
                                        <p>Save</p>
                                </ul>
                                <ul>
                                    <li class="bold title">Focus</li>
                                    <li class="desc">1-4 focuses, it can be combined by different methods and removed</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Zoom, Partial Enlargement</li>
                                    <li class="desc">16 levels zoom,1-4 Real-time partial enlargement</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Comments function</li>
                                    <li class="desc">Omments function in picture are comments function in patient information
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">Chinese and English</li>
                                    <li class="desc">operation interface can realize the change of Chinese and English</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Body Mark</li>
                                    <li class="desc">140</li>
                                </ul>
                                <ul>
                                    <li class="bold title">multi-frequency check</li>
                                    <li class="desc">THI5 segment frequencies+THI for check</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Have 3D software function</li>
                                    <li class="desc">Yes</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Color Display</li>
                                    <li class="desc">more than 40 kinds</li>
                                </ul>
                                <ul>
                                    <li class="bold title">AC/DC amphibious</li>
                                    <li class="desc">Yes</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Report</li>
                                    <li class="desc">display report, save report</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Variable Angle scanning</li>
                                    <li class="desc">25％、30%、35%、…100% in total 16 levels angles</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Image processing</li>
                                    <li class="desc">image front-processing,image post-processing,dynamic range,frame correlation, line correlation, edge enhancemen, W/B overturn,L/R overturn, UP/DOWN overturn，gray project, gray curve, contrast, brightness, V correction, noise reduction</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Basic measurement in B mode</li>
                                    <li class="desc">distance, circumstance, area, volume, angle, histogram, cross-section diagram, thurl angle</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Basic measurement in M mode</li>
                                    <li class="desc">heart rate, time,slope</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Abdominal measurement</li>
                                    <li class="desc">liver,gallbladder, kidney, pancreas,spleen</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Gynecology measurement</li>
                                    <li class="desc">uterus,cervix uterus, endometrium, ovary, ovarian follicle, hydatoncus, enclosed mass</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Obstetric measurement</li>
                                    <li class="desc">AC、BPD、CRL、FL、THD、GS、OFD、HUMERUS、TIDIA、ULNA、HC、TAD、APTD、FTA. It can measure the age of fetus, weight of fetus, AFI, the analytical report of fetus and the growth curve</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Cardiology measurement</li>
                                    <li class="desc">LV,LV function,aorta, mitral valve</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Urology measurement</li>
                                    <li class="desc">Left renal volume, Right renal volume, RUV,prostate kidney</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Small organs measurement</li>
                                    <li class="desc">ophthalmology, thyroid,jaw and face</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Dimension</li>
                                    <li class="desc">245mm×92mm×50mm </li>
                                </ul>
                                <ul>
                                    <li class="bold title">Weight</li>
                                    <li class="desc">
                                        <p>Around 4.5kg</p>
                                        <p>Weproduct net weight<3KG</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">Standard Configuration</li>
                                    <li class="desc">
                                        <p>Host</p>
                                        <p>Convex-probe(C3.5MHzR60)</p>
                                        <p>Power Adapter </p>
                                        <p>User manual</p>
                                        <p>Lithium Battery</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">Options:</li>
                                </ul>
                                <ul>
                                    <li class="bold title">(1)	Probe</li>
                                    <li class="desc">
                                        <p>Convex probe(C3.2MHzR20)</p>
                                        <p>Linear probe(L6.0MHzL40)</p>
                                        <p>Visual convex probe(E6.5MHzR10)</p>
                                        <p>Intracavity probe(E6.5MHzR13)</p>
                                        <p>Cardiac probe(C5.0MHzR20)</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">(2)	DICOM3.0 transmission</li>
                                    <li class="desc">Product connects with PACS, it can gain the image and informaton through DICOM transmission</li>
                                </ul>
                                <ul>
                                    <li class="bold title">(3)	Printer</li>
                                    <li class="desc">laser, ink jet</li>
                                </ul>
                                <ul>
                                    <li class="bold title"></li>
                                    <li class="desc">
                                        <p></p>
                                        <p></p>
                                        <p></p>
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