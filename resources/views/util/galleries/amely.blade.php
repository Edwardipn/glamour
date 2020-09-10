<!DOCTYPE html>
<html lang="en">

<head>
@include('util.head')
<title>Galería</title>
</head>

<body>
	<div class="container">
		<div class="whitebox">
			<div id="breadcrumbs">
				&lt;&lt;&nbsp;<a href="{{asset('galleries')}}" title="Slider">DEMO index</a>
			</div>

			<hr />
			<div id="my_thumb_slider">
				<div class="slides">
					<div class="slide active">
						<div class="col-sm-6 col-lg-4 port-item-htext">
							<a href="{{asset('img/amely/amely_730x1095_1.jpg')}}" class="" title="">
								<img class="" src="{{asset('img/amely/amely_730x1095_1.jpg')}}" alt="">
							</a>
						</div>
					</div>
					<div class="slide">
						<div class="col-sm-6 col-lg-4 port-item-htext">
							<a href="{{asset('img/amely/amely_730x1095_2.jpg')}}" class="" title="">
								<img class="" src="{{asset('img/amely/amely_730x1095_2.jpg')}}" alt="">
							</a>
						</div>
					</div>
					<div class="slide">
						<div class="col-sm-6 col-lg-4 port-item-htext">
							<a href="{{asset('img/amely/amely_730x1095_3.jpg')}}" class="" title="">
								<img class="" src="{{asset('img/amely/amely_730x1095_3.jpg')}}" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="controls">

			<!-- SECTION 2-->
			<section class="section-holder">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="port-masonry port-masonry-4cols">
								<div class="row layout-masonry">

									<div class="col-sm-6 col-lg-3 port-item-masonry control active">
										<div class="port-item-htext">
												<div class="port-img">
													<img src="{{asset('img/amely/amely_730x1095_1.jpg')}}" class="img-fluid" alt="Amely">
												</div>
												<div class="album-arrow"></div>
										</div>
									</div>
									<div class="col-sm-6 col-lg-3 port-item-masonry control">
										<div class="port-item-htext">
										<div class="port-img"><img src="{{asset('img/amely/amely_730x1095_2.jpg')}}" class="img-fluid" alt="Amely"></div>
												<div class="album-arrow"></div>
										</div>
									</div>
									<div class="col-sm-6 col-lg-3 port-item-masonry control">
										<div class="port-item-htext">
										<div class="port-img"><img src="{{asset('img/amely/amely_730x1095_3.jpg')}}" class="img-fluid" alt="Amely"></div>
												<div class="album-arrow"></div>
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
				</div>
			</div>
			<script type="text/javascript">
				/* define $ as jQuery just in case */
				(function($) {
					/* doc ready */
					$(function() {
						/* init the plugin */
						$('#my_thumb_slider').thumb_slider();
					});
				})(jQuery);
			</script>
			<hr />
		</div>
	</div>
</body>

</html>
