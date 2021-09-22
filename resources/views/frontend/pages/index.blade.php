@extends('layouts.frontend.master')

@section('content')


      <!-- Banner -->
      <section class="banner">
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
                    <img src="{{asset('frontend/assets/images/banner.png')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h2><span>Feeling good</span> about making a difference.</h2>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                      <a href="#">Apply For Home Purchase</a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('frontend/assets/images/banner.png')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h2><span>Feeling good</span> about making a difference.</h2>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                      <a href="#">Apply For Home Purchase</a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('frontend/assets/images/banner.png')}}" class="d-block w-100" alt="...">
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
                </button>
              </div>
            </div>
          </div>
          <div class="social-links">
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
          </div>
        </div>

      </section>
      <!-- Banner -->



      <!-- Process -->
      <section class="process">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="hd">Our Process Puts You in Control.</h2>
              <p class="sec-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
            <div class="col-lg-3">
              <div class="box">
                <div class="bor-left">
                  <img src="{{asset('frontend/assets/images/Group 66.png')}}">
                  <h3>Apply Online</h3>
                  <p class="sec-para">Our streamlined application syncs with your bank to get you accurate numbers, fast.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="box">
                <div class="bor-left">
                  <img src="{{asset('frontend/assets/images/Icon feather-check-square.png')}}">
                  <h3>Get Approved</h3>
                  <p class="sec-para">See how much you’re approved for, then shop for homes or move forward with your refinance.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="box">
                <div class="bor-left">
                  <img src="{{asset('frontend/assets/images/Group 67.png')}}">
                  <h3>Close Your Loan</h3>
                  <p class="sec-para">Use your to-do list to verify the details and get to closing fast.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="box">
                <img src="{{asset('frontend/assets/images/Group 68.png')}}">
                <h3>Manage Your Mortgage</h3>
                <p class="sec-para">Our streamlined application syncs with your bank to get you accurate numbers, fast.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Process -->
      <!-- Hand -->
      <section class="hand">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="shake">
                <img src="{{asset('frontend/assets/images/mortgage-brokers.png')}}">
              </div>
            </div>
          </div>
          <div class="content-in">
            <div class="row">
              <div class="col-lg-6 one">
                <div class="row">
                  <div class="col-lg-6">
                    <img src="{{asset('frontend/assets/images/mortgage-broker-750x400.png')}}">
                  </div>

                  <div class="col-lg-6">
                    <img src="{{asset('frontend/assets/images/How-to-Find-a-Good-Mortgage-Broker-in-Sydney.png')}}">
                  </div>
                </div>
              </div>
              <div class="col-lg-6 two">
                <div class="left-text">
                  <h2>Connect With Mortage Broker In Your Community</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                  <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                  <a href="#">Consult An Expert</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Hand -->
      <!-- Home -->
      <section class="home">
        <div class="container">

            <div class="slider" >
              <div id="slider-id">
                <div class="item" >
                   <div class="row">
                  <div class="col-lg-6">
                    <div class="hometext">
                      <h2>Find Your Old Home.</h2>
                      <p>Search up-to-date home listings and get connected with a top-rated real estate agent.3 Our sister company Rocket Homes® makes it easy.</p>
                      <h5>Lorem Ipsum is simply dummy text of the printing. and typesetting industry Lorem Ipsum has been. The industry's standard dummy text ever since. The 1500s, when an unknown printer took a galley of. type and scrambled it to make a type specimen book. It has survived not only five centuries.</h5>
                      <a href="#">Start Finding</a>
                    </div>
                  </div>


                  <div class="col-lg-6">
                    <div class="homeimg">
                    <img src="{{asset('frontend/assets/images/HouseExterior_0.png')}}">
                  </div>
                  </div>
                </div>
              </div>

              <div class="item" >
                   <div class="row">
                  <div class="col-lg-6">
                    <div class="hometext">
                      <h2>Find Your New Home.</h2>
                      <p>Search up-to-date home listings and get connected with a top-rated real estate agent.3 Our sister company Rocket Homes® makes it easy.</p>
                      <h5>Lorem Ipsum is simply dummy text of the printing. and typesetting industry Lorem Ipsum has been. The industry's standard dummy text ever since. The 1500s, when an unknown printer took a galley of. type and scrambled it to make a type specimen book. It has survived not only five centuries.</h5>
                      <a href="#">Start Finding</a>
                    </div>
                  </div>


                  <div class="col-lg-6">
                    <img src="{{asset('frontend/assets/images/HouseExterior_0.png')}}">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
      <!-- Home -->
      <!-- Mortage -->
      <section class="mortage">
        <div class="container">
          <div class="row">
            <div class="col-lg-9">
              <div class="gradient">
                <h2>Your Mortgage Approval Starts Here</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="butn">
                <a href="#">Start My Approval</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Mortage -->
      <!-- cilent -->
      <section class="cilent">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="remark">
                <h2 class="hd">Remarks from Our Satisfied Clients.</h2>
                <p class="sec-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
              </div>
              <div id="cilent">
                <div class="item">
                  <div class="blue-box">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <img src="{{asset('frontend/assets/images/Ellipse 2.png')}}" class="img-fluid" alt="...">
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h2>John Doe</h2>
                        <h5>Lorem Ipsum</h5>

                      </div>
                    </div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more.</p>
                  </div>
                </div>
                <div class="item">
                  <div class="blue-box">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <img src="{{asset('frontend/assets/images/Ellipse 2.png')}}" class="img-fluid" alt="...">
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h2>John Doe</h2>
                        <h5>Lorem Ipsum</h5>

                      </div>
                    </div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more.</p>
                  </div>
                </div>
                <div class="item">
                  <div class="blue-box">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <img src="{{asset('frontend/assets/images/Ellipse 2.png')}}" class="img-fluid" alt="...">
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h2>John Doe</h2>
                        <h5>Lorem Ipsum</h5>

                      </div>
                    </div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more.</p>
                  </div>
                </div>
                <div class="item">
                  <div class="blue-box">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <img src="{{asset('frontend/assets/images/Ellipse 2.png')}}" class="img-fluid" alt="...">
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h2>John Doe</h2>
                        <h5>Lorem Ipsum</h5>

                      </div>
                    </div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- cilent -->
    <!-- contact -->
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <div class="start">
              <h2>Get Started Now On Your Financial Goals.</h2>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="contat-butn">
              <a href="#">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- contact -->
@endsection
