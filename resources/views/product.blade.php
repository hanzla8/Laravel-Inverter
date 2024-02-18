@extends('navbar')
@section('content') 

 <!--slider-->
 <div class="slider contact" style="background: url(https://res.cloudinary.com/precious24/image/upload/v1600731750/products.png);background-size: cover;
background-position: center;
background-repeat: no-repeat; ">
        <div class="info contact products">
            <div class="fleq">
                <h1> Products</h1>

                <ul>
                    <li><a href="/"> Adegbat & Sons Enterprise ></a></li>
                    <li><a href="/">Home ></a></li>
                    <li>Products</li>
                </ul>
            </div>

        </div>
    </div>
    <main class="mainC">
        <section class="proa">
            <h2>Shop</h2>
            <p>Our Products are strong, durable and reliable. purchase now and it will be delivered within 48 hours. if
                you have a Special request, fill the form on the <a href="/contact"> <b>Contact Page </b> </a> to
                Get Started.</p>
        </section>
        <section class="imgGr">
        @foreach ($data as $data)
            <div class="don grd">
                <img src="{{ asset('productimg/' . $data->image) }}"  alt="ups">

                <h2>{{$data->name}}</h2>
                <p style="text-align: center;">{{$data->description}}</p>
                <br><br><br><br><br>
                <button>Batteries</button>

            </div>
            @endforeach

            <!-- <div class="don grd">
                <img src="{{ asset('frontend/images/lion-plus-serisi-1000-2000-va 5.png') }}" alt=" solar">
                <button>Line Interactive UPS</button>
            </div> -->
            <!-- <div class="don grd">
                <img src="{{ asset('frontend/images/solar-panel.jpg') }}" alt="solar">
                <button>Solar Panels</button>
            </div>
            <div class="don grd">
                <img src="{{ asset('frontend/images/fire-equipment.jpg') }}" alt="ups">
                <button>Fire Equipments</button>
            </div>
            <div class="don grd">
                <img src="{{ asset('frontend/images/cctv-kit.jpg') }}" alt="solar">
                <button>CCTV Kits</button>
            </div>
            <div class="don grd">
                <img src="{{ asset('frontend/images/ups2.jpg') }}" alt=" solar">
                <button>Online UPS</button>
            </div>
            <div class="don grd">
                <img src="{{ asset('frontend/images/inverters.jpg') }}" alt="ups">
                <button>Inverters</button>
            </div>
            <div class="don grd">
                <img src="{{ asset('frontend/images/commercial-electric-ethernet-cables-bstc5-150-e1_1000.jpg') }}" alt="solar">
                <button>Cables</button>
            </div>
            <div class="don grd">
                <img src="{{ asset('frontend/images/D5-Evo+controller.png') }}" alt="solar">
                <button>D5 Automatic Motor Gate Machine</button>
            </div> -->
        </section>

    </main>
	
@endsection