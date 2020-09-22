<!DOCTYPE html>
<html lang="en">

<head>
	@include('util.head')
	<!-- Scripts -->
	<script>
		(function() {
			$(function() {
				$('#nic--popup').on('click', function() {
					$('#popup-nic').modal();
				});
			});
		}());
	</script>
	<title>LST-270</title>
</head>

<body>

	<!--Modal Bootstrap-->
	<div class="modal" tabindex="-1" role="dialog" id="popup-nic">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<!--
		<a href="{{asset('galleries')}}" class="close" >
			<span aria-hidden="true">&times;</span>
		</a>
		-->
				</div>
				<div class="modal-body">


					<div class="container">
						<div class="whitebox">



							<div id="my_thumb_slider">
								<div class="slides">
									<div class="slide active">
										<div class="col port-item-htext">
											<a href="{{asset('img/LST-270/LST-270_7300x1095_1.jpg')}}" class="" title="">
												<img class="img-fluid" src="{{asset('img/LST-270/LST-270_7300x1095_1.jpg')}}" alt="">
											</a>
										</div>
									</div>
									<div class="slide">
										<div class="col port-item-htext">
											<a href="{{asset('img/LST-270/LST-270_7300x1095_2.jpg')}}" class="" title="">
												<img class="img-fluid" src="{{asset('img/LST-270/LST-270_7300x1095_2.jpg')}}" alt="">
											</a>
										</div>
									</div>
									<div class="slide">
										<div class="col port-item-htext">
											<a href="{{asset('img/LST-270/LST-270_7300x1095_3.jpg')}}" class="" title="">
												<img class="img-fluid" src="{{asset('img/LST-270/LST-270_7300x1095_3.jpg')}}" alt="">
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

															<div class="col port-item-masonry control active">
																<div class="port-item-htext">
																	<div class="port-img">
																		<img src="{{asset('img/LST-270/LST-270_7300x1095_1.jpg')}}" class="img-fluid" alt="Amely">
																	</div>

																</div>
															</div>
															<div class="col port-item-masonry control">
																<div class="port-item-htext">
																	<div class="port-img"><img src="{{asset('img/LST-270/LST-270_7300x1095_2.jpg')}}" class="img-fluid" alt="Amely"></div>

																</div>
															</div>
															<div class="col port-item-masonry control">
																<div class="port-item-htext">
																	<div class="port-img"><img src="{{asset('img/LST-270/LST-270_7300x1095_3.jpg')}}" class="img-fluid" alt="Amely"></div>

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

						</div>
					</div>

				</div>
				<div class="modal-footer">
					<p><a class="view-more white-btn" href="{{asset('galleries')}}">Close</a></p>
				</div>
			</div>
		</div>
	</div>

	<!--Modal Bootstrap-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>