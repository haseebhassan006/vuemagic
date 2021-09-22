
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet" >
    <link href="{{asset('frontend/assets/slick-slider/slick/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/slick-slider/slick/slick.css')}}" rel="stylesheet">
    <title>American Direct Lender</title>
  </head>
  <body>

    @component('layouts.frontend.components.header')

    @endcomponent
    <!-- Main Content -->
    <main class="main-content">

        @yield('content')
  </main>
  <!-- Main Content -->
  <!-- Footer -->
  <footer class="foot">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="footer1">
            <img src="frontend/assets/images/logo.png">
            <p>Knowing how to get a mortgage can help you stay organized during the home buying process. Learn how to navigate the process of getting a mortgage, step by step.</p>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-4">
              <div class="footer2">
                <h3 class="footer-heading">Site Map</h3>
                <ul>
                  <li><a class="footer-menu" href="#">Terms & Conditions</a></li>
                  <li><a class="footer-menu" href="#">Privacy Policy</a></li>
                  <li><a class="footer-menu" href="#">Faq’s</a></li>
                  <li><a class="footer-menu" href="#">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="footer3">
                <h3 class="footer-heading">Quick Links</h3>
                <ul>
                  <li><a class="footer-menu" href="#">Home</a></li>
                  <li><a class="footer-menu" href="#">Refinance</a></li>
                  <li><a class="footer-menu" href="#">Rate</a></li>
                  <li><a class="footer-menu" href="#">Learning Center</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="footer4">
                <h3 class="footer-heading">Contact Info</h3>
                <ul>
                  <li><a class="footer-menu" href="#"><img src="frontend/assets/images/Group 73.png">123-456-7890</a></li>
                  <li><a class="footer-menu" href="#"><img src="frontend/assets/images/Group 72.png">Info@company.com</a></li>
                  <li><a class="footer-menu" href="#"><img src="frontend/assets/images/Group 74.png">123 Street Lorem Ipsum Usa</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="copy">
              <p>American Direct Lender © Copyrights 2020 All Rights Reserved</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="privacy">
              <p>Privacy & Policy</p>
              <p>Terms Of Service</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </footer>
  <!-- Footer -->
  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('frontend/assets/slick-slider/slick/slick.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/custom.js')}}"></script>
  <!-- Scripts -->
</body>
</html>
