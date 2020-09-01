<!DOCTYPE html>
<html lang="en">

<head>
  @include('util.head')
  <title>Albums</title>
</head>

<body>
@include('util.header')
<div class="swiper-slide" style="background-image: url({{asset('img/mission-2.jpg')}});">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated zoomIn" style="animation-delay: 1s;">Digital Marketing</h5>
          <p class="animated fadeInLeft" style="animation-delay: 2s;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque saepe molestias unde et fugiat corrupti cupiditate?</p>
          <p class="animated zoomIn" style="animation-delay: 3s;"><a class="view-more white-btn" href="#">Find more</a></p>
        </div>
      </div>









      <!-- SECTION 2-->
      <br><br>
			<section class="section-holder">
				<div class="container">
					<div class="short-portfolio-grid-holder">
						<ul class="portfolio-filter">
							<li><a class="view-more current" href="#" data-filter="*">Show All</a></li>
							<li><a class="view-more" href="#" data-filter=".nature">Nature</a></li>
							<li><a class="view-more" href="#" data-filter=".people">People</a></li>
							<li><a class="view-more" href="#" data-filter=".weddings">Weddings</a></li>
						</ul>
						<div class="port-grid port-grid-3cols">
							<div class="row layout-masonry">
								<div class="col-sm-6 col-lg-4 blog-item-masonry weddings">
									<div class="port-item-htext">
										<a href="portfolio-masonry-4cols-fullscreen.html">
											<div class="port-img"><img src="{{asset('img/portfolio/water-sports-01.jpg')}}" class="img-fluid" alt="Ellen &amp; James"></div>
											<div class="port-caption">
												<h3>Ellen &amp; James</h3>
												<ul class="portfolio-categ">
													<li>Weddings</li>
												</ul>
											</div>
											<div class="album-arrow-grid"></div>
										</a>
									</div>
								</div>
								<div class="col-sm-6 col-lg-4 blog-item-masonry weddings">
									<div class="port-item-htext">
										<a href="portfolio-masonry-3cols-fullscreen.html">
											<div class="port-img"><img src="{{asset('img/portfolio/water-sports-02.jpg')}}" class="img-fluid" alt="Sara &amp; David"></div>
											<div class="port-caption">
												<h3>Sara &amp; David</h3>
												<ul class="portfolio-categ">
													<li>Weddings</li>
												</ul>
											</div>
											<div class="album-arrow-grid"></div>
										</a>
									</div>
								</div>
								<div class="col-sm-6 col-lg-4 blog-item-masonry weddings">
									<div class="port-item-htext">
										<a href="portfolio-masonry-4cols.html">
											<div class="port-img"><img src="{{asset('img/portfolio/water-sports-03.jpg')}}" class="img-fluid" alt="Carla &amp; Mike"></div>
											<div class="port-caption">
												<h3>Carla &amp; Mike</h3>
												<ul class="portfolio-categ">
													<li>Weddings</li>
												</ul>
											</div>
											<div class="album-arrow-grid"></div>
										</a>
									</div>
								</div>
								<div class="col-sm-6 col-lg-4 blog-item-masonry people">
									<div class="port-item-htext">
										<a href="portfolio-masonry-3cols.html">
											<div class="port-img"><img src="{{asset('img/portfolio/water-sports-04.jpg')}}" class="img-fluid" alt="Black &amp; White"></div>
											<div class="port-caption">
												<h3>Black &amp; White</h3>
												<ul class="portfolio-categ">
													<li>People</li>
												</ul>
											</div>
											<div class="album-arrow-grid"></div>
										</a>
									</div>
								</div>
								<div class="col-sm-6 col-lg-4 blog-item-masonry people">
									<div class="port-item-htext">
										<a href="portfolio-grid-3cols-fullscreen.html">
											<div class="port-img"><img src="{{asset('img/portfolio/winter-sports-01.jpg')}}" class="img-fluid" alt="Bella Blue"></div>
											<div class="port-caption">
												<h3>Bella Blue</h3>
												<ul class="portfolio-categ">
													<li>People</li>
												</ul>
											</div>
											<div class="album-arrow-grid"></div>
										</a>
									</div>
								</div>
								<div class="col-sm-6 col-lg-4 blog-item-masonry nature">
									<div class="port-item-htext">
										<a href="portfolio-grid-4cols.html">
											<div class="port-img"><img src="{{asset('img/portfolio/winter-sports-05.jpg')}}" class="img-fluid" alt="White Buildings"></div>
											<div class="port-caption">
												<h3>White Buildings</h3>
												<ul class="portfolio-categ">
													<li>Nature</li>
												</ul>
											</div>
											<div class="album-arrow-grid"></div>
										</a>
									</div>
								</div>
								<div class="col-sm-6 col-lg-4 blog-item-masonry nature">
									<div class="port-item-htext">
										<a href="portfolio-grid-4cols-fullscreen.html">
											<div class="port-img"><img src="{{asset('img/portfolio/winter-sports-03.jpg')}}" class="img-fluid" alt="Summer Days"></div>
											<div class="port-caption">
												<h3>Summer Days</h3>
												<ul class="portfolio-categ">
													<li>Nature</li>
												</ul>
											</div>
											<div class="album-arrow-grid"></div>
										</a>
									</div>
								</div>
								<div class="col-sm-6 col-lg-4 blog-item-masonry nature">
									<div class="port-item-htext">
										<a href="portfolio-grid-3cols.html">
											<div class="port-img"><img src="{{asset('img/portfolio/winter-sports-04.jpg')}}" class="img-fluid" alt="Crazy Mood"></div>
											<div class="port-caption">
												<h3>Crazy Mood</h3>
												<ul class="portfolio-categ">
													<li>People</li>
												</ul>
											</div>
											<div class="album-arrow-grid"></div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /albums -->
				</div>
				<!-- /container -->
			</section>
			<!-- /SECTION 2-->

      


		<div class="page-holder custom-page-template page-full fullscreen-page clearfix">

		</div>
		<!-- page-content -->
		<!-- /PAGE CONTENT -->
		<div id="footer-instagram">
			<ul class="instagram-pics instagram-size-small">
				<li class=""><a href="#" target="_blank" class=""><img src="images/insta/insta-1.jpg" alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img src="images/insta/insta-2.jpg" alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img src="images/insta/insta-3.jpg" alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img src="images/insta/insta-4.jpg" alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img src="images/insta/insta-5.jpg" alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img src="images/insta/insta-6.jpg" alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img src="images/insta/insta-7.jpg" alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img src="images/insta/insta-8.jpg" alt=""/></a></li>
			</ul>
			<p class="clear"><a href="#" rel="me" target="_blank" class="">Follow Us!</a></p>
		</div>


@include('util.footer')
</body>

</html>