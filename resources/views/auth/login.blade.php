<!-- Login Setup -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CodePen - Double Slider Sign in/up Form</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
  <link rel="stylesheet" href="{{ asset('loginCSS/style.css')}}">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="container" id="container">
    <div class="form-container sign-up-container">

      <!-- It is Your Registration Section -->
      <form method="POST" class="sign-up-form form" action="{{ route('register') }}">
        <h1>Create Account</h1>
        <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <span>or use your email for registration</span>

        @csrf
        <!-- Name -->
        <div>
          <x-text-input id="name" placeholder="Enter Name" type="text" name="name" :value="old('name')" required
            autofocus autocomplete="name" />
          <x-input-error :messages="$errors->get('name')" />
        </div>

        <!-- Email Address -->
        <div>
          <x-text-input id="email" placeholder="Enter Email" class="" type="email" name="email" :value="old('email')"
            required autocomplete="username" />
          <x-input-error :messages="$errors->get('email')" />
        </div>

        <!-- Password -->
        <div>

          <x-text-input id="password" placeholder="Enter Password" type="password" name="password" required
            autocomplete="new-password" />

          <x-input-error :messages="$errors->get('password')" />
        </div>

        <!-- Confirm Password -->
        <div>

          <x-text-input id="password_confirmation" placeholder="Confirm Password" class="" type="password"
            name="password_confirmation" required autocomplete="new-password" />

          <x-input-error :messages="$errors->get('password_confirmation')" />
        </div>

        <div>
          <x-primary-button class="ms-4 form-btn primary-default-btn transparent-btn">
            {{ __('Register') }}
          </x-primary-button>
        </div>
      </form>
    </div>



    <div class="form-container sign-in-container">
      <!-- It is your Login Section -->
      <form class="sign-up-form form" method="POST" action="{{ route('login') }}">
        <h1>Sign in</h1>
        <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <span>or use your account</span>
        @csrf

        <label class="form-label-wrapper">
          <div>
            <x-text-input class="form-input" id="email" placeholder="Enter Email" type="email" name="email"
              :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" />
          </div>
        </label>

        <label class="form-label-wrapper">
          <x-text-input class="form-input" id="password" placeholder="Enter Password" type="password" name="password"
            required autocomplete="current-password" />

          <x-input-error :messages="$errors->get('password')" />
        </label>

        <a class="link-info forget-link" href="##">Forgot your password?</a>
        
        <x-primary-button class="ms-3 form-btn primary-default-btn transparent-btn">
          {{ __('Log in') }}
        </x-primary-button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Welcome Back!</h1>
          <p>To keep connected with us please login with your personal info</p>
          <button class="ghost" id="signIn">Sign In</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Hello, Friend!</h1>
          <p>Enter your personal details and start journey with us</p>
          <button class="ghost" id="signUp">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
  <!-- partial -->
  <script src="{{ asset('loginCSS/script.js')}}"></script>

</body>

</html>