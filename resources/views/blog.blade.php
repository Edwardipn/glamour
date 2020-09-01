<!DOCTYPE html>
<html lang="en">

<head>
  @include('util.head')
  <title>Blog</title>
</head>

<body>
@include('util.header')
<div class="swiper-slide" style="background-image: url({{asset('img/services-3.jpg')}});">
        <div class="carousel-caption d-none d-md-block">
          <h5>Unique Moments</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque saepe molestias unde et fugiat corrupti cupiditate? Temporibus unde et itaque,</p>
          <p><a class="view-more white-btn" href="#">Find more</a></p>
        </div>
      </div>
<h1>blog</h1>
@include('util.footer')
</body>

</html>