<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/icon.ico">
  <!-- Author Meta -->
  <meta name="author" content="CodePixar">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>MeetEvent</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
     <link rel="stylesheet" href="{{asset('css/ion.rangeSlider.css')}}" />
     <link rel="stylesheet" href="{{asset('css/ion.rangeSlider.skinFlat.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.standalone.css')}}">
  </head>
  <body>

    <!-- Start Header Area -->
    <header class="default-header">
      <div class="menutop-wrap">
        <div class="menu-top container">
          <div class="d-flex justify-content-between align-items-center">
            <ul class="list">
              <li><a href="mailto:support@meetevent.com">support@meetevent.com</a></li>
            </ul>
            <ul class="list">
                @if(Auth::check())
                <form action="/logout" method="post">
                  @csrf
                  <li><input type="submit" value="LOGOUT"></li>
                </form>
                @else
                <li><a href="/login">login</a></li>
                @endif
            </ul>
          </div>
        </div>
      </div>


      <nav class="navbar navbar-expand-lg  navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">
              <img src="{{asset('img/logo.png')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
              <ul class="navbar-nav">
              <li><a href="/">Home</a></li>
              <li><a href="/category">Category</a></li>
              <li><a href="/contact">Contact</a></li>
              </ul>
            </div>
        </div>
      </nav>


    </header>

    <!-- start page -->
    @yield('page')
    <!-- end page -->

    <section class='section-half'>

    </section>

    <!-- start footer Area -->
    <footer class="footer-area section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-3  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>About Us</h6>
              <p>
                MeetEvent merupakan suatu platform digital berbasis web yang bertujuan untuk dapat mempertemukan antara vendor dengan event dalam suatu sistem marketplace.
              </p>
            </div>
          </div>
          <div class="col-lg-3  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Newsletter</h6>
              <p>Stay update with our latest</p>
              <div class="" id="mc_embed_signup">

                  <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                  <div class="d-flex flex-row">

                    <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


                                    <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                    <div style="position: absolute; left: -5000px;">
                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                      </div>

                    <!-- <div class="col-lg-4 col-md-4">
                      <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                    </div>  -->
                  </div>
                  <div class="info"></div>
                  </form>
              </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Follow Us</h6>
              <p>Let us be social</p>
              <div class="footer-social d-flex align-items-center">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">

          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          <p class="footer-text m-0">Copyright ©<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript">document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
      </div>
    </footer>
    <!-- End footer Area -->

    <script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/ion.rangeSlider.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <!-- <script src="{{asset('js/owl.carousel.min.js')}}"></script> -->
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
    <script>
    $('#datepicker-container input').datepicker({
    });
    </script>

  </body>
</html>
