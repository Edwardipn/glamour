<!DOCTYPE html>
<html lang="en">

<head>
	@include('util.head')
	<!-- Scripts -->

	<title>LST-230</title>
</head>

<body>


	<!--Modal Bootstrap-->
	<div class="modal" tabindex="-1" role="dialog" id="popup-ame">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title title_modal text-dark" id="exampleModalLabel">LST 230-1</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="container">
						<div class="whitebox">
							<div id="my_thumb_slider">
								<div id="slides">
									<div class="slide active">
										<div class="col port-item-htext">
											<a href="{{asset('img/LST-230/LST-230_730x1095_1.jpg')}}" class="" title="">
												<img class="img-fluid" src="{{asset('img/LST-230/LST-230_730x1095_1.jpg')}}">
											</a>
										</div>
									</div>

									<div class="slide">
										<div class="col port-item-htext">
											<a href="{{asset('img/LST-230/LST-230_730x1095_2.jpg')}}" class="" title="">
												<img class="img-fluid" src="{{asset('img/LST-230/LST-230_730x1095_2.jpg')}}" alt="">
											</a>
										</div>
									</div>
									<div class="slide">
										<div class="col port-item-htext">
											<a href="{{asset('img/LST-230/LST-230_730x1095_3.jpg')}}" class="" title="">
												<img class="img-fluid" src="{{asset('img/LST-230/LST-230_730x1095_3.jpg')}}" alt="">
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
																		<img src="{{asset('img/LST-230/LST-230_730x1095_1.jpg')}}" class="img-fluid" alt="LST-230">
																	</div>
																</div>
															</div>
															<div class="col port-item-masonry control">
																<div class="port-item-htext">
																	<div class="port-img"><img src="{{asset('img/LST-230/LST-230_730x1095_2.jpg')}}" class="img-fluid" alt="LST-230"></div>

																</div>
															</div>
															<div class="col port-item-masonry control">
																<div class="port-item-htext">
																	<div class="port-img"><img src="{{asset('img/LST-230/LST-230_730x1095_3.jpg')}}" class="img-fluid" alt="LST-230"></div>
																</div>
															</div>
														</div>
													</div>
													<!-- /port-masonry-4cols -->
												</div>
												<!-- /col-lg -->
											</div>
											<div class="col port-item-masonry" style="padding-top: 40px;">
												<div class="port-item-htext">
													<div class="port-img">
														<ul>
															<h4>Para todos los vertidos:</h4>
															<li>Contamos con colores de moda (bluss, rosa baby, palo de rosa, negro, vino, etc.)</li>
															<li>Con detalles de cristal para que puedas lucir de forma espectacular.</li>
															<li>La tiara y el collar hacen un hermoso complemento de brillo para tu vestido.</li>
															<li>Las flores 3D hacen ese toque genial.</li>
															<li>Nos adaptamos a tu presupuesto.</li>
															<li>Trabajamos por talla y sobre medida.</li>
															<li>Confeccionamos con alta costura</li>
															<li>Asi mismo la tela es de alta calidad</li>
															<li>Contamos con sistema de apartado</li>
														</ul>
													</div>
												</div>
											</div>
											<!-- /row -->
											<br>
											<div class="row">
												<div class="col">
													<span class="text-black color-blanco" style="font-size: 30px;padding-left: 10px;">
														<a href="https://www.facebook.com/FilleaFemme">
															<i class="fab fa-facebook-f"></i>
														</a>
													</span>
													<span class="text-black color-blanco" style="font-size: 30px;padding-left: 10px;">
														<a href="">
															<i class="fab fa-twitter"></i>
														</a>
													</span>
													<span class="text-black color-blanco" style="font-size: 30px;padding-left: 10px;">
														<a href="">
															<i class="fab fa-instagram"></i>
														</a>
													</span>
													<span class="text-black color-blanco" style="font-size: 30px;padding-left: 10px;">
														<a href="">
															<i class="fab fa-linkedin"></i>
														</a>
													</span>
													<span class="text-black color-blanco" style="font-size: 30px;padding-left: 10px;">
														<a href="">
															<i class="fab fa-pinterest"></i>
														</a>
													</span>
													<span class="text-black color-blanco" style="font-size: 30px;padding-left: 10px;">
														<a href="">
															<i class="fab fa-whatsapp"></i>
														</a>
													</span>
												</div>
											</div>
										</div>
										<!-- /container -->
									</section>
									<!-- /SECTION 2-->
								</div>
							</div>
							<script type="text/javascript">
								(function() {
									$(function() {
										$('#ame-popup').on('click', function() {
											$('#popup-ame').modal();
											$('#my_thumb_slider').thumb_slider();
										});
									});
								}());
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