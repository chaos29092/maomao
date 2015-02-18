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
        <h4 class="heading colr">彩色laptop</h4>
        <!-- Product Detail -->
        <div class="prod_detail">
            <div class="big_thumb">
                <div id="slider2">
                    <div class="contentdiv">
                        <img src="{{asset('images\products\colorlaptop\colorlaptop_detail_1.jpg')}}" alt="" />
                        <a rel="example_group" href="{{asset('images\products\colorlaptop\colorlaptop_1.jpg')}}" title="" class="zoom">&nbsp;</a>
                    </div>
                    <div class="contentdiv">
                        <img src="{{asset('images\products\colorlaptop\colorlaptop_detail_2.jpg')}}" alt="" />
                        <a rel="example_group" href="{{asset('images\products\colorlaptop\colorlaptop_2.jpg')}}" title="" class="zoom">&nbsp;</a>
                    </div>
                    <div class="contentdiv">
                        <img src="{{asset('images\products\colorlaptop\colorlaptop_detail_3.jpg')}}" alt="" />
                        <a rel="example_group" href="{{asset('images\products\colorlaptop\colorlaptop_3.jpg')}}" title="" class="zoom">&nbsp;</a>
                    </div>

                </div>
                <a href="javascript:void(null)" class="prev"><img src="{{asset('images/prev.gif')}}" alt="" /></a>
                <div style="float:left; width:189px !important; overflow:hidden;">
                    <div class="anyClass" id="paginate-slider2">
                        <ul>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\colorlaptop\colorlaptop_detail_small_1.jpg')}}" alt="" /></a></li>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\colorlaptop\colorlaptop_detail_small_2.jpg')}}" alt="" /></a></li>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\colorlaptop\colorlaptop_detail_small_3.jpg')}}" alt="" /></a></li>
                        </ul>
                    </div>
                </div>
                <a href="javascript:void(null)" class="next"><img src="{{asset('images/next.gif')}}" alt="" /></a>
                <script type="text/javascript" src="{{asset('js/cont_slidr.js')}}"></script>
            </div>
            <div class="desc">
                <h2>彩色laptop</h2>
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
                            <p class="des">Color Doppler Ultrasound System is a very high cost-effective  device, for it with good image, powerful functions
                                and also pretty appearance, but price is inexpensive.
                                It with a large volume hardisk so can store many image and video, and can make a detail report directly
                                not need connect to computer and make on computer, and can work with general ink or laser printer
                                so the printer cost is low.
                                We believe you will like it, and it can bring benifits to your work.</p>
                            <br/>
                            <p class="des">1.CFM, PDI, DPDI, PWD, Duplex, Triplex, HPRF, THI;</p>
                            <p class="des">2.High definition image;</p>
                            <p class="des">3.Very thin, light and pretty;</p>
                            <p class="des">4.15 inch LED Screen;</p>
                            <p class="des">5.Built-in Battery;</p>
                            <p class="des">6.3D imaging(option);</p>
                            <p class="des">7.Abundant functions, Multilingual;</p>
                            <p class="des">8.Hardisk, USB storage;</p>
                            <br/>
                            <img src="{{asset('images\products\colorlaptop\colorlaptop_d_1.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\colorlaptop\colorlaptop_d_2.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\colorlaptop\colorlaptop_d_3.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\colorlaptop\colorlaptop_d_4.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\colorlaptop\colorlaptop_d_5.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\colorlaptop\colorlaptop_d_6.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\colorlaptop\colorlaptop_d_7.jpg')}}" alt=""/>
                        </div>
                        <!-- END -->



                        <!-- Recent Comments -->
                        <div id="tab_sidebar_comments" class="tab_sidebar_list">
                            <div class="aditional_info">
                                <ul>
                                    <li class="bold title">Imaging Modes</li>
                                    <li class="desc">
                                        <p>B, B|B, 4B, B|M, M</p>
                                        <p>彩色多普勒 (CFM)</p>
                                        <p>能量多普勒 (PDI)</p>
                                        <p>方向能量多普勒 (DPDI)</p>
                                        <p>脉冲波多普勒 (PWD)</p>
                                        <p>B+PWD (Duplex)</p>
                                        <p>B+CFM/PDI/DPDI+PWD (Triplex)</p>
                                        <p>高脉冲重复频率 (HPRF)</p>
                                        <p>谐波成像 (THI)</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">扫查模式</li>
                                    <li class="desc">电子线阵、凸阵、微凸阵，扫查深度: 2-24cm</li>
                                </ul>
                                <ul>
                                    <li class="bold title">彩色多普勒</li>
                                    <li class="desc">
                                        <p>脉冲重复频率变量范围: 0.5-9 kHz</p>
                                        <p>壁滤波设置: 3 阶(5%, %10%, 15% PRF)</p>
                                        <p>线性转换角度: ±10°</p>
                                        <p>实时滤波器: 4种</p>
                                        <p>CFM颜色>10 种</p>
                                        <p>PDI 颜色>10 种</p>
                                        <p>B型/彩色优先级控制</p>
                                        <p>彩色阈值控制</p>
                                        <p>CFM 基线控制</p>
                                        <p>多普勒频率选择</p>
                                        <p>彩色帧频相关</p>
                                        <p>透明颜色映射 (TCM)</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">脉冲波多普勒</li>
                                    <li class="desc">
                                        <p>PRF变量: 1-10 kHz</p>
                                        <p>壁滤波设置: 16 阶 (2.5%-20% PRF)</p>
                                        <p>线性转换角度: ±10°</p>
                                        <p>自动计算光谱参数实时轨迹线</p>
                                        <p>音量控制</p>
                                        <p>PWD颜色>10 种</p>
                                        <p>多普勒频率选择</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">图像处理</li>
                                    <li class="desc">
                                        <p>高线密度扫查，分辨率更高</p>
                                        <p>8段TGC控制</p>
                                        <p>动态范围>120 dB</p>
                                        <p>总增益控制</p>
                                        <p>M 模式扫描速度控制</p>
                                        <p>自动功率控制</p>
                                        <p>帧相关调节</p>
                                        <p>亮度、对比度调节</p>
                                        <p>图像灰度控制</p>
                                        <p>图像左右翻转、旋转、上下翻转</p>
                                        <p>正负相显示</p>
                                        <p>边缘增强</p>
                                        <p>噪声抑制</p>
                                        <p>斑点减少调节</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">图像和视频格式</li>
                                    <li class="desc">AVI, JPG, BMP, PNG, TIF, DCM (DICOM)</li>
                                </ul>
                                <ul>
                                    <li class="bold title">常规和专用计测</li>
                                    <li class="desc">距离, 长度, 面积, 周长, 体积, 角度, 狭窄比(%), A/B比例, 速率, 压力梯度(PG), 加速度, 阻力指数 (RI), 心率, 速率时间积分等 (VTI)等</li>
                                </ul>
                                <ul>
                                    <li class="bold title">计测软件包</li>
                                    <li class="desc">妇产、腹部、泌尿、内分泌、血管、心脏等</li>
                                </ul>
                                <ul>
                                    <li class="bold title">接口</li>
                                    <li class="desc">
                                        <p>VGA, TV视频输出接口</p>
                                        <p>USB2.0接口</p>
                                        <p>RJ-45 网络接口</p>
                                        <p>支持喷墨、激光、视频打印机</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="bold title">Standard Configuration</li>
                                    <li class="desc">Host 1 unit; Convex probe 1 pcs; Lienar or Trans-vaginal probe 1 pcs</li>
                                </ul>
                                <ul>
                                    <li class="bold title">Optional</li>
                                    <li class="desc">Linear, Trans-vaginal, Micro-convex, Rectal probe; 3D imaging software; Bag; Trolley; Laser Printer; Video Printer </li>
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