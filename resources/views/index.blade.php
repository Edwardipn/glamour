<!DOCTYPE html>
<html lang="en">

<head>
  @include('util.head')
  <title>Inicio</title>
</head>

<body>
@include('util.header')
<!--Swiper Autoplay-->
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image: url({{asset('img/portfolio/quinceanera-1.jpg')}});" >
        <div class="carousel-caption d-none d-md-block">
		<h5 class="animated zoomIn" style="animation-delay: 1s;">La mejor ilusión tus XV años</h5>
        </div>
      </div>
      <div class="swiper-slide" style="background-image: url({{asset('img/portfolio/quinceanera-2.jpg')}});">
        <div class="carousel-caption d-none d-md-block">
		<h6 class="animated zoomIn" style="animation-delay: 1s;">La mejor ilusión tus XV años</h5>
        </div>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
	<br>

	<div class="text-center">
		<p><img style="width: 400px;" src="{{asset('img/logos/slogan-completo.png')}}"></p>
	</div>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 5500,
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
<!--
<div class="menu-contact">
  <ul class="social-media">
    <li><a class="social-facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
    <li><a class="social-twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
    <li><a class="social-instagram" href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
  </ul>
</div>
-->

		<!-- PAGE CONTENT -->
		<div class="page-holder custom-page-template page-full fullscreen-page home-page-content clearfix">
			<!-- SECTION 1-->
			<section class="section-holder margin-b72 alignc">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 offset-lg-2">
							<h2 class="section-title margin-b32"></h2>
							<p>En la vida hay momentos que por sí mismos son especiales, pero siempre es mejor si puedes compartirlo con las personas a las que quieres. Por eso agradecemos que hoy estés aquí. ¡Bienvenid@!</p>
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

									<div class="col-sm-6 col-lg-3 blog-item-masonry port-item-masonry people">
										<div class="port-item-htext">
											<a href="{{asset('galleries')}}">
												<div class="port-img">
													<img src="{{asset('img/daimon/daimon_400x600_1.jpg')}}" class="img-fluid" alt="Daimon">
												</div>
												<div class="album-arrow"></div>
											</a>
										</div>
										<div class="port-caption-masonry">
											<h3><a href="{{asset('galleries')}}">Daimon</a></h3>
										</div>
									</div>
									<div class="col-sm-6 col-lg-3 blog-item-masonry port-item-masonry people">
										<div class="port-item-htext">
										<a href="{{asset('galleries')}}">
												<div class="port-img"><img src="{{asset('img/vicky/vicky_400x600_1.jpg')}}" class="img-fluid" alt="Vicky"></div>
												<div class="album-arrow"></div>
											</a>
										</div>
										<div class="port-caption-masonry">
											<h3><a href="{{asset('galleries')}}">Vicky</a></h3>
										</div>
									</div>
									<div class="col-sm-6 col-lg-3 blog-item-masonry port-item-masonry nature">
										<div class="port-item-htext">
										<a href="{{asset('galleries')}}">
												<div class="port-img"><img src="{{asset('img/jane/jane_400x600_1.jpg')}}" class="img-fluid" alt="Jane"></div>
												<div class="album-arrow"></div>
											</a>
										</div>
										<div class="port-caption-masonry">
											<h3><a href="{{asset('galleries')}}">Jane</a></h3>
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
			<section class="parallax section-holder" style="background-image:url({{asset('img/portfolio/xv-girl-5.jpg')}});">
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
							<h2 class="section-title margin-b32">Revisa nuestra galería</h2>
							<p>We love photography and travel for meeting new beautiful people all over the world. Propriae voluptaria dissentias nam ei, posse diceret inciderint cum ut, gubergren sadipscing ei vim. Ancillae torquatos in nec.</p>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</section>
			<!-- /SECTION 4-->

			<!-- SECTION 6-->
			<section class="home-section6">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-8">
							<h3 class="section-title margin-bm32">Somos Fille á Femme con sede en Ciudad de México.</h3>
						</div>
						<div class="col-lg-4 alignr">
							<a href="{{asset('contact')}}" class="read-more">Contactanos</a>
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