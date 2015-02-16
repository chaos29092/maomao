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
                <h6 class="colr">Send us a Message</h6>
                <ul>
                    <li>
                        <input type="text" value="Name" name="contactname" id="contactname" onblur="if(this.value == '') { this.value = 'Name'; }" onfocus="if(this.value == 'Name') { this.value = ''; }" class="bar required" />
                    </li>
                    <li>
                        <input type="text" value="Email Adress" name="email" id="email" onblur="if(this.value == '') { this.value = 'Email Adress'; }" onfocus="if(this.value == 'Email Adress') { this.value = ''; }" class="bar required email" />
                    </li>
                    <li>
                        <input type="text" value="Subject" name="subject" onblur="if(this.value == '') { this.value = 'Subject'; }" onfocus="if(this.value == 'Subject') { this.value = ''; }" id="subject" class="required bar" />
                    </li>
                    <li>
                        <textarea id="message" name="message" onblur="if(this.value == '') { this.value = 'Message'; }" onfocus="if(this.value == 'Message') { this.value = ''; }" cols="50" rows="5" class="required"></textarea>
                    </li>
                    <li>
                        <a href="#" class="simplebtn">Submit</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@stop