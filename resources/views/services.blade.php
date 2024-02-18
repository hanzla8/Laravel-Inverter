@extends('navbar')
@section('content') 
 <!--slider-->
 <div class="slider contact" style="background: url(https://res.cloudinary.com/precious24/image/upload/v1600731616/services.png);background-size: cover;
background-position: center;
background-repeat: no-repeat; ">
        <div class="info contact">
            <div class="fleq">
                <h1> Services</h1>

                <ul>
                    <li><a href="index.html"> Adegbat & Sons Enterprise ></a></li>
                    <li><a href="index.html">Home ></a></li>
                    <li>Services</li>
                </ul>
            </div>

        </div>
    </div>
    <main class="mainC">
        <section class="services">
            <nav>
                <ul>
                    <li><a href="#UPS">UPS, Inverter Repair and Installation</a></li>
                    <li><a href="#Solar "> Solar Panel Installation</a></li>
                    <li><a href="#Access">access control doors</a></li>
                    <li><a href="#Gate">Gate Automation and construction</a></li>
                    <li><a href="#house"> house wiring</a></li>
                    <li><a href="#cctv"> CCTV Cameras</a></li>
                </ul>
            </nav>

        </section>
        <section class="straight">
            <div class="request" id="UPS">
                <div class="req">
                    <h2>UPS, Inverter Repair and Installation</h2>
                    <p>We procure, install and repair a large range of UPS, Inverters as well as Stabilizers. </p>

                    <ul>
                        <li>- UPS Diagnostic</li>
                        <li>- Inverters/Stabilzers Repair</li>
                        <li>- Battery Replacement
                        <li>
                    </ul>
                    <!-- <button id="modal-btn5">Request quote</button> -->
                </div>
                <div>
                    <img src="{{ asset('frontend/images/ups.png') }}" alt="ups">
                </div>
            </div>
            <div class="request rev" id="Solar">
                <div class="req">
                    <h2>solar panel Procurement and Installation</h2>
                    <p>We specialize in solar power system repair, washing solar panels, emergency repair, clean and
                        install service. Our mission is to help you stay energy ... </p>

                    <ul>
                        <li>- Solar Roof Leaking Repair</li>
                        <li>- Emergency Repair</li>
                        <li>- Panel Washing
                        </li>
                    </ul>
                    <!-- <button id="modal-btn4">Request quote</button> -->
                </div>
                <div>
                    <img src="{{ asset('frontend/images/solar.png') }}" alt="ups">
                </div>
            </div>

            <!--access doors-->
            <div class="request">
                <div class="req" id="Access">
                    <h2>Access Control Doors</h2>
                    <p>We can assist with any type of access control system you need: Remote Transmitters for Doors and
                        Gates. Magnetic Locks. Keypad Controls. </p>

                    <ul>
                        <li> - Proximity Readers</li>
                        <li> - Card Readers & Key Fobs</li>
                        <li> - Automatic Timed Locking</li>
                    </ul>
                    <!-- <button id="modal-btn3">Request quote</button> -->
                </div>
                <div>
                    <img src="{{ asset('frontend/images/image 3.png') }}" alt="access doors">
                </div>
            </div>

            <!--data and construction-->

            <div class="request rev">
                <div class="req" id="Gate">
                    <h2>Gate Automation and construction services</h2>
                    <p>We have swing and sliding gates, boom gates and pedestrian access suitable for all domestic,
                        commercial and industrial use </p>

                    <ul>
                        <li>- Swing Gates</li>
                        <li>- Sliding gates</li>
                        <li>- Boom Gates</li>
                    </ul>
                    <!-- <button id="modal-btn2">Request quote</button> -->
                </div>
                <div>
                    <img src="{{ asset('frontend/images/gatii.jpg') }}" alt="ups">
                </div>
            </div>



            <!--cctv-->
            <div class="request">
                <div class="req" id="house">
                    <h2>cCTV Cameras Installation</h2>
                    <p>Our services include assistance with your layout and security installation plan. From network
                        infrastructure to proper camera positioning. </p>

                    <ul>
                        <li>- Technical Support</li>
                        <li>- Installation Services</li>
                        <li>- Security Planning and Layout Assistance</li>
                    </ul>
                    <!--modal.1-->
                    <!-- <button id="modal-btn1">Request quote</button> -->


                </div>


                <div>
                    <img src="{{ asset('frontend/images/image 4-3.png') }}" alt="ups">
                </div>
            </div>

            <!--office/button-->
            <div class="request rev">
                <div id="cctv" class="req">
                    <h2>Office/House wiring</h2>
                    <p>We specialize in comprehensive electrical wiring services for every aspect of your home or office
                    </p>

                    <ul>
                        <li>- Residential Electrical Wiring</li>
                        <li>- Commercial Electrical Wiring</li>
                        <li>- Repair Services</li>
                    </ul>
                    <!--modal 1-->
                    <!-- <button id="modal-btn" class="button">Request quote</button> -->


                </div>
                <div>
                    <img src="{{ asset('frontend/images/Rectangle 46.png') }}" alt="ups">
                </div>
            </div>

            </div>
        </section>
    </main>
    <div id="my-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Request Quote</h2>
            </div>
            <div class="modal-body">

                <form action="POST" data-netlify="true">
                    <div class="form-control">
                        <label>Name</label>
                        <input type="text" name="Name" id="name" placeholder="Full Name" required>
                    </div>
                    <div class="form-control">
                        <label>Email</label>
                        <input type="email" name="Email" id="name" placeholder="Email" required>
                    </div>
                    <div class="form-control">
                        <label>Product/Service Required</label>
                        <input type="text" name="Product Required" placeholder="E.G: I need an Inverter " required>
                    </div>
                    <div class="form-control">
                        <label>Additional Info <span>(Optional)</span></label>
                        <textarea name="message" placeholder="Enter Message"> </textarea>
                    </div>
                    <div class="form-control">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <img src="{{ asset('frontend/images/company-logo.png') }}" alt="adegbatCompanyLogo">
            </div>
        </div>
    </div>




  @endsection