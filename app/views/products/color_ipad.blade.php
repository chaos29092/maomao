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
        <h4 class="heading colr">彩色ipad</h4>
        <!-- Product Detail -->
        <div class="prod_detail">
            <div class="big_thumb">
                <div id="slider2">
                    <div class="contentdiv">
                        <img src="{{asset('images\products\coloripad\coloripad_detail_1.jpg')}}" alt="" />
                        <a rel="example_group" href="{{asset('images\products\coloripad\coloripad_1.jpg')}}" title="" class="zoom">&nbsp;</a>
                    </div>
                    <div class="contentdiv">
                        <img src="{{asset('images\products\coloripad\coloripad_detail_2.jpg')}}" alt="" />
                        <a rel="example_group" href="{{asset('images\products\coloripad\coloripad_2.jpg')}}" title="" class="zoom">&nbsp;</a>
                    </div>
                    <div class="contentdiv">
                        <img src="{{asset('images\products\coloripad\coloripad_detail_3.jpg')}}" alt="" />
                        <a rel="example_group" href="{{asset('images\products\coloripad\coloripad_3.jpg')}}" title="" class="zoom">&nbsp;</a>
                    </div>

                </div>
                <a href="javascript:void(null)" class="prev"><img src="{{asset('images/prev.gif')}}" alt="" /></a>
                <div style="float:left; width:189px !important; overflow:hidden;">
                    <div class="anyClass" id="paginate-slider2">
                        <ul>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\coloripad\coloripad_detail_small_1.jpg')}}" alt="" /></a></li>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\coloripad\coloripad_detail_small_2.jpg')}}" alt="" /></a></li>
                            <li><a href="#" class="toc"><img src="{{asset('images\products\coloripad\coloripad_detail_small_3.jpg')}}" alt="" /></a></li>
                        </ul>
                    </div>
                </div>
                <a href="javascript:void(null)" class="next"><img src="{{asset('images/next.gif')}}" alt="" /></a>
            </div>
            <div class="desc">
                <h2>彩色ipad</h2>
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
                            <p class="des">适合多种场合的便携式B超机。</p>
                            <br/>
                            <p class="des">1.22寸LED触摸屏;</p>
                            <p class="des">2.可配多种探头用于各种不同应用;</p>
                            <p class="des">3.可通过普通计算机键盘和鼠标控制，也可用专用超声键盘控制;</p>
                            <p class="des">4.除了常规应用也特别适用于手术室和救护车;</p>
                            <p class="des">5.大屏幕让患者也可以看到图像，更具安全感;</p>
                            <p class="des">6.高清晰、多种成像模式，包括支持心脏、血管、产科等的彩色多普勒成像;</p>
                            <p class="des">7.可选三维成像、宽景成像，便于更好观察检查部位;</p>
                            <p class="des">8.能够加装基于Windows操作系统的软件，便于图文管理和通讯;</p>
                            <p class="des">9.集成彩超、计算机于一体，可诊断、办公两用，节省空间，且可放于桌面也可壁挂;</p>
                            <p class="des">10.可通过网络远程升级和维护;</p>
                            <p class="des">11.可通过硬盘、U盘、光驱进行大容量图像和视频存储、读取、管理;</p>
                            <p class="des">12.成像模式：B, BB, M, B+CF B+PWD, CWD, DirPwr, Pwr;</p>
                            <p class="des">13.实时B/CD/PW三同步成像，可分别调节TGC增益;</p>
                            <p class="des">14.谐波成像可抑制斑点噪声、提升图像清晰度、图像质量;</p>
                            <p class="des">15.一键优化功能，简化图像调节操作;</p>
                            <p class="des">16.双探头插座;</p>
                            <br/>
                            <img src="{{asset('images\products\coloripad\coloripad_d_1.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\coloripad\coloripad_d_6.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\coloripad\coloripad_d_7.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\coloripad\coloripad_d_2.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\coloripad\coloripad_d_3.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\coloripad\coloripad_d_4.jpg')}}" alt=""/>
                            <br/><br/>
                            <img src="{{asset('images\products\coloripad\coloripad_d_5.jpg')}}" alt=""/>
                        </div>
                        <!-- END -->



                        <!-- Recent Comments -->
                        <div id="tab_sidebar_comments" class="tab_sidebar_list">
                            <div class="aditional_info">
                                <ul>
                                    <li class="bold title">成像模式</li>
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