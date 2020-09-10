<!DOCTYPE html>
<html lang="en">

<head>
  @include('util.head')
  <title>Álbumes</title>
</head>

<body>
@include('util.header')


      <!-- SECTION 2-->
      <br><br>
			<section class="section-holder-albums">
				<div class="container">
					<div class="short-portfolio-grid-holder">
						<div class="port-grid port-grid-3cols">
							<div class="row layout-masonry">
								<div class="col-sm-6 col-lg-4 blog-item-masonry weddings">
									<div class="port-item-htext">
									<a href="album-2">
											<div class="port-img"><img src="{{asset('img/fotos1/amely-3.JPG')}}" class="img-fluid" alt="Ellen &amp; James"></div>
											<div class="port-caption">
												<h3>Amely</h3>
											</div>
											<div class="album-arrow-grid"></div>
										</a>
									</div>
								</div>
								<div class="col-sm-6 col-lg-4 blog-item-masonry weddings">
									<div class="port-item-htext">
										<a href="album-2">
											<div class="port-img"><img src="{{asset('img/fotos1/daimon-1.JPG')}}" class="img-fluid" alt="Sara &amp; David"></div>
											<div class="port-caption">
												<h3>Daimon</h3>
											</div>
											<div class="album-arrow-grid"></div>
										</a>
									</div>
								</div>
								<div class="col-sm-6 col-lg-4 blog-item-masonry weddings">
									<div class="port-item-htext">
										<a href="album-3">
											<div class="port-img"><img src="{{asset('img/fotos2/vicky-3.jpg')}}" class="img-fluid" alt="Carla &amp; Mike"></div>
											<div class="port-caption">
												<h3>Vicky</h3>
											</div>
											<div class="album-arrow-grid"></div>
										</a>
									</div>
								</div>
								<div class="col-sm-6 col-lg-4 blog-item-masonry people">
									<div class="port-item-htext">
										<a href="{{asset('album-4')}}">
											<div class="port-img"><img src="{{asset('img/fotos3/jane-1.jpg')}}" class="img-fluid" alt="Black &amp; White"></div>
											<div class="port-caption">
												<h3>Jane</h3>
											</div>
											<div class="album-arrow-grid"></div>
										</a>
									</div>
								</div>
								<div class="col-sm-6 col-lg-4 blog-item-masonry people">
									<div class="port-item-htext">
										<a href="album-5">
											<div class="port-img"><img src="{{asset('img/fotos3/nicol-3.JPG')}}" class="img-fluid" alt="Bella Blue"></div>
											<div class="port-caption">
												<h3>Nicol</h3>
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


@include('util.footer')
</body>

</html>