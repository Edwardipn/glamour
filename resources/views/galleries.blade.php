<!DOCTYPE html>
<html lang="en">

<head>
  @include('util.head')
  <title>Galería</title>
</head>
<body>
@include('util.header')

		<!-- PAGE CONTENT -->

		<div class="page-holder custom-page-template page-full fullscreen-page clearfix">
			<!-- SECTION 2-->
			<section class="section-holder-galleries">
				<div class="gallery-container">
					<div class="fullscreen-container fs-gallery">
						<div class="row gallery-holder gallery-grid3cols">
							<div class="col-sm-6 col-lg-4 blog-item-masonry weddings">
								<div class="port-item-htext">
									<a href="{{asset('g-ame')}}">
										<div class="port-img"><img src="{{asset('img/amely/amely_400x600_1.jpg')}}" class="img-fluid" alt="Amely"></div>
										<div class="port-caption">
											<h3>Amely</h3>
										</div>
										<div class="album-arrow-grid"></div>
									</a>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 blog-item-masonry weddings">
								<div class="port-item-htext">
									<a href="{{asset('g-dai')}}">
										<div class="port-img"><img src="{{asset('img/daimon/daimon_400x600_1.jpg')}}" class="img-fluid" alt="Daimon"></div>
										<div class="port-caption">
											<h3>Daimon</h3>
										</div>
										<div class="album-arrow-grid"></div>
									</a>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 blog-item-masonry weddings">
								<div class="port-item-htext">
									<a href="{{asset('g-jan')}}">
										<div class="port-img"><img src="{{asset('img/jane/jane_400x600_1.jpg')}}" class="img-fluid" alt="Jane"></div>
										<div class="port-caption">
											<h3>Jane</h3>
										</div>
										<div class="album-arrow-grid"></div>
									</a>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 blog-item-masonry weddings">
								<div class="port-item-htext">
									<a href="{{asset('g-lil')}}">
										<div class="port-img"><img src="{{asset('img/lilan/lilan_400x600_1.JPG')}}" class="img-fluid" alt="Lilan"></div>
										<div class="port-caption">
											<h3>Lilan</h3>
										</div>
										<div class="album-arrow-grid"></div>
									</a>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 blog-item-masonry weddings">
								<div class="port-item-htext">
									<a href="{{asset('g-nic')}}">
										<div class="port-img"><img src="{{asset('img/nicol/nicol_400x600_1.jpg')}}" class="img-fluid" alt="Nicol"></div>
										<div class="port-caption">
											<h3>Nicol</h3>
										</div>
										<div class="album-arrow-grid"></div>
									</a>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 blog-item-masonry weddings">
								<div class="port-item-htext">
									<a href="{{asset('g-tab')}}">
										<div class="port-img"><img src="{{asset('img/tabata/tabata_400x600_1.jpg')}}" class="img-fluid" alt="Tabata"></div>
										<div class="port-caption">
											<h3>Tabata</h3>
										</div>
										<div class="album-arrow-grid"></div>
									</a>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 blog-item-masonry weddings">
								<div class="port-item-htext">
									<a href="{{asset('g-vic')}}">
										<div class="port-img"><img src="{{asset('img/vicky/vicky_400x600_1.jpg')}}" class="img-fluid" alt="Vicky"></div>
										<div class="port-caption">
											<h3>Vicky</h3>
										</div>
										<div class="album-arrow-grid"></div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /container -->
				</div>
			</section>
			<!-- /SECTION 2-->
		</div>
		<!-- /PAGE CONTENT -->
		@include('util.footer')
	</body>
</html>