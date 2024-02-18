@extends('navbar')
@section('content') 
    
 <!--slider-->
 <div class="slider contact" style="background: url(https://res.cloudinary.com/precious24/image/upload/f_auto,q_auto/v1600731118/about.png); background-size: cover;
background-position: center;
background-repeat: no-repeat; ">
        <div class="info contact">
            <div class="fleq">
                <h1> About Us</h1>

                <ul>
                    <li><a href="/"> Adegbat & Sons Enterprise ></a></li>
                    <li><a href="/">Home ></a></li>
                    <li>About Us</li>
                </ul>
            </div>

        </div>
    </div>
    <main class="mainC">
        <section class="inf abt">
            <h3>We deliver Quality and timely Solutions at whatever cost to get the Job done</h3>
            <p><span style="color: #40005e"><b>Adegbat and Sons Enterprises </b></span>is built on strong values such as
                trust, integrity and excellence.
                Our focus
                primarily is to create quality services in the area of back up solutions and infrastructural
                development. It is our mission that every customer we serve get the best at whatever cost.
            </p>
        </section>
        <section>
            <div class="jen">
                <div class="ogh">
                    <div class="ny">
                        <img src="{{asset('frontend/images/Rectangle 36.png')}}" alt="">
                    </div>
                    <div class="yb">
                        <h2> We have the best tools to attract the right results</h2>
                        <p>Our team is made of strong, dedicated people who focus on creating the best customer
                            experience. We are group of professionals who are committed to solving problems.</p>

                    </div>
                </div>




                <div class="s">
                    <div class="nys">
                        <img src="{{asset('frontend/images/Rectangle 37.png')}}" alt="">
                    </div>
                    <div class="yb">
                        <h2> We conceive and translate our clients dreams into reality</h2>
                        <p>Since our inception, our objective has been to turn ideas into tangible projects capable of
                            competing against the highest quality standards at international levels.</p>

                    </div>
                </div>

            </div>

        </section>

        <section class="suceess">
            <h2>Success Stories</h2>
            <p>We are very proud of the service we provide and stand by every product we carry. Read our testimonials
                from our happy customers.</p>
            <div class="m">
                <div class="elements">
                    <h4>Victor Onyema</h4>
                    <small>Lagos, Nigeria</small>
                    <p>I Was Amazed The Professionalism Of The Services They Provide. We Want To Thank You For Your
                        Continued Outstanding Performance</p>
                    <img src="{{asset('frontend/images/stars.png')}}" alt="rating">
                </div>
                <div class="elements">
                    <h4>Tolu Adejumoke
                    </h4>
                    <small>Abuja, Nigeria</small>
                    <p>I'll Refer This Company To Anyone I Know. I Bought A Product From Their Store. The Performance
                        Has Been Seamless And They Provide Wonderful Customer Support</p>
                    <img src="{{asset('frontend/images/stars.png')}}" alt="rating">
                </div>
                <div class="elements">
                    <h4>Ola Kayode
                    </h4>
                    <small>Lagos, Nigeria</small>
                    <p>Adegbat Have Helped The Pace Of Our Deliveries. Although, I Was Skpetical About Trying A New
                        Service. This Have Proven To Be Worth It</p>
                    <img src="{{asset('frontend/images/stars.png')}}" alt="rating">
                </div>
            </div>

        </section>

        <div class="intere">
            <h2> Interested? Let's get in touch!
            </h2>
            <p>Get Answers And Advice From People You Want It From. Adegbat And Sons Enterprise Will Help You Maintain
                Your Backup Power Solutions Effectively.</p>

            <button type="submit"> <a href="/contact">Get Started</a></button>
        </div>
    </main>


@endsection