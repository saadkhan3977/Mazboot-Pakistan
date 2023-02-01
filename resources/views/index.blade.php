@extends('layouts.front_master')
@section('page-title')
Home
@endsection
@section('content')

    <!-- GET A QUOTE FORM -->
    <!-- START HERO SECTION -->
    <section class="hero-section">
      <!-- SLIDER -->
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('/')}}frontend/assets/images/slider-1.jpg" class="d-block w-100" alt="Slider One">
            <div class="carousel-caption">
              <h2 class="animate__animated animate__slideInDown">Health Care</h2>
              <h3 class="animate__animated animate__slideInUp">Sirf Mazboot Pakistan</h3>
              <p class="animate__animated animate__slideInUp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quae aliquid dignissimos totam at voluptatem?</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('/')}}frontend/assets/images/slider-2.jpg" class="d-block w-100" alt="Slider Two">
            <div class="carousel-caption">
              <h2 class="animate__animated animate__slideInDown">Education</h2>
              <h3 class="animate__animated animate__slideInUp">Sirf Mazboot Pakistan</h3>
              <p class="animate__animated animate__slideInUp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quae aliquid dignissimos totam at voluptatem?</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('/')}}frontend/assets/images/slider-3.jpg" class="d-block w-100" alt="Slider Three">
            <div class="carousel-caption">
              <h2 class="animate__animated animate__slideInDown">Funeral</h2>
              <h3 class="animate__animated animate__slideInUp">Sirf Mazboot Pakistan</h3>
              <p class="animate__animated animate__slideInUp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quae aliquid dignissimos totam at voluptatem?</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true">
            <i class="fa fa-chevron-left"></i>
          </span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true">
            <i class="fa fa-chevron-right"></i>
          </span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- SLIDER -->

      <!-- VIDEO -->
      <video playsinline autoplay muted loop id="myVideo" class="d-none">
        <source src="{{asset('/')}}frontend/assets/video/video.mp4" type="video/mp4">
      </video>
      <!-- VIDEO -->
    </section>
    <!-- END HERO SECTION -->

    <!-- About US START -->
    <div id="about">&nbsp;</div>
    <div class="about-sec">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <h2>About Us</h2>
            <div class="border-underline">
              <span></span>
              <img src="{{asset('/')}}frontend/assets/images/handshake.png" alt="handshake">
              <span></span>
            </div>
            <div class="info">
              <p class="mb-3">Our company is dedicated to improving the lives of people in our community. We believe that everyone deserves the opportunity to live a happy and fulfilling life, and we are committed to supporting people in achieving their goals.</p>
              <p class="mb-3">Our team is composed of passionate and dedicated individuals who are committed to making a positive impact in the world. We offer a range of services and support to help people overcome challenges, achieve their goals, and live a better life.
              </p>
              <p class="mb-3">We are constantly innovating and improving our services to ensure that we are able to provide the best possible support to our members. We are always looking for ways to make a difference and make a positive impact in the world.</p>
              <p>We hope that you will join us in our mission to create a better world for everyone. Together, we can make a real difference and build a brighter future for all.</p>
              <!-- <a href="#" class="btn btn-primary mt-4">Read More</a> -->
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 right-img">
              <img class="about-img" src="{{asset('/')}}frontend/assets/images/about-us.jpg" alt="About US">
              <div class="overlay">&nbsp;</div>
          </div>
        </div>
      </div>
    </div>
    <!-- About US END -->
    <!-- START SERVICES SECTION -->
    <div id="services">&nbsp;</div>
    <section class="services-sec">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>Services</h2>
            <div class="border-underline">
              <span></span>
              <img src="{{asset('/')}}frontend/assets/images/handshake.png" alt="handshake">
              <span></span>
            </div>
          </div>
        </div>
        <div id="carouselservices" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselservices" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselservices" data-bs-slide-to="1" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselservices" data-bs-slide-to="2" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselservices" data-bs-slide-to="3" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselservices" data-bs-slide-to="4" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselservices" data-bs-slide-to="5" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselservices" data-bs-slide-to="6" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselservices" data-bs-slide-to="7" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#carouselservices" data-bs-slide-to="8" aria-label="Slide 8"></button>
            <button type="button" data-bs-target="#carouselservices" data-bs-slide-to="9" aria-label="Slide 9"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
              <div class="service-info">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 left-col">
                    <img src="{{asset('/')}}frontend/assets/images/urban-line.gif" alt="Slider 1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 right-col">
                  <i class="fa fa-graduation-cap fa-icon"></i>
                  <h3>Funeral</h3>
                  <p class="mb-3">Welcome to our company, Sirf Mazboot Pakistan! As soon as you become a member, you will have access to our top-notch funeral services worth up to 30,000 PKR. If you are our member, you will be able to avail these services free of cost after some verifications. Our representative will do the necessary verifications and provide you with the services. To fully understand and avail our services, you can either contact our representative or visit our office. Thank you for choosing Sirf Mazboot Pakistan.</p>
                  <p><b>"Note"</b></p>
                  <p>It is important to note that Sirf Mazboot Pakistan is not a non-profit organization. We are a company that provides services to our members to help them benefit financially. Our goal is to empower every Pakistani to become self-sufficient and we invite you to join our membership program today and become a part of our mission to make this goal a reality. It is important to note that we do not provide Zakat, Fitra, Sadqa or Khairat to our members. These funds are solely from our members' contributions and are used to provide the services we offer. We invite you to visit our office or contact our helpline for further information on how our services can benefit you.</p>
                  <!-- <a href="#" class="btn btn-primary mt-4">Read More</a> -->
                </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <div class="service-info">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 left-col">
                    <img src="{{asset('/')}}frontend/assets/images/health-care.gif" alt="Slider 2">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 right-col">
                  <i class="fa fa-house-medical fa-icon"></i>
                  <h3>Jobs</h3>
                  <p class="mb-3">Sirf Mazboot Pakistan is proud to offer its members the opportunity to secure a job with our organization, starting 6 months after becoming a member. Our organization is always in need of employees across various sectors and we prioritize our members when it comes to job opportunities. If you're interested, please send your CV to the email provided by Mazboot Pakistan and our team will review your qualifications. For more information, please visit our office or contact our helpline. Thank you for choosing Sirf Mazboot Pakistan for your job search needs.</p>
                  <p><b>"Note"</b></p>
                  <p>It is important to note that Sirf Mazboot Pakistan is not a non-profit organization. We are a company that provides services to our members to help them benefit financially. Our goal is to empower every Pakistani to become self-sufficient and we invite you to join our membership program today and become a part of our mission to make this goal a reality. It is important to note that we do not provide Zakat, Fitra, Sadqa or Khairat to our members. These funds are solely from our members' contributions and are used to provide the services we offer. We invite you to visit our office or contact our helpline for further information on how our services can benefit you.</p>
                  <!-- <a href="#" class="btn btn-primary mt-4">Read More</a> -->
                </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <div class="service-info">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 left-col">
                    <img src="{{asset('/')}}frontend/assets/images/urban-line.gif" alt="Slider 1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 right-col">
                  <i class="fa fa-graduation-cap fa-icon"></i>
                  <h3>Grocery</h3>
                  <p class="mb-3">As a member of Sirf Mazboot Pakistan, you are eligible for special discounts on grocery purchases from our mini mart. Once your membership reaches 12 months, you can enjoy discounts ranging from 10% to 50% on all your grocery purchases. For more information, please visit our office or contact our helpline for assistance. Thank you for choosing Sirf Mazboot Pakistan.</p>
                  <p><b>"Note"</b></p>
                  <p>It is important to note that Sirf Mazboot Pakistan is not a non-profit organization. We are a company that provides services to our members to help them benefit financially. Our goal is to empower every Pakistani to become self-sufficient and we invite you to join our membership program today and become a part of our mission to make this goal a reality. It is important to note that we do not provide Zakat, Fitra, Sadqa or Khairat to our members. These funds are solely from our members' contributions and are used to provide the services we offer. We invite you to visit our office or contact our helpline for further information on how our services can benefit you.</p>
                  <!-- <a href="#" class="btn btn-primary mt-4">Read More</a> -->
                </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <div class="service-info">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 left-col">
                    <img src="{{asset('/')}}frontend/assets/images/urban-line.gif" alt="Slider 1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 right-col">
                  <i class="fa fa-graduation-cap fa-icon"></i>
                  <h3>Skills Development</h3>
                  <p class="mb-3">As a member of Sirf Mazboot Pakistan, if you have been a member for 18 months or more, you are eligible to participate in our Skills Development program. Our program offers a variety of skills training that can help our members become self-sufficient and increase their employability. To learn more about this service, please visit our office or contact our helpline for further information. Thank you.</p>
                  <p><b>"Note"</b></p>
                  <p>It is important to note that Sirf Mazboot Pakistan is not a non-profit organization. We are a company that provides services to our members to help them benefit financially. Our goal is to empower every Pakistani to become self-sufficient and we invite you to join our membership program today and become a part of our mission to make this goal a reality. It is important to note that we do not provide Zakat, Fitra, Sadqa or Khairat to our members. These funds are solely from our members' contributions and are used to provide the services we offer. We invite you to visit our office or contact our helpline for further information on how our services can benefit you.</p>
                  <!-- <a href="#" class="btn btn-primary mt-4">Read More</a> -->
                </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <div class="service-info">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 left-col">
                    <img src="{{asset('/')}}frontend/assets/images/urban-line.gif" alt="Slider 1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 right-col">
                  <i class="fa fa-graduation-cap fa-icon"></i>
                  <h3>Health OPD</h3>
                  <p class="mb-3">As a member of Sirf Mazboot Pakistan, if you have completed 24 months of membership, you are eligible for our Health OPD service. With this service, you can consult our highly qualified doctors for your health concerns through an Outpatient Department (OPD) visit. To avail this service and for further information, please visit our office or contact us through our helpline. Thank you.</p>
                  <p><b>"Note"</b></p>
                  <p>It is important to note that Sirf Mazboot Pakistan is not a non-profit organization. We are a company that provides services to our members to help them benefit financially. Our goal is to empower every Pakistani to become self-sufficient and we invite you to join our membership program today and become a part of our mission to make this goal a reality. It is important to note that we do not provide Zakat, Fitra, Sadqa or Khairat to our members. These funds are solely from our members' contributions and are used to provide the services we offer. We invite you to visit our office or contact our helpline for further information on how our services can benefit you.</p>
                  <!-- <a href="#" class="btn btn-primary mt-4">Read More</a> -->
                </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <div class="service-info">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 left-col">
                    <img src="{{asset('/')}}frontend/assets/images/urban-line.gif" alt="Slider 1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 right-col">
                  <i class="fa fa-graduation-cap fa-icon"></i>
                  <h3>Education</h3>
                  <p class="mb-3">As a member of Sirf Mazboot Pakistan, if you have been a member for 30 months or more, you are eligible to participate in our education program. Our program offers quality education from Montessori to 8th grade, covering both religious and secular subjects. For more information, please visit our office or contact our helpline. Thank you.</p>
                  <p><b>"Note"</b></p>
                  <p>It is important to note that Sirf Mazboot Pakistan is not a non-profit organization. We are a company that provides services to our members to help them benefit financially. Our goal is to empower every Pakistani to become self-sufficient and we invite you to join our membership program today and become a part of our mission to make this goal a reality. It is important to note that we do not provide Zakat, Fitra, Sadqa or Khairat to our members. These funds are solely from our members' contributions and are used to provide the services we offer. We invite you to visit our office or contact our helpline for further information on how our services can benefit you.</p>
                  <!-- <a href="#" class="btn btn-primary mt-4">Read More</a> -->
                </div>
                </div>
              </div>
            </div>
             <div class="carousel-item" data-bs-interval="5000">
              <div class="service-info">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 left-col">
                    <img src="{{asset('/')}}frontend/assets/images/urban-line.gif" alt="Slider 1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 right-col">
                  <i class="fa fa-graduation-cap fa-icon"></i>
                  <h3>Wedding</h3>
                  <p class="mb-3">Our 7th service is related to weddings. If you are a member of our organization and have been a member for 36 months, you can take advantage of our wedding services. We offer services for both the bride's side and groom's side of the wedding, including services for the wedding ceremony and reception. For more information, you can visit our office or contact our helpline. Thank you.</p>
                  <p><b>"Note"</b></p>
                  <p>It is important to note that Sirf Mazboot Pakistan is not a non-profit organization. We are a company that provides services to our members to help them benefit financially. Our goal is to empower every Pakistani to become self-sufficient and we invite you to join our membership program today and become a part of our mission to make this goal a reality. It is important to note that we do not provide Zakat, Fitra, Sadqa or Khairat to our members. These funds are solely from our members' contributions and are used to provide the services we offer. We invite you to visit our office or contact our helpline for further information on how our services can benefit you.</p>
                  <!-- <a href="#" class="btn btn-primary mt-4">Read More</a> -->
                </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <div class="service-info">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 left-col">
                    <img src="{{asset('/')}}frontend/assets/images/urban-line.gif" alt="Slider 1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 right-col">
                  <i class="fa fa-graduation-cap fa-icon"></i>
                  <h3>Umrah</h3>
                  <p class="mb-3">Our 8th service is Umrah, if you are a member and have been a member for 42 months, you are eligible to participate in our Umrah program. In this program, we provide assistance and convenience for our members to perform Umrah. For more information, please visit our office or contact our helpline. Thank you.</p>
                  <p><b>"Note"</b></p>
                  <p>It is important to note that Sirf Mazboot Pakistan is not a non-profit organization. We are a company that provides services to our members to help them benefit financially. Our goal is to empower every Pakistani to become self-sufficient and we invite you to join our membership program today and become a part of our mission to make this goal a reality. It is important to note that we do not provide Zakat, Fitra, Sadqa or Khairat to our members. These funds are solely from our members' contributions and are used to provide the services we offer. We invite you to visit our office or contact our helpline for further information on how our services can benefit you.</p>
                  <!-- <a href="#" class="btn btn-primary mt-4">Read More</a> -->
                </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <div class="service-info">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 left-col">
                    <img src="{{asset('/')}}frontend/assets/images/urban-line.gif" alt="Slider 1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 right-col">
                  <i class="fa fa-graduation-cap fa-icon"></i>
                  <h3>Business Finance</h3>
                  <p class="mb-3">Our 9th service is also available for our members who have been a member for 50 months. Our Small Business Finance program allows members to take out loans without interest on easy terms. For more information, please visit our office or contact our helpline. Thank you.</p>
                  <p><b>"Note"</b></p>
                  <p>It is important to note that Sirf Mazboot Pakistan is not a non-profit organization. We are a company that provides services to our members to help them benefit financially. Our goal is to empower every Pakistani to become self-sufficient and we invite you to join our membership program today and become a part of our mission to make this goal a reality. It is important to note that we do not provide Zakat, Fitra, Sadqa or Khairat to our members. These funds are solely from our members' contributions and are used to provide the services we offer. We invite you to visit our office or contact our helpline for further information on how our services can benefit you.</p>
                  <!-- <a href="#" class="btn btn-primary mt-4">Read More</a> -->
                </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <div class="service-info">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 left-col">
                    <img src="{{asset('/')}}frontend/assets/images/urban-line.gif" alt="Slider 1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 right-col">
                  <i class="fa fa-graduation-cap fa-icon"></i>
                  <h3>Home Finance</h3>
                  <p class="mb-3">Our 10th service is for Small Home Finance. If you are a member of our organization and your membership has been active for 60 months, you are eligible for our small home finance program. With this program, you can easily obtain a loan without interest and help finance your home. For more information, please visit our office or contact us through our helpline. Thank you.</p>
                  <p><b>"Note"</b></p>
                  <p>It is important to note that Sirf Mazboot Pakistan is not a non-profit organization. We are a company that provides services to our members to help them benefit financially. Our goal is to empower every Pakistani to become self-sufficient and we invite you to join our membership program today and become a part of our mission to make this goal a reality. It is important to note that we do not provide Zakat, Fitra, Sadqa or Khairat to our members. These funds are solely from our members' contributions and are used to provide the services we offer. We invite you to visit our office or contact our helpline for further information on how our services can benefit you.</p>
                  <!-- <a href="#" class="btn btn-primary mt-4">Read More</a> -->
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END SERVICES SECTION -->

    <!-- PACKAGES SECTION -->
    <div id="packages">&nbsp;</div>
    <section class="plan-sec">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>Packages Plans</h2>
            <div class="border-underline">
              <span></span>
              <img src="{{asset('/')}}frontend/assets/images/handshake.png" alt="handshake">
              <span></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <div class="package-card">
              <h3>Starter</h3>
              <h2>1000PKR <span>/month</span></h2>
              <ul>
                <li>
                  <h4>Family members</h4>
                  <p>1 to 2</p>
                </li>
                <li>
                  <h4>Children under the age of 10</h4>
                  <p>Free membership</p>
                </li>
              </ul>
              <div class="card-btn">
                <button class="btn btn-primary plane-1">Choose Plan</button>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <div class="package-card">
              <h3>Advance</h3>
              <h2>2000PKR <span>/month</span></h2>
              <ul>
                <li>
                  <h4>Family members</h4>
                  <p>3 to 4</p>
                </li>
                <li>
                  <h4>Children under the age of 10</h4>
                  <p>Free membership</p>
                </li>
              </ul>
              <div class="card-btn">
                <button class="btn btn-primary plane-2">Choose Plan</button>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <div class="package-card">
              <h3>Elite</h3>
              <h2>3000PKR <span>/month</span></h2>
              <ul>
                <li>
                  <h4>Family members</h4>
                  <p>5 to 6</p>
                </li>
                <li>
                  <h4>Children under the age of 10</h4>
                  <p>Free membership</p>
                </li>
              </ul>
              <div class="card-btn">
                <button class="btn btn-primary plane-3">Choose Plan</button>
              </div>
            </div>
          </div>
        </div>
        </div>
    </section>
    <!-- PACKAGES SECTION -->
    

    <!-- CONTACT START -->
    <div id="contact">&nbsp;</div>
    <section class="contact-sec">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>Contact Us</h2>
            <div class="border-underline">
              <span></span>
              <img src="{{asset('/')}}frontend/assets/images/handshake.png" alt="handshake">
              <span></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <form action="{{route('contactus')}}" method="post">
              @csrf
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-sm-6">
                  <div class="input-fields">
                    <input type="text" name="first_name" required class="form-control" value="" placeholder="First Name">
                  </div>
                </div>
                  <div class="col-xl-6 col-lg-6 col-sm-6">
                  <div class="input-fields">
                    <input type="text" name="last_name" required class="form-control" value="" placeholder="Last Name">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-xl-6 col-lg-6 col-sm-6">
                  <div class="input-fields">
                    <input type="email" name="email" required class="form-control" value="" placeholder="Email">
                  </div>
                </div>
                  <div class="col-xl-6 col-lg-6 col-sm-6">
                  <div class="input-fields">
                    <input type="text" name="phone" required class="form-control" value="" placeholder="Phone Number">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <textarea name="description" id="" class="form-control" placeholder="Enter Message"></textarea>
                </div>
              </div>
              <div class="submit-btn">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- CONTACT END -->
      
@endsection