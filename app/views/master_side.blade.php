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
                        <h5 class="colr">Categories</h5>
                    </div>
                    <div class="arrowlistmenu">
                        <a class="menuheader expandable">Men’s Watches</a>
                        <ul class="categoryitems">
                            <li><a href="#">Tissot</a></li>
                            <li><a href="#" class="subexpandable">Rolex</a>
                                <ul class="subcategoryitems">
                                    <li><a href="#">Citizen</a></li>
                                    <li><a href="#">Casio</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Citizen</a></li>
                            <li><a href="#">Casio</a></li>
                        </ul>
                        <a class="menuheader expandable">Assesories</a>
                        <ul class="categoryitems">
                            <li><a href="#">Tissot</a></li>
                            <li><a href="#" class="subexpandable">Rolex</a>
                                <ul class="subcategoryitems">
                                    <li><a href="#">Citizen</a></li>
                                    <li><a href="#">Casio</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Citizen</a></li>
                            <li><a href="#">Casio</a></li>
                        </ul>
                        <a class="menuheader expandable">Women’s Watches</a>
                        <ul class="categoryitems">
                            <li><a href="#">Tissot</a></li>
                            <li><a href="#" class="subexpandable">Rolex</a>
                                <ul class="subcategoryitems">
                                    <li><a href="#">Citizen</a></li>
                                    <li><a href="#">Casio</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Citizen</a></li>
                            <li><a href="#">Casio</a></li>
                        </ul>
                        <a class="menuheader expandable">Sports Watches</a>
                        <ul class="categoryitems">
                            <li><a href="#">Tissot</a></li>
                            <li><a href="#" class="subexpandable">Rolex</a>
                                <ul class="subcategoryitems">
                                    <li><a href="#">Citizen</a></li>
                                    <li><a href="#">Casio</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Citizen</a></li>
                            <li><a href="#">Casio</a></li>
                        </ul>
                        <a class="menuheader expandable">Casual watches</a>
                        <ul class="categoryitems">
                            <li><a href="#">Tissot</a></li>
                            <li><a href="#" class="subexpandable">Rolex</a>
                                <ul class="subcategoryitems">
                                    <li><a href="#">Citizen</a></li>
                                    <li><a href="#">Casio</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Citizen</a></li>
                            <li><a href="#">Casio</a></li>
                        </ul>
                        <a class="menuheader expandable">Wedding Watches</a>
                        <ul class="categoryitems">
                            <li><a href="#">Tissot</a></li>
                            <li><a href="#" class="subexpandable">Rolex</a>
                                <ul class="subcategoryitems">
                                    <li><a href="#">Citizen</a></li>
                                    <li><a href="#">Casio</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Citizen</a></li>
                            <li><a href="#">Casio</a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                    <div class="left_botm">&nbsp;</div>
                </div>
                <!-- My Cart Products -->
                <div class="mycart">
                    <div class="small_heading">
                        <h5 class="colr">My Cart</h5>
                        <div class="clear"></div>
                        <span class="veiwitems">(3) Items - <a href="cart.html" class="colr">View Cart</a></span>
                    </div>
                    <ul>
                        <li>
                            <p class="bold title">
                                <a href="detail.html">Apple Ipad Special Edition 3rd generation</a>
                            </p>
                            <div class="grey">
                                <p class="left">QTY: <span class="bold">3</span></p>
                                <p class="right">Price: <span class="bold">$200</span></p>
                            </div>
                        </li>
                        <li>
                            <p class="bold title">
                                <a href="detail.html">Apple Ipad Special Edition 3rd generation</a>
                            </p>
                            <div class="grey">
                                <p class="left">QTY: <span class="bold">3</span></p>
                                <p class="right">Price: <span class="bold">$200</span></p>
                            </div>
                        </li>
                        <li>
                            <p class="bold title">
                                <a href="detail.html">Apple Ipad Special Edition 3rd generation</a>
                            </p>
                            <div class="grey">
                                <p class="left">QTY: <span class="bold">3</span></p>
                                <p class="right">Price: <span class="bold">$200</span></p>
                            </div>
                        </li>
                    </ul>
                    <a href="#" class="simplebtn"><span>Checkout</span></a>
                </div>
                <div class="poll">
                    <div class="small_heading">
                        <h5 class="colr">Poll</h5>
                    </div>
                    <p>What is your favorite Magento feature?</p>
                    <ul>
                        <li><input name="layerd" type="radio" value="" /> Layered Navigation</li>
                        <li><input name="price" type="radio" value="" /> Price Rules</li>
                        <li><input name="category" type="radio" value="" /> Category Management</li>
                        <li><input name="compare" type="radio" value="" /> Compare Products</li>
                    </ul>
                    <a href="#" class="simplebtn">Vote</a>
                </div>
            </div>
            <!-- Column2 Section -->
            @yield('side_content')

            <div class="clear"></div>
            <div class="clear"></div>
        </div>
        <div class="cont_botm">&nbsp;</div>
    </div>

    <div class="clear"></div>
@stop