@extends('layouts.frontend.master')

@section('content')




<!-- Banner -->
<section class="re-banner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/assets/images/re.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h2>Refinancing</h2>
                  <p>Refinancing is often used to lower your interest rate on your property. If rates have dropped since you last financed your home, you may want to consider refinancing.</p>
                  <!-- <a href="#">Apply For Home Purchase</a> -->
                </div>
              </div>
              <!-- <div class="carousel-item">
                <img src="/assets/images/banner.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h2><span>Feeling good</span> about making a difference.</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                  <a href="#">Apply For Home Purchase</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/assets/images/banner.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h2><span>Feeling good</span> about making a difference.</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                  <a href="#">Apply For Home Purchase</a>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button> -->
          </div>
        </div>
      </div>
    <!--   <div class="social-links">
        <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>

          </ul>
      </div>

         <div class="num-links">
        <ul>
            <h3>GET IN TOUCH!</h3>
            <li><a href="#">012 - 3456 - 7890</a></li>
            <li><a href="#">info@lorem.com</a></li>

          </ul>
      </div>   -->
    </div>

  </section>
  <!-- Banner -->

  <!-- girls -->
  <section class="girls">
      <div class="container">
          <div class="row">
              <div class="col-lg-6">
                  <img src="/assets/images/TestimonialBlogPhoto.png" class="img-fluid">
              </div>

              <div class="col-lg-6">
                  <div class="girlstext">
                      <h2>Here Are Some Other Common Reasons To Refinance</h2>
                      <p>Paying Off A Balloon Payment.</p>
                      <p>Converting An Adjustable Rate Loan.</p>
                      <p>To Fix The Loan Rate Or To Do A Cash Equity In Your Home (Cash Out).</p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- girls -->

  <!-- education -->
  <section class="education">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <h2>Here Are The Few Reasons For Cashing Out From Your Property</h2>
              </div>

              <div class="row">
                  <div class="col-lg-4">
                      <h3>Home Improvement.</h3>
                  </div>

                      <div class="col-lg-4">
                      <h3>Education Fund.</h3>
                  </div>

                      <div class="col-lg-4">
                      <h3>Consolidating Debt.</h3>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- education -->

  <!-- releft -->
  <section class="releft">
      <div class="container">
          <div class="row">

              <div class="col-lg-6">
                  <div class="releft1">
                      <img src="/assets/images/TestimonialPhoto.png" class="img-fluid">
                      <h2>Cash Out Refinance Benefits:</h2>
                      <p>Pay off debts or upcoming expenses.</p>
                      <p>Better mortgage loan interest rate (save you lots on your monthly mortgage payments during the loan).</p>
                      <p>It’s tax-deductible.</p>
                  </div>
              </div>

                  <div class="col-lg-6">
                  <div class="reright1">
                      <img src="/assets/images/HouseExterior_0.png" class="img-fluid">
                      <h2>Reverse Mortgage Loans:</h2>
                      <p>Perfect for home buyers over the age of 62.</p>
                      <p>Converting their home equity into cash and defer the payment until their death, or until they sell their home.</p>
                      <p>Reverse Mortgages allow seniors to enjoy their golden years without having to worry about a mortgage payment.</p>
                      <p>Primary Residence.</p>
                      <p>No monthly mortgage payment.</p>
                  </div>
              </div>


          </div>
      </div>
  </section>
  <!-- releft -->

@endsection
