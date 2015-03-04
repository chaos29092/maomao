@extends('master_side')

@section('title')
    ZENO - contact
@stop
@section('keywords')
    contact us
@stop
@section('description')
    contact us
@stop

@section('side_content')
    <div class="col2">
        <div class="contact">
            <h3 class="heading colr">Get in Touch</h3>
            <div class="mapsec">
                <h6 class="colr">Schdule a visit</h6>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus,
                </p>
                <div class="clear"></div>
                <br />
                <p>
                    <span class="bold">P:</span> 123-040-536<br />
                    <span class="bold">C:</span> 123-040-536<br />
                    <span class="bold">E:</span> info@website.com<br />
                </p>
                <div class="map">
                    <iframe width="300" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=london&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;t=h&amp;z=14&amp;ll=51.500152,-0.126236&amp;output=embed"></iframe><br /><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=london&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;t=h&amp;z=14&amp;ll=51.500152,-0.126236" class="enlarg">VIEW MAP</a><div class="clear"></div>
                </div>
            </div>
            <div class="contact_form">
                <h6 class="colr">Please Fill Your Inquiry</h6>
                {{ Form::open(array('url' => 'mailPost', 'class' => 'form-horizontal', 'role' => 'form' )) }}
                <ul>
                    <li>
                        <input type="text" name="contactname" id="contactname" placeholder="Your name" class="bar required" />
                    </li>
                    <li>
                        <input type="text" name="email" id="email" placeholder="Your email address" class="bar required email" />
                    </li>
                    <li>
                        <input type="text" name="product"  placeholder="Product name" id="product" class="required bar" />
                    </li>
                    <li>
                        <input type="text" name="country" placeholder="Country(optional)" id="product" class="bar" />
                    </li>
                    <li>
                        <input type="text" placeholder="Phone number(optional)" name="phone" id="phone" class="bar" />
                    </li>
                    <li>
                        <textarea id="message" name="mes"  placeholder="Message" cols="50" rows="5" class="required"></textarea>
                    </li>
                    <li>
                        {{ Form::submit(Lang::get('page.send'), array('class' => 'simplebtn')) }}
                    </li>
                </ul>
                {{ Form::close() }}
            </div>

        </div>
    </div>
@stop