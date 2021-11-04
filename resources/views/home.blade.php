<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <title>petcare</title>
    <link rel="icon" href="{{ URL::asset('img/logo.jpg') }}">


     {{-- Logout --}}
     <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap core CSS -->
    
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/templatemo-seo-dream.css">
    <link rel="stylesheet" href="/assets/css/animated.css">
    <link rel="stylesheet" href="/assets/css/owl.css">
<!--

TemplateMo 563 SEO Dream

https://templatemo.com/tm-563-seo-dream

-->

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="#" class="logo">
              <h4>petcare<img src="assets/images/logo-icon.png" alt=""></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#about">About Us</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#contact">Contact Us</a></li> 
              <a href="{{ url('admin') }}">ADMIN</a>
              <a href="{{ url('user') }}">USER</a>
              
              <li class="scroll-to-section"><div class="main-blue-button"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <center>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            </center>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
            </li>
            </ul>      
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>CPO</h6>
                      <h4>Rizki Utami</h4>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>CEO</h6>
                      <h4>Muhammad Faraby</h4>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>CTO</h6>
                      <h4>Qory Ichsan</h4>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <h2>Your Pet is your Med!</h2>
                  </div>
                  <div class="col-lg-12">
                    <div class="main-green-button scroll-to-section">
                      <a href="#contact">Get In Touch With PetCare</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/banner-real.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="assets/images/banner-right-image.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="section-heading">
            <h6>About Us</h6>
            <h2><em>Feel free</em> to find what your <span>Pet Need</span></h2>
          </div>
          <div class="row">
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>1M+</h4>
                <h6>Pet Healed</h6>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>10M+</h4>
                <h6>happy clients</h6>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>100k+</h4>
                <h6>New Community Created</h6>
              </div>
            </div>
          </div>
          <p><a rel="nofollow" href="https://templatemo.com/tm-563-seo-dream" target="_parent">Pet Care</a> is a place that you can find whatever your pet need. Pet clinic, food, train, etc.</p>
        </div>
      </div>
    </div>
  </div>

  <div id="features" class="features section">
    <div class="container">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <h6>Our Products</h6>
              <h2>Create an account or Login <em>to discover our product</em> And <span>Forum</span></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="features-content">
            <div class="row">
              <div class="col-lg-3">
                <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                  <div class="first-number number">
                    <h6>#1</h6>
                  </div>
                  <div class="icon"><img src="assets/images/clinic.png" alt="clinic"></div>
                  <h4>Pet Clinic</h4>
                  <div class="line-dec"></div>
                  <p>This HTML5 template is based on Bootstrap 5 CSS. You are free to customize anything.</p>
                  <div class="main-green-button">
                    <a href="/user">Shop Now!</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item second-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                  <div class="second-number number">
                    <h6>#2</h6>
                  </div>
                  <div class="icon "><img src="assets/images/grooming.png" alt="grooming"></div>
                  <h4>Pet Grooming</h4>
                  <div class="line-dec"></div>
                  <p>Lorem ipsum dolor sit ameter consectetur adipiscing li elit sed do eiusmod.</p>
                  <div class="main-green-button">
                    <a href="/user">Shop Now!</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                  <div class="third-number number">
                    <h6>#3</h6>
                  </div>
                  <div class="icon"><img src="assets/images/training.png" alt="training"></div>
                  <h4>Pet Sitter</h4>
                  <div class="line-dec"></div>
                  <p>If this template is useful for your website, please consider to <a rel="nofollow" href="https://www.paypal.me/templatemo" target="_blank">support us</a> a little.</p>
                  <div class="main-green-button">
                    <a href="/user">Shop Now!</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item second-feature last-features-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                  <div class="fourth-number number">
                    <h6>#4</h6>
                  </div>
                  <div class="icon"><img src="assets/images/forum.png" alt="forum"></div>
                  <h4>Pet Forum</h4>
                  <div class="line-dec"></div>
                  <p>Below circular progress bar animation supports those CSS values 10, 20, 30, till 100.</p>
                  <div class="main-green-button">
                    <a href="/user">Shop Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2>Let's &amp; <span>Meet &amp; Greet</span> With Our <em>Team</em></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="assets/images/rai.jpeg" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>Qory Ichsan</h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="assets/images/rai.jpeg" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>Muhammad Faraby</h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="assets/images/rai.jpeg" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>Rizki Utami</h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                  <h6>Contact Us</h6>
                  <h2>Fill Out The Form Below To <span>Get</span> In <em>Touch</em> With Us</h2>
                </div>
              </div>
              <div class="col-lg-9">
                <div class="row">
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="contact-info">
                  <ul>
                    <li>
                      <div class="icon">
                        <img src="assets/images/contact-icon-01.png" alt="email icon">
                      </div>
                      <a href="#">pet@care.com</a>
                    </li>
                    <li>
                      <div class="icon">
                        <img src="assets/images/contact-icon-02.png" alt="phone">
                      </div>
                      <a href="#">021 - 2828</a>
                    </li>
                    <li>
                      <div class="icon">
                        <img src="assets/images/contact-icon-03.png" alt="location">
                      </div>
                      <a href="#">Srijaya Negara Street</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2021 PetCare.com, Ltd. All Rights Reserved. 
          
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->

  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/owl-carousel.js"></script>
  <script src="/assets/js/animation.js"></script>
  <script src="/assets/js/imagesloaded.js"></script>
  <script src="/assets/js/custom.js"></script>

</body>
</html>

     

      
