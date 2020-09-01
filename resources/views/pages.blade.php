<!DOCTYPE html>
<html lang="en">

<head>
  @include('util.head')
  <title>Pages</title>
</head>

<body>
@include('util.header')
<div class="swiper-slide" style="background-image: url({{asset('img/mountain-3.jpg')}});">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated slideInDown" style="animation-delay: 1s;">Web Design</h5>
          <p class="animated fadeInUp" style="animation-delay: 2s;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque saepe molestias unde et fugiat </p>
          <p class="animated zoomIn" style="animation-delay: 3s;"><a class="view-more white-btn" href="#">Find more</a></p>
        </div>
      </div>
<h1>pages</h1>
@include('util.footer')
</body>

</html>