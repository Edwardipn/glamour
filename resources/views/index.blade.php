<!DOCTYPE html>
<html lang="en">

<head>
  @include('util.head')
  <title>Home</title>
</head>

<body>
@include('util.header')
<!--Swiper Autoplay-->
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image: url({{asset('img/mission-2.jpg')}});" >
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated bounceInRight" style="animation-delay: 1s;">Web Development</h5>
          <p class="animated bounceInLeft" style="animation-delay: 2s;">Atque saepe molestias unde et fugiat corrupti cupiditate? Temporibus unde et itaque, molestiae alias fuga aperiam iure delectus optio ad nesciunt nisi.</p>
          <p class="animated bounceInRight" style="animation-delay: 3s;"><a class="view-more white-btn" href="#">Find more</a></p>
        </div>
      </div>
      <div class="swiper-slide" style="background-image: url({{asset('img/mountain-3.jpg')}});">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated slideInDown" style="animation-delay: 1s;">Web Design</h5>
          <p class="animated fadeInUp" style="animation-delay: 2s;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque saepe molestias unde et fugiat </p>
          <p class="animated zoomIn" style="animation-delay: 3s;"><a class="view-more white-btn" href="#">Find more</a></p>
        </div>
      </div>
      <div class="swiper-slide" style="background-image: url({{asset('img/hiking-v1.jpg')}});">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated zoomIn" style="animation-delay: 1s;">Digital Marketing</h5>
          <p class="animated fadeInLeft" style="animation-delay: 2s;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque saepe molestias unde et fugiat corrupti cupiditate?</p>
          <p class="animated zoomIn" style="animation-delay: 3s;"><a class="view-more white-btn" href="#">Find more</a></p>
        </div>
      </div>
      <div class="swiper-slide" style="background-image: url({{asset('img/walking-v1.jpg')}});">
        <div class="carousel-caption d-none d-md-block">
          <h5>Walking for the adventure</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
          <p><a class="view-more white-btn" href="#">Find more</a></p>
        </div>
      </div>
    </div>
    <div class="swiper-slide" style="background-image: url({{asset('img/gardening.jpg')}});">
        <div class="carousel-caption d-none d-md-block">
          <h5>Unique Moments</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque saepe molestias unde et fugiat corrupti cupiditate? Temporibus unde et itaque,</p>
          <p><a class="view-more white-btn" href="#">Find more</a></p>
        </div>
      </div>
      <div class="swiper-slide" style="background-image: url({{asset('img/services-3.jpg')}});">
        <div class="carousel-caption d-none d-md-block">
          <h5>Unique Moments</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque saepe molestias unde et fugiat corrupti cupiditate? Temporibus unde et itaque,</p>
          <p><a class="view-more white-btn" href="#">Find more</a></p>
        </div>
      </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <div class="text-center topmargin-sm">
    <p>– Adam Sendler</p>
  </div>
<!--
  <section id="portfolio">
    <div class="container-fluid">
      <div class="content-center">
          <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem, aliquam? Iure quidem, explicabo obcaecati omnis sequi ullam libero numquam dolor, repellendus rem facilis ducimus voluptatum quia, temporibus quam accusantium fugit.</p>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="portfolio-container">
            <img src="{{asset('img/portfolio/camp-1.jpg')}}" class="img-thumbnail" alt="portfolio 1">
            <div class="portfolio-details">
              <div class="content-center">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem, aliquam? Iure quidem, explicabo obcaecati omnis sequi ullam libero numquam dolor, repellendus rem facilis ducimus voluptatum quia, temporibus quam accusantium fugit.</p>
              </div>  
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="portfolio-container">
            <img src="{{asset('img/portfolio/camp-2.jpg')}}" class="img-fluid" alt="portfolio 2">
            <div class="portfolio-details">
              <div class="content-center">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem, aliquam? Iure quidem, explicabo obcaecati omnis sequi ullam libero numquam dolor, repellendus rem facilis ducimus voluptatum quia, temporibus quam accusantium fugit.</p>
              </div>  
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="portfolio-container">
            <img src="{{asset('img/portfolio/camp-3.jpg')}}" class="img-fluid" alt="portfolio 3">
            <div class="portfolio-details">
              <div class="content-center">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem, aliquam? Iure quidem, explicabo obcaecati omnis sequi ullam libero numquam dolor, repellendus rem facilis ducimus voluptatum quia, temporibus quam accusantium fugit.</p>
              </div>  
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="portfolio-container">
            <img src="{{asset('img/portfolio/camp-4.jpg')}}" class="img-fluid" alt="portfolio 4">
            <div class="portfolio-details">
              <div class="content-center">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem, aliquam? Iure quidem, explicabo obcaecati omnis sequi ullam libero numquam dolor, repellendus rem facilis ducimus voluptatum quia, temporibus quam accusantium fugit.</p>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
