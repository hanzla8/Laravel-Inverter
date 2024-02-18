@extends('navbar')
@section('content') 

   <!--slider-->
   <div class="slider contact" style="background: url(https://res.cloudinary.com/precious24/image/upload/v1600731810/contact.png);background-size: cover;
background-position: center;
background-repeat: no-repeat; ">
        <div class="info contact">
            <div class="fleq">
                <h1> Contact Us</h1>

                <ul>
                    <li><a href="index.html"> Adegbat & Sons Enterprise ></a></li>
                    <li><a href="index.html">Home ></a></li>
                    <li>Contact Us</li>
                </ul>
            </div>

        </div>
    </div>
    <main class="mainC">
        <section class="inf">
            <h2>Let's start a project together.</h2>
            <p>After we receive your request, our engagement manager will contact you to clarify the details and arrange
                a meeting within one business day. Please Fill out the form below and let us know right away in which
                direction it should go. </p>
        </section>
        <section class="media">
            <div class="chat">
                <img src="{{ asset('frontend/images/Vector-1.png') }}" alt="">
                <h4>Chat with us</h4>
                <p>Whatsapp: <a href="tel:08128962116" style="text-decoration: none; color: #777"> +2348128962116</a></p>
            </div>
            <div class="chat">
                <img src="{{ asset('frontend/images/Vector.png') }}" alt="">
                <h4>Phone Support</h4>
                <p>Customer Care: <a href="tel:08128962116" style="text-decoration: none; color: #777"> 08032119106</a></p>
            </div>
            <div class="chat">
                <img src="{{ asset('frontend/images/simple-line-icons_social-twitter.png') }}" alt="">
                <h4>We are Social</h4>
                <ul>
                    <li><a href="https://www.facebook.com/adegbatandsons/">Facebook</a></li>
                    <li><a href="https://www.linkedin.com/company/adegbat-and-sons-enterprises">Linkedin</a></li>

                </ul>
            </div>
        </section>
        <section class="cont">
            <div class="h contH">
                <h2> Contact</h2>

                <hr>
                @if(Session::has("success"))
                <div class="alert alert-success bg-light">
                    <h2 class="text-success" style="background : yellow;">{{Session::get("success")}}</h2>
                </div>
                @endif
                <hr>
                <p>Take a moment to fill out the form and we'll be in touch right away.</p>
                <form method="POST" action="{{route('contact')}}" data-netlify="true">
                    @csrf
                    <input type="text" name="name" placeholder="name" required>
                    <input type="number" name="number" placeholder="Phone Number" required>
                    <input type="text" name="location" placeholder="Location" required>
                    <textarea type="text" name="message" required>  Enter your message here....</textarea>
                    <button type="submit"> Send Message </button>
                </form>
            </div>
            <div class="map">
                <img src="{{ asset('frontend/images/Rectangle 40.png') }}" alt="map">
            </div>
        </section>

    </main>
+
@endsection