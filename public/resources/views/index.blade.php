<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('resources/css/bootstrap.min.css')}}" >
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('resources/js/jquery-3.5.1.slim.min.js')}}"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

      <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="../css/swiper-bundle.min.css">

    <!-- Swiper JS -->
    <script src="../js/swiper-bundle.min.js"></script>

    <!--Animate CSS-->
    <link rel="stylesheet" href="../css/animate.min.css">

  <!-- Styles -->
  <link rel="stylesheet" href="../css/styles.css">

    <title>Hello, world!</title>



</head>

<body>
  <!--Navbar Bootstrap-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Glamour</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">PAGES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ALBUMS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">GALLERIES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">BLOG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CONTACT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!--Swiper Autoplay-->
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image: url(../img/hiking-v1.jpg);" >
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated bounceInRight" style="animation-delay: 1s;">Web Development</h5>
          <p class="animated bounceInLeft" style="animation-delay: 2s;">Atque saepe molestias unde et fugiat corrupti cupiditate? Temporibus unde et itaque, molestiae alias fuga aperiam iure delectus optio ad nesciunt nisi.</p>
          <p class="animated bounceInRight" style="animation-delay: 3s;"><a class="view-more white-btn" href="#">Find more</a></p>
        </div>
      </div>
      <div class="swiper-slide" style="background-image: url(../img/mountain-3.jpg);">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated slideInDown" style="animation-delay: 1s;">Web Design</h5>
          <p class="animated fadeInUp" style="animation-delay: 2s;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque saepe molestias unde et fugiat </p>
          <p class="animated zoomIn" style="animation-delay: 3s;"><a class="view-more white-btn" href="#">Find more</a></p>
        </div>
      </div>
      <div class="swiper-slide" style="background-image: url(../img/winter-sport.jpg);">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated zoomIn" style="animation-delay: 1s;">Digital Marketing</h5>
          <p class="animated fadeInLeft" style="animation-delay: 2s;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque saepe molestias unde et fugiat corrupti cupiditate?</p>
          <p class="animated zoomIn" style="animation-delay: 3s;"><a class="view-more white-btn" href="#">Find more</a></p>
        </div>
      </div>
      <div class="swiper-slide" style="background-image: url(../img/gardening.jpg);">
        <div class="carousel-caption d-none d-md-block">
          <h5>Unique Moments</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque saepe molestias unde et fugiat corrupti cupiditate? Temporibus unde et itaque,</p>
          <p><a class="view-more white-btn" href="#">Find more</a></p>
        </div>
      </div>
      <div class="swiper-slide" style="background-image: url(../img/walking-v1.jpg);">
        <div class="carousel-caption d-none d-md-block">
          <h5>Walking for the adventure</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
          <p><a class="view-more white-btn" href="#">Find more</a></p>
        </div>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 8000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
<!--Swiper Autoplay-->

</body>

</html>

