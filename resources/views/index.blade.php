@extends('navbar')
@section('content')

 <!--slider-->
 <div class="slider" style="background: url(https://res.cloudinary.com/precious24/image/upload/f_auto,q_auto/v1600730821/a.png);background-size: cover;
    background-position: center;
    background-repeat: no-repeat; ">
        <div class="info">
            <h1> Fast and affordable repair services</h1>
            <p>We strive to meet the needs of our customers and provide you with quick and timely services</p>
            <button>
                <a href="tel:08128962116">Call Now</a>
            </button>
        </div>
    </div>
    <!--main-->
    <main>
    
        <section class="quote">
            
            <h3 class="yes">Request a Quote</h3>
<!-- Form Setting starting here -->

            <form method="POST" action="{{ route('appointmentInsert') }}" data-netlify="true">
                
            

                @csrf
                <h3 class="ys">Request a Quote</h3>
                <input type="text" name="name" placeholder="Name" required>
                <input type="tel" name="tel" placeholder="Phone Number" required>
                <input type="email" name="email" placeholder="Email" required>
                <button type="submit"> Submit </button>

                
                
                

            </form>
            

            

        </section>
        @if(Session::has("success"))
        <div class="alert alert-success bg-light">
            <h3 class="text-success" style="background: yellow; text-align : center;">{{Session::get("success")}}</h3>
        </div>
        @endif
        <section class="more-info">
            <div class="who-we">
                <h2> Who We Are</h2>
                <p><span style="color: #40005e"><b>Adegbat and Sons Enterprises </b></span> is an Information Technology
                    Support Solutions Company formed with the
                    goal of
                    redefining service delivery and adding value to clients’ infrastructure. We provide fast, reliable
                    and excellent services to customers that speaks for itself. </p>
            </div>
            <div class="company-logo">
                <img src="frontend/images/company-logo.png" alt="Adegbat">
            </div>

        </section>
        <!--doing-->
        <section class="doing">
            <h2>What We Do</h2>
            <hr>
            <div class="prev"><img src="{{ asset('frontend/images/prev.png') }}" alt=""></div>
            <div class="next"><img src="{{ asset('frontend/images/next.png') }}" alt=""></div>
            <div class="slick">




                <div class="do">
                    <img src="{{ asset('frontend/images/solar.png') }}" alt="solar">
                    <button>Solar Panel Procurement and Installation</button>
                </div>

                <div class="do">
                    <img src="{{ asset('frontend/images/Rectangle 46.png') }}" alt="solar">
                    <button>house/office wiring</button>
                </div>


                <div class="do">
                    <img src="{{ asset('frontend/images/ups.png') }}" alt="ups">
                    <button>UPS Repair and Installation</button>
                </div>
                <div class="do">
                    <img src="{{ asset('frontend/images/acess.png') }}" alt="solar">
                    <button>access control doors</button>
                </div>
                <div class="do">
                    <img src="{{ asset('frontend/images/image 4-3.png') }}" alt="ups">
                    <button>CCTV Installation</button>
                </div>
                <div class="do">
                    <img src="{{ asset('frontend/images/gatii.jpg') }}" alt="gate">
                    <button>Gate Automation</button>
                </div>


            </div>

            <!--more-->
            <div class="more">
                <h4> Apart from these, we are also consult for the following services;</h4>
                <div class="fle">
                    <ul>
                        <li>Electrical Street Light</li>
                        <li>Fire Protection System</li>
                    </ul>
                    <ul>
                        <li>Building of Phase Panel</li>
                        <li>construction of fancy bulgaries</li>
                    </ul>
                </div>

            </div>
        </section>
        <!--mission-value-->
        <div class="value" style="background: url(frontend/images/vlue.png);">
            <blockquote> We deliver Quality and timely Solutions at whatever cost to get the Job done</blockquote>
        </div>
        <!--products-->
        <section class="products">
            <h2 class="h2">Products</h2>
            <hr>

            <p>We provide Strong and Reliable products always</p>
            <div class="pro">
                <div class="prod">
                    <div class="don">
                        <img src="{{ asset('frontend/images/Batteries 3.png') }}" alt="ups">
                        <button>Batteries</button>
                    </div>
                    <div class="don">
                        <img src="{{ asset('frontend/images/3 4.png') }}" alt="ups">
                        <button>UPS</button>
                    </div>
                    <div class="don">
                        <img src="{{ asset('frontend/images/inverters.jpg') }}" alt="inverters">
                        <button>Inverter</button>
                    </div>
                </div>

            </div>
            <div class="prods">
                <a href="/products">View all Products</a>
            </div>

        </section>
        <!--client review-->
        <section class="testimonials">
            <h2 class="h2">Client Reviews</h2>
            <hr>
            <p> Look through some of our reviews below and let our customers assure you that we are the best at
                what we do.</p>

            <div class="x">
                <div class="elements">
                    <h4>Victor Onyema</h4>
                    <small>Lagos, Nigeria</small>
                    <p>I was amazed the professionalism of the services they provide. We want to thank you for your
                        continued outstanding performance</p>
                    <img src="{{ asset('frontend/images/stars.png') }}" alt="rating">
                </div>
                <div class="elements">
                    <h4>Tolu Adejumoke
                    </h4>
                    <small>Abuja, Nigeria</small>
                    <p>I'll refer this company to anyone I know. I bought a product from their store. The performance
                        has been seamless and They provide wonderful customer support</p>
                    <img src="{{ asset('frontend/images/stars.png') }}" alt="rating">
                </div>
                <div class="elements">
                    <h4>Precious Cole
                    </h4>
                    <small>Lagos, Nigeria</small>
                    <p>I like that you value your customer a lot. I must say your services are one of a kind. Everyone
                        should have this. </p>
                    <img src="{{ asset('frontend/images/stars.png') }}" alt="rating">
                </div>
                <div class="elements">
                    <h4>Imoh Jackson
                    </h4>
                    <small>Lagos, Nigeria</small>
                    <p>I'll define your service in three words; Fast, Effective and Solution Oriented. You always get to
                        the bottom of the problem. Thank you </p>
                    <img src="{{ asset('frontend/images/stars.png') }}" alt="rating">
                </div>
                <div class="elements">
                    <h4>Samuel Adeolu
                    </h4>
                    <small>Lagos, Nigeria</small>
                    <p> My company needed to fix their Power BackUp Systems which has been a lingerung issue for a
                        while. I reached out to the company and it has been a smooth sail ever since</p>
                    <img src="{{ asset('frontend/images/stars.png') }}" alt="rating">
                </div>
                <div class="elements">
                    <h4>Ola Kayole
                    </h4>
                    <small>Lagos, Nigeria</small>
                    <p>Adegbat & Sons Enterprises have helped the pace of our deliveries. Although, I was skpetical
                        about trying a new
                        service. This have proven to be worth it</p>
                    <img src="{{ asset('frontend/images/stars.png') }}" alt="rating">
                </div>
            </div>

        </section>
        <!--work together-->
        <section class="work">
            <h2>Want to work together?</h2>
            <div class="fi">
                <p> Get answers and advice from people you want it from. Adegbat and Sons Enterprise will help you
                    maintain your backup power solutions effectively.</p>
                <button>
                    <a href="tel:08128962116"> Contact Us</a>
                </button>
            </div>
        </section>
    </main>
    <!--get in touchn with map-->
    <div class="cal" style="background: url(frontend/images/a.png);background-size: cover;
    background-position: center;
    background-repeat: no-repeat; ">
        <div class="i">
            <div class="h">
                <h2> Get in Touch</h2>
                <hr>
                <form action="POST" data-netlify="true">
                    <input type="text" name="name" placeholder="name" required>
                    <input type="tel" name="Phone Number" placeholder="Phone Number" required>
                    <textarea type="text" name="message" required>  Enter your message here....</textarea> >
                    <button type="submit"> Send Message </button>
                </form>
            </div>
            <div class="map">
                <img src="{{ asset('frontend/images/Rectangle 40.png') }}" alt="map">
            </div>
        </div>

    </div>
@endsection