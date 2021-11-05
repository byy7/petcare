<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>petcare</title>
  <link rel="icon" href="{{ URL::asset('img/logo.png') }}">

  {{-- Logout --}}
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="manifest" href="assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">


  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link href="assets/css/theme.css" rel="stylesheet" />
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/fontawesome.css">
  <link rel="stylesheet" href="/assets/css/templatemo-seo-dream.css">
  <link rel="stylesheet" href="/assets/css/animated.css">

</head>


<body>
  <main class="main" id="top">
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
                <li class="scroll-to-section"><a href="#categoryWomen">Category</a></li>
                <li class="scroll-to-section">
                  <div class="main-blue-button"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <center>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
    <section class="py-4 bg-light-gradient border-bottom border-white border-5">
      <div class="bg-holder overlay overlay-light">
      </div>
      <!--/.bg-holder-->

      <!-- <div class="container">
        <div class="row flex-center">
          <div class="col-12 mb-10">
            <div class="d-flex align-items-center flex-column">
              <h1 class="fw-normal"> With an outstanding style, only for you</h1>
              <h1 class="fs-4 fs-lg-8 fs-md-6 fw-bold">Exclusively designed for you</h1>
            </div>
          </div>
        </div>
      </div> -->
    </section>

    <!-- <section> begin ============================-->
    <section class="py-0">

      <div class="container">
        <div class="row h-100">
          <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
            <h5 class="fw-bold fs-3 fs-lg-5 lh-sm" style="color: #33CCC5;">Best Deals</h5>
          </div>
          <div class="col-12">
            <div class="carousel slide" id="carouselBestDeals" data-bs-touch="false" data-bs-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <div class="row h-100 align-items-center g-2">
                    <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid" src="assets/images/petShop/suplemen/bigiCat.jpg" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-1000 text-truncate text-center">Bigi Cat</h5>
                          <div class="fw-bold text-center"><span class="text-600 me-2 text-decoration-line-through">Rp. 120.000</span><span class="text-primary">Rp. 75.000</span></div>
                        </div><a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid" src="assets/images/petShop/suplemen/wookuWooku.jpg" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-1000 text-truncate text-center">Wooku Wooku</h5>
                          <div class="fw-bold text-center"><span class="text-600 me-2 text-decoration-line-through">Rp. 40.000</span><span class="text-primary">Rp. 25.000</span></div>
                        </div><a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white" style=" height: 100px;"><img class="img-fluid" src="assets/images/petShop/suplemen/pumpkinBoost.jpg" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-1000 text-truncate text-center">Pumpkin Boost</h5>
                          <div class="fw-bold text-center"><span class="text-600 me-2 text-decoration-line-through">Rp. 35.000</span><span class="text-primary">Rp. 28.000</span></div>
                        </div><a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/suplemen/dermatrix.jpg" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-1000 text-truncate text-center">Dermatrix</h5>
                          <div class="fw-bold text-center"><span class="text-600 me-2 text-decoration-line-through">Rp. 89.000</span><span class="text-primary">Rp. 77.000</span></div>
                        </div><a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section>

      <div class="container pt-4">
        <div class="row h-100 g-2">
          <div class="col-md-6">
            <div class="bg-300 p-4 h-100 d-flex flex-column justify-content-center">
              <h4 class="text-800 text-center">Exclusive Product 2021</h4><br>
              <p class="mb-5 fs-2 text-center">"The best everyday option in a Super Saver range within a reasonable price. It is our responsibility to keep your pet 100 percent Health. Be smart, Happy with us."</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/images/kucing.jpg" alt="..." />
              <div class="card-img-overlay bg-dark-gradient">
                {{-- <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="#!" role="button">
                    <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                    </svg></a></div> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="row h-100 g-2 py-4">
          <div class="col-md-4">
            <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/images/petShop/obat/virbac.jpg" alt="..." />
              <div class="card-img-overlay bg-dark-gradient">
                {{-- <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="#!" role="button">Pet Health
                    <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                    </svg></a></div> --}}
                    <div class="d-flex align-items-end justify-content-center h-100">
                      <h4 class="btn btn-lg text-light fs-1">Pet Health</h4>
                    </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/images/petShop/makanan/whiskas1.jpg" alt="..." />
              <div class="card-img-overlay bg-dark-gradient">
                {{-- <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="#!" role="button">Pet Food
                    <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                    </svg></a></div> --}}
                    <div class="d-flex align-items-end justify-content-center h-100">
                      <h4 class="btn btn-lg text-light fs-1">Pet Food</h4>
                    </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/images/petShop/shampo/earthbath.jpg" alt="..." />
              <div class="card-img-overlay bg-dark-gradient">
                {{-- <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="#!" role="button">Pet Grooming
                    <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                    </svg></a></div> --}}
                    <div class="d-flex align-items-end justify-content-center h-100">
                      <h4 class="btn btn-lg text-light fs-1">Pet Grooming</h4>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->



    <section id="categoryWomen">
      <div class="container">
        <div class="row h-100">
          <div class="col-lg-7 mx-auto text-center mt-5">
            <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Shop By Category</h5>
          </div>
          <div class="col-12">
            <nav>

              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-women" role="tabpanel" aria-labelledby="nav-women-tab">
                  <ul class="nav nav-pills justify-content-center mb-5" id="pills-tab-women" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a href="#health"><button class="nav-link" id="pills-wtshirt-tab" data-bs-toggle="pill" data-bs-target="#pills-wtshirt" type="button" role="tab" aria-controls="pills-wtshirt" aria-selected="true">Health</button></a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a href="#food"><button class="nav-link" id="pills-dresses-tab" data-bs-toggle="pill" data-bs-target="#pills-dresses" type="button" role="tab" aria-controls="pills-dresses" aria-selected="false">Food</button></a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a href="#grooming"><button class="nav-link" id="pills-wshoes-tab" data-bs-toggle="pill" data-bs-target="#pills-wshoes" type="button" role="tab" aria-controls="pills-wshoes" aria-selected="false">Grooming</button></a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a href="#cage"><button class="nav-link" id="pills-wwatch-tab" data-bs-toggle="pill" data-bs-target="#pills-wwatch" type="button" role="tab" aria-controls="pills-wwatch" aria-selected="false">Cage</button></a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a href="#snack"> <button class="nav-link" id="pills-wsunglasses-tab" data-bs-toggle="pill" data-bs-target="#pills-wsunglasses" type="button" role="tab" aria-controls="pills-wsunglasses" aria-selected="false">Snack</button></a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a href="#litter"><button class="nav-link" id="pills-wbagpacks-tab" data-bs-toggle="pill" data-bs-target="#pills-wbagpacks" type="button" role="tab" aria-controls="pills-wbagpacks" aria-selected="false">Litter</button></a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a href="#milk"><button class="nav-link" id="pills-wbagpacks-tab" data-bs-toggle="pill" data-bs-target="#pills-wbagpacks" type="button" role="tab" aria-controls="pills-wbagpacks" aria-selected="false">Milk</button></a>
                    </li>
                  </ul>
                  <div class="col-lg-7 mx-auto text-center mt-6">
                    <h6 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3" style="color: #33CCC5;">Health</h6>
                  </div>
                  <div class="tab-content" id="health">
                    <div class="tab-pane fade show active" id="pills-wtshirt" role="tabpanel" aria-labelledby="pills-wtshirt-tab">
                      <div class="carousel slide" id="carouselCategoryWTshirt" data-bs-touch="false" data-bs-interval="false">
                        <div class="carousel-inner">
                          <div class="carousel-item active" data-bs-interval="10000">
                            <div class="row h-100 align-items-center g-2">
                              <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/obat/frontLine.jpg" alt="..." />
                                  <div class="card-img-overlay ps-0"> </div>
                                  <div class="card-body ps-0 bg-200">
                                    <h5 class="fw-bold text-1000 text-truncate text-center">Frontliner</h5>
                                    <div class="fw-bold text-center"><span class="text-primary">Rp. 200.000</span></div>
                                  </div><a class="stretched-link" href="#"></a>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/obat/kindKind.jpg" alt="..." />
                                  <div class="card-img-overlay ps-0"> </div>
                                  <div class="card-body ps-0 bg-200">
                                    <h5 class="fw-bold text-1000 text-truncate text-center">Kind Kind</h5>
                                    <div class="fw-bold text-center"><span class="text-primary">Rp. 75.000</span></div>
                                  </div><a class="stretched-link" href="#"></a>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/obat/revolution.jpg" alt="..." />
                                  <div class="card-img-overlay ps-0"> </div>
                                  <div class="card-body ps-0 bg-200">
                                    <h5 class="fw-bold text-1000 text-truncate text-center">Revolution</h5>
                                    <div class="fw-bold text-center"><span class="text-primary">Rp. 90.000</span></div>
                                  </div><a class="stretched-link" href="#"></a>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/obat/veterinary.jpg" alt="..." />
                                  <div class="card-img-overlay ps-0"> </div>
                                  <div class="card-body ps-0 bg-200">
                                    <h5 class="fw-bold text-1000 text-truncate text-center">veterinary</h5>
                                    <div class="fw-bold text-center"><span class="text-primary">Rp. 170.000</span></div>
                                  </div><a class="stretched-link" href="#"></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>

              </div>
            </nav>

            <div class="col-lg-7 mx-auto text-center mt-6">
              <h6 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3" style="color: #33CCC5;">Food</h6>
            </div>
            <div class="tab-content" id="food">
              <div class="tab-pane fade show active" id="pills-wtshirt" role="tabpanel" aria-labelledby="pills-wtshirt-tab">
                <div class="carousel slide" id="carouselCategoryWTshirt" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                      <div class="row h-100 align-items-center g-2">
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/makanan/proplan.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Pro Plan</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 230.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/makanan/royalCanin.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Royal Canin</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 460.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/makanan/felibite.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Felibite</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 120.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/makanan/friskies.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Friskies</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 180.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 mx-auto text-center mt-6">
              <h6 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3" style="color: #33CCC5;">Shampoo</h6>
            </div>
            <div class="tab-content" id="pgrooming">
              <div class="tab-pane fade show active" id="pills-wtshirt" role="tabpanel" aria-labelledby="pills-wtshirt-tab">
                <div class="carousel slide" id="carouselCategoryWTshirt" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                      <div class="row h-100 align-items-center g-2">
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/shampo/bioline.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Bio Line</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 20.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/shampo/meowPlus.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Meow Plus</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 25.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/shampo/bio.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Bio</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 25.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/shampo/pro-v.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Pro-V</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 60.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 mx-auto text-center mt-6">
              <h6 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3" style="color: #33CCC5;">Cage</h6>
            </div>
            <div class="tab-content" id="cage">
              <div class="tab-pane fade show active" id="pills-wtshirt" role="tabpanel" aria-labelledby="pills-wtshirt-tab">
                <div class="carousel slide" id="carouselCategoryWTshirt" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                      <div class="row h-100 align-items-center g-2">
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/kandang/c221.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Cage C221</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 320.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/kandang/cage.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Medium Cage</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 250.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/kandang/hp1.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Large Cage</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 350.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/kandang/transparant.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Transparant Cage</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 450.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 mx-auto text-center mt-6">
              <h6 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3" style="color: #33CCC5;">Snack</h6>
            </div>
            <div class="tab-content" id="snack">
              <div class="tab-pane fade show active" id="pills-wtshirt" role="tabpanel" aria-labelledby="pills-wtshirt-tab">
                <div class="carousel slide" id="carouselCategoryWTshirt" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                      <div class="row h-100 align-items-center g-2">
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/snack/meo.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Me-O</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 35.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/snack/sheba.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Sheba</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 34.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/snack/supercat.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Super Cat</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 26.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/snack/bio.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Bio Snack</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 15.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 mx-auto text-center mt-6">
              <h6 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3" style="color: #33CCC5;">Litter</h6>
            </div>
            <div class="tab-content" id="litter">
              <div class="tab-pane fade show active" id="pills-wtshirt" role="tabpanel" aria-labelledby="pills-wtshirt-tab">
                <div class="carousel slide" id="carouselCategoryWTshirt" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                      <div class="row h-100 align-items-center g-2">
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/pasir/silicat.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Silicat</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 26.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/pasir/kitCat.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Kit Cat</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 45.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/pasir/fifiLitter.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Fifi Litter</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 25.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/pasir/catsBest.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Cats Best</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 40.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 mx-auto text-center mt-6">
              <h6 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3" style="color: #33CCC5;">Milk</h6>
            </div>
            <div class="tab-content" id="milk">
              <div class="tab-pane fade show active" id="pills-wtshirt" role="tabpanel" aria-labelledby="pills-wtshirt-tab">
                <div class="carousel slide" id="carouselCategoryWTshirt" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                      <div class="row h-100 align-items-center g-2">
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/susu/beaphar.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Beaphar</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 30.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/susu/topGrowth.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Top Growth</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 36.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/susu/royal.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Royal</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 34.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                          <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/images/petShop/susu/ameri.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                              <h5 class="fw-bold text-1000 text-truncate text-center">Ameri</h5>
                              <div class="fw-bold text-center"><span class="text-primary">Rp. 20.000</span></div>
                            </div><a class="stretched-link" href="#"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div id="contact" class="contact-us section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
            <form id="contact" action="" method="post">
              <div class="row">
                <div class="col-lg-6 offset-lg-3">
                  <div class="section-heading">
                    <h2>Have a <span>Quetion?</span> feel free to <em>Contact</em> Us</h2>
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
    <!-- <section> close ============================-->
    <!-- ============================================-->


  </main>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2021 PetCare, Ltd. All Rights Reserved.
        </div>
      </div>
    </div>
  </footer>
  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="vendors/@popperjs/popper.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.min.js"></script>
  <script src="vendors/is/is.min.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="vendors/feather-icons/feather.min.js"></script>
  <script>
    feather.replace();
  </script>
  <script src="assets/js/theme.js"></script>

  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
</body>

</html>