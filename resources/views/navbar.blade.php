
<!DOCTYPE html>
<html lang="en">

<head>
    <!--meta names -->
    <meta name="keywords" content="Adegbat, 600-1600 kVA Uninterruptible Power Supplies, Makelsan, UPS, Inverter, Stabilizers, Solar, Nigeria, lagos, Abuja, Power, Westafrica, batteries">
	<meta name="description" content="Adegbat and Sons Enterprises, Sells UPS of all brands, Makesan, APC, Tescom, We repair and Supply Inverters, Stabilizers, Batteries, and Power Supplies at your service with tailored power solutions. ">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Adegbat, ups, inverter, solar, experience, APC, Makelsan, Tescom.">
	 <meta name="author" content="Precious Ogoru">
    
    <title>Welcome to Adegbat & Sons Limited</title>

    <!--styles-->
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css')}}" />


    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick-theme.css')}}">


    <!--jquery script-->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <style>
        #myBtn {

            bottom: 40px;
            right: -50px;
            text-decoration: none;
            background: #fff;
            display: none;
            position: fixed;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            font-weight: bolder;
            border: none;
            outline: none;
            color: #40005e;
            cursor: pointer;

            width: 50px;
            height: 50px;
            border-radius: 100%;
            -webkit-transition: all 250ms ease-in-out;
            -moz-transition: all 250ms ease-in-out;
            -o-transition: all 250ms ease-in-out;
            transition: all 250ms ease-in-out;
            box-shadow: 0px 0px 27px 0px rgba(0, 0, 0, 0.045);
        }

        #myBtn:hover {
            background-color: #555;
            color: #fff;
        }
    </style>

</head>

<body>

    <div class="nav-wrapper">

        <nav class="navbar">
            <img src="{{asset('frontend/images/adegbat.png')}}" alt="Company Logo">
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="nav no-search">
                <li class="nav-item"><a href="/">Home</a></li>
                <li class="nav-item"><a href="/about">About</a></li>
                <li class="nav-item"><a href="/product">products</a></li>
                <li class="nav-item"><a href="/services">services</a></li>
                <button class="nav-item "><a href="/contact" class="b">Contact Us</a></button>
                @auth
              <!-- Display user's name and logout link when logged in -->
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
              </li>
            @else
              <!-- Display login and register links when not logged in -->
              <li class="nav-item" id="login"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
            @endauth
            </ul>
        </nav>
    </div>
    </div>

  <div class="container-fluid">
    @yield('content')
  </div>

  <!--footer-->
  <footer>
        <div class="footer">
            <div class="j">
                <div class="jk">
                    <img src="{{asset('frontend/images/logo.png')}}" alt="adegbat">
                    <p> Adegbat & Sons Enterprise provides fast, reliable
                        and excellent services to customers that speaks for itself..</p>

                </div>
                <ul>
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li> <a href="about.html">About Us</a></li>
                        <li><a href="products.html"></a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>


                </ul>

                <ul>
                    <h4> Products </h4>
                    <li>UPS</li>
                    <li> Stabilizers</li>
                    <li> Inverters</li>
                    <li> Phase Panel</li>
                </ul>
                <ul>
                    <h4>Services</h4>
                    <li> UPS Repair and Installation</li>
                    <li> Solar Panel Installation</li>
                    <li> Fire Protection System</li>
                    <li>Installation of Inverter and Stabilizer
                    </li>
                    <li> More Service...</li>
                </ul>

            </div>

        </div>
        ​<button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
	    <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="100432801741548"
  theme_color="#7646ff"
  logged_in_greeting="Hi! How can we help you?"
  logged_out_greeting="Hi! How can we help you?">
      </div>


    </footer>


    <!--jquery cdn-->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!--script for slick js-->
    <script src="{{ asset('frontend/js/slick.js')}}" type="text/javascript" charset="utf-8"></script>

    <!--local js-->
    <script src="{{ asset('frontend/js/script.js')}}"></script>

    <script type="text/javascript">

    </script>
</body>

</html>

<script src="{{ asset('frontend/js/main.js')}}"></script>