-->

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

<!--Menu Social-->
<div class="menu-contact">
  <ul class="social-media">
    <li><a class="social-facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
    <li><a class="social-twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
    <li><a class="social-instagram" href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
  </ul>
</div>









































		<!-- PAGE CONTENT -->
		<div class="page-holder custom-page-template page-full fullscreen-page home-page-content clearfix">
			<!-- SECTION 1-->
			<section class="section-holder margin-b72 alignc">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 offset-lg-2">
							<h2 class="section-title margin-b32">We're Gleam a small and enthusiastic photography studio based in New York</h2>
							<p>We love photography and travel for meeting new beautiful people all over the world. Propriae voluptaria dissentias nam ei, posse diceret inciderint cum ut, gubergren sadipscing ei vim. Ancillae torquatos in nec.</p>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</section>
			<!-- /SECTION 1-->
			<!-- SECTION 2-->
			<section class="section-holder">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="port-masonry port-masonry-4cols">
								<div class="row layout-masonry">
									<div class="col-sm-6 col-lg-3 blog-item-masonry port-item-masonry weddings">
										<div class="port-item-htext">
											<a href="{{asset('galleries')}}">
												<div class="port-img"><img src="{{asset('img/portfolio/winter-sports-04.jpg')}}" class="img-fluid" alt="Ellen &amp; James"></div>
												<div class="album-arrow"></div>
											</a>
										</div>
										<div class="port-caption-masonry">
											<h3><a href="{{asset('galleries')}}">Ellen &amp; James</a></h3>
											<ul class="port-categ-masonry">
												<li><a href="#">Weddings</a></li>
											</ul>
										</div>
									</div>
									<div class="col-sm-6 col-lg-3 blog-item-masonry port-item-masonry weddings">
										<div class="port-item-htext">
											<a href="{{asset('galleries')}}">
												<div class="port-img"><img src="{{asset('img/portfolio/water-sports-01.jpg')}}" class="img-fluid" alt="Sara &amp; David"></div>
												<div class="album-arrow"></div>
											</a>
										</div>
										<div class="port-caption-masonry">
											<h3><a href="{{asset('galleries')}}">Sara &amp; David</a></h3>
											<ul class="port-categ-masonry">
												<li><a href="#">Weddings</a></li>
											</ul>
										</div>
									</div>
									<div class="col-sm-6 col-lg-3 blog-item-masonry port-item-masonry weddings">
										<div class="port-item-htext">
											<a href="{{asset('galleries')}}">
												<div class="port-img"><img src="{{asset('img/portfolio/water-sports-02.jpg')}}" class="img-fluid" alt="Carla &amp; Mike"></div>
												<div class="album-arrow"></div>
											</a>
										</div>
										<div class="port-caption-masonry">
											<h3><a href="{{asset('galleries')}}">Carla &amp; Mike</a></h3>
											<ul class="port-categ-masonry">
												<li><a href="#">Weddings</a></li>
											</ul>
										</div>
									</div>
									<div class="col-sm-6 col-lg-3 blog-item-masonry port-item-masonry people">
										<div class="port-item-htext">
											<a href="{{asset('galleries')}}">
												<div class="port-img"><img src="{{asset('img/portfolio/water-sports-03.jpg')}}" class="img-fluid" alt="Black &amp; White"></div>
												<div class="album-arrow"></div>
											</a>
										</div>
										<div class="port-caption-masonry">
											<h3><a href="{{asset('galleries')}}">Black &amp; White</a></h3>
											<ul class="port-categ-masonry">
												<li><a href="#">People</a></li>
											</ul>
										</div>
									</div>
									<div class="col-sm-6 col-lg-3 blog-item-masonry port-item-masonry people">
										<div class="port-item-htext">
										<a href="{{asset('galleries')}}">
												<div class="port-img"><img src="{{asset('img/portfolio/water-sports-04.jpg')}}" class="img-fluid" alt="Bella Blue"></div>
												<div class="album-arrow"></div>
											</a>
										</div>
										<div class="port-caption-masonry">
											<h3><a href="{{asset('galleries')}}">Bella Blue</a></h3>
											<ul class="port-categ-masonry">
												<li><a href="#">People</a></li>
											</ul>
										</div>
									</div>
									<div class="col-sm-6 col-lg-3 blog-item-masonry port-item-masonry nature">
										<div class="port-item-htext">
										<a href="{{asset('galleries')}}">
												<div class="port-img"><img src="{{asset('img/portfolio/winter-sports-01.jpg')}}" class="img-fluid" alt="White Buildings"></div>
												<div class="album-arrow"></div>
											</a>
										</div>
										<div class="port-caption-masonry">
											<h3><a href="{{asset('galleries')}}">White Buildings</a></h3>
											<ul class="port-categ-masonry">
												<li><a href="#">Nature</a></li>
											</ul>
										</div>
									</div>
									<div class="col-sm-6 col-lg-3 blog-item-masonry port-item-masonry nature">
										<div class="port-item-htext">
										<a href="{{asset('galleries')}}">
												<div class="port-img"><img src="{{asset('img/portfolio/winter-sports-02.jpg')}}" class="img-fluid wp-post-image" alt="Summer Days"></div>
												<div class="album-arrow"></div>
											</a>
										</div>
										<div class="port-caption-masonry">
											<h3><a href="{{asset('galleries')}}">Summer Days</a></h3>
											<ul class="port-categ-masonry">
												<li><a href="#">Nature</a></li>
											</ul>
										</div>
									</div>
									<div class="col-sm-6 col-lg-3 blog-item-masonry port-item-masonry people">
										<div class="port-item-htext">
										<a href="{{asset('galleries')}}">
												<div class="port-img"><img src="{{asset('img/portfolio/winter-sports-03.jpg')}}" class="img-fluid wp-post-image" alt="Crazy Mood"></div>
												<div class="album-arrow"></div>
											</a>
										</div>
										<div class="port-caption-masonry">
											<h3><a href="{{asset('galleries')}}">Crazy Mood</a></h3>
											<ul class="port-categ-masonry">
												<li><a href="#">People</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- /port-masonry-4cols -->
						</div>
						<!-- /col-lg -->
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</section>
			<!-- /SECTION 2-->
			<!-- SECTION 3-->
			<section class="parallax section-holder" style="background-image:url({{asset('img/sunflowers.jpg')}});">
				<div class="container parallax-content alignc">
					<div class="row">
						<div class="col-lg-8 offset-lg-2">
              <h2 class="section-title testimonial-text white">Misión</h2>
							<h4 class="section-title testimonial-text margin-b32">Diseñar vestidos de XV años con calidad y tendencia actualizada para las jóvenes y necesidades de cada persona.</h4>
              <br>
              <h2 class="section-title testimonial-text white">Visión</h2>
              <h4 class="section-title testimonial-text margin-b32">Ser líderes en innovación y diseño ofreciendo la mejor experiencia para que cada evento sea inolvidable</h4>
						</div>
					</div>
				</div>
			</section>
			<!-- /SECTION 3-->
			<!-- SECTION 4-->
			<section class="section-holder margin-b72 alignc">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 offset-lg-2">
							<h2 class="section-title margin-b32">Read Our Blog</h2>
							<p>We love photography and travel for meeting new beautiful people all over the world. Propriae voluptaria dissentias nam ei, posse diceret inciderint cum ut, gubergren sadipscing ei vim. Ancillae torquatos in nec.</p>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</section>
			<!-- /SECTION 4-->
			<!-- SECTION 5-->
			<section class="section-holder section-home15 alignc">
				<div class="container">
					<div class="short-blog-3col-grid">
						<div class="row">
							<div class="col-lg-4">
								<article class="blog-item blog-item-3col-grid">
									<div class="post-image"><a href="blog-single-post.html"><img src="{{asset('img/portfolio/camp-1.jpg')}}" class="img-fluid" alt="Lovely Wedding"></a></div>
									<div class="post-holder">
										<h2 class="article-title"><a href="blog-single-post.html">Lovely Wedding</a></h2>
										<ul class="post-meta">
											<li class="meta-date">August 20, 2019</li>
											<li class="meta-categ"> <a href="#">News</a> <a href="#">Portraits</a></li>
										</ul>
										<div class="article-excerpt">Arnare varius mauris eu commodo. Aenean nibh risus, rhoncus eget consectetur ac. Consectetur adipiscing elit. Vivamus auctor condimentum sem et ...</div>
									</div>
								</article>
							</div>
							<div class="col-lg-4">
								<article class="blog-item blog-item-3col-grid">
									<div class="post-image"><a href="blog-single-post.html"><img src="{{asset('img/portfolio/camp-2.jpg')}}" class="img-fluid" alt="New Dress Collection"></a></div>
									<div class="post-holder">
										<h2 class="article-title"><a href="blog-single-post.html">New Dress Collection</a></h2>
										<ul class="post-meta">
											<li class="meta-date">August 18, 2019</li>
											<li class="meta-categ"> <a href="#">Fashion</a> <a href="#">News</a></li>
										</ul>
										<div class="article-excerpt">Arnare varius mauris eu commodo. Aenean nibh risus, rhoncus eget consectetur ac. Consectetur adipiscing elit. Vivamus auctor condimentum sem et ...</div>
									</div>
								</article>
							</div>
							<div class="col-lg-4">
								<article class="blog-item blog-item-3col-grid">
									<div class="post-image"><a href="blog-single-post.html"><img src="{{asset('img/portfolio/camp-3.jpg')}}" class="img-fluid" alt="Family Moments"></a></div>
									<div class="post-holder">
										<h2 class="article-title"><a href="blog-single-post.html">Family Moments</a></h2>
										<ul class="post-meta">
											<li class="meta-date">August 16, 2019</li>
											<li class="meta-categ"> <a href="#">News</a></li>
										</ul>
										<div class="article-excerpt">Arnare varius mauris eu commodo. Aenean nibh risus, rhoncus eget consectetur ac. Consectetur adipiscing elit. Vivamus auctor condimentum sem et ...</div>
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>
				<!-- /container -->
			</section>
			<!-- /SECTION 5-->
			<!-- SECTION 6-->
			<section class="home-section6">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-8">
							<h3 class="section-title margin-bm32">We love meeting new people. If you want to work with us send a message.</h3>
						</div>
						<div class="col-lg-4 alignr">
							<a href="#" class="read-more">Contact Us</a>
						</div>
					</div>
				</div>
			</section>
			<!-- /SECTION 6-->
		</div>
		<!-- home-page-content -->
		<!-- /PAGE CONTENT -->


		<div class="scrollup">
			<a class="scrolltop" href="#">
			<i class="fa fa-chevron-up"></i>
			</a>
		</div>

@include('util.footer')
</body>

</html>