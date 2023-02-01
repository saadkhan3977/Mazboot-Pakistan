<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- ANIMATED -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>

    <link rel="stylesheet" href="{{asset('/')}}frontend/assets/css/style.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset('/admin/plugins/toastr/toastr.min.css')}}">
    <title>Sirf Mazboot Pakistan</title>
  </head>
  <body>
    <!-- HEADER START -->
    <header>
      <nav class="navbar navbar-expand-lg transparent-menu">
        <div class="container">
          <a class="navbar-brand" href="{{url('/')}}"><img class="logo" src="{{asset('/')}}frontend/assets/images/srif-mazboot-pakistan-logo.png" alt="Srif Mazboot Pakistan Logo"></a>
          <!-- MODAL BUTTON MOBILE, TABLET -->
          <button class="btn btn-light" id="open-subscribe-form">membership</button>
          <!-- MODAL BUTTON MOBILE, TABLET -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">Become A Member</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Fatwas</a>
              </li> -->
            </ul>
            <button class="btn btn-light openform">Request a membership</button>
          </div>
        </div>
      </nav>
    </header>
    <!-- HEADER END -->
    <!-- GET A QUOTE FORM -->
    <div class="subscribe-form">
      <div class="get-quote">
        <div class="left">
          <img src="https://bit.ly/3wEWPDj" alt="" width="100%">
        </div>
          <form class="form" method="post" action="{{route('membershipcontact.store')}}">
            @csrf  
            <h3>Request A Membership</h3>
            <div class="row">
              <div class="col-xl-6 col-md-6 col-sm-6">
                <div class="input-field">
                  <label class="mb-2" for="Enter Name">Enter Name</label>
                  <input type="text" name="name" required class="form-control" required placeholder="Enter Name">
                </div>
              </div>
              <div class="col-xl-6 col-md-6 col-sm-6">
                <div class="input-field">
                  <label class="mb-2" for="Enter Email">Enter Email</label>
                  <input type="email" name="email" required class="form-control" required placeholder="Enter Email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6 col-md-6 col-sm-6">
                <div class="input-field">
                  <label class="mb-2" for="Enter Phone">Enter Phone</label>
                  <input type="number" name="phone" required class="form-control" required placeholder="Enter Phone">
                </div>
              </div>
              <div class="col-xl-6 col-md-6 col-sm-6">
                <div class="input-field">
                  <label class="mb-2" for="Enter Address">Enter Address</label>
                  <input type="text" name="address" required class="form-control" required placeholder="Enter Address">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6 col-md-6 col-sm-6">
                <div class="input-field">
                  <label class="mb-2" for="Enter City">Enter City</label>
                  <input type="text" name="city" required class="form-control" required placeholder="Enter City">
                </div>  
              </div>
              <div class="col-xl-6 col-md-6 col-sm-6">
                <div class="input-field">
                  <label class="mb-2" for="Enter State/Province">Enter State/Province</label>
                  <input type="text" name="state" required class="form-control" required placeholder="Enter State/Province">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6 col-md-6 col-sm-6">
                <div class="input-field">
                  <label class="mb-2" for="Enter Country">Enter Country</label>
                  <input type="text" name="country" required class="form-control" required placeholder="Enter Country">
                </div>  
              </div>
              <div class="col-xl-6 col-md-6 col-sm-6">
                <div class="input-field">
                  <label class="mb-2" for="Enter Reason for joining">Enter Reason for joining</label>
                  <input type="text" name="joining_reason" class="form-control" required placeholder="Enter Reason for joining">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6 col-md-6 col-sm-6">
                <div class="input-field">
                  <label class="mb-2" for="Enter How did you hear about us?">Enter How did you hear about us?</label>
                  <input type="text" name="hear_about" class="form-control" required placeholder="Enter How did you hear about us?">
                </div>  
              </div>
              <div class="col-xl-6 col-md-6 col-sm-6">
                <div class="input-field">
                  <label class="mb-2" for="Enter Date of Birth">Enter Date of Birth</label>
                  <input type="text" name="dob" class="form-control" required placeholder="Enter Date of Birth">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6 col-md-6 col-sm-6">
                <div class="input-field">
                  <label class="mb-2" for="Enter Number of adults in household">Enter Number of adults in household</label>
                  <input type="text" name="adult_household" class="form-control" required placeholder="Enter Number of adults in household">
                </div>  
              </div>
              <div class="col-xl-6 col-md-6 col-sm-6">
                <div class="input-field">
                  <label class="mb-2" for="Enter Number of children is household">Enter Number of children is household</label>
                  <input type="text" name="children_household" class="form-control" required placeholder="Enter Number of children in household">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6 col-md-6 col-sm-6">
                <div class="input-field">
                  <label class="mb-2" for="Enter Ages of children">Enter Number of children</label>
                  <input type="text" name="number_of_children" class="form-control" required placeholder="Enter Ages of children">
                </div>  
              </div>
              <div class="col-xl-6 col-md-6 col-sm-6">
                <div class="input-field">
                  <label class="mb-2" for="Enter Applicant Signature">Enter Applicant Signature</label>
                  <input type="text" name="applicant_signature" class="form-control" required placeholder="Enter Applicant Signature">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6 col-md-6 col-sm-6">
                <div class="input-field">
                  <label class="mb-2" for="Enter Recipient Signature">Enter Recipient Signature</label>
                  <input type="text" name="recipient_signature" class="form-control" required placeholder="Enter Recipient Signature">
                </div>  
              </div>
              <div class="col-xl-6 col-md-6 col-sm-6">
                <div class="input-field">
                  <label class="mb-2" for="Enter Stamp">Enter Stamp</label>
                  <input type="text" name="signature" class="form-control" required placeholder="Enter Stamp">
                </div>
              </div>
            </div>
            <div class="submit-btn">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        <button class="close-btn">
          &times;
        </button>
      </div>
    </div>
    @yield('content')

    <!-- FOOTER -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <ul class="social-list">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
              <li><a href="#"><img src="{{asset('/')}}frontend/assets/images/snack-video.png" alt="snack video"></a></li>
          </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="copyrights">
              <p>&copy; 2023 Sirf Mazboot Pakistan - All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- FOOTER -->

    <script src="{{asset('/')}}frontend/assets/js/jquery-3.6.2.min.js"></script>
    <script src="{{asset('/')}}frontend/assets/js/popper.min.js"></script>
    <script src="{{asset('/')}}frontend/assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="{{asset('/')}}frontend/assets/js/scripts.js"></script>
    <!-- Toastr -->
    <script src="{{asset('/admin/plugins/toastr/toastr.min.js')}}"></script>
    <script>
    @if(session('success'))
    toastr.success("{{session('success')}}");
    @endif
    @if(session('error'))
    toastr.error("{{session('error')}}")
    @endif
    @if($errors->any())
        @foreach ($errors->all() as $error)
        toastr.error("{{$error}}")
        @endforeach
    @endif
    </script>
  </body>
</html>