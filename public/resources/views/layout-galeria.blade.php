<!--Modal Bootstrap-->
<div class="modal" tabindex="-1" role="dialog" id="popup">

	<!-- modal-dialog -->
	<div class="modal-dialog modal-lg" role="document">

		<!-- modal-content -->
		<div class="modal-content">

			<!-- modal-header -->
			<div class="modal-header">
				<h5 class="modal-title title_modal text-dark" id="exampleModalLabel"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<!-- modal-header -->

			<!-- modal-body -->
			<div class="modal-body">
				<!-- container -->
				<div class="container">

					<!-- whitebox -->
					<div class="whitebox">

						<!-- my_thumb_slider -->
						<div id="my_thumb_slider">

							<!-- slides -->
							<div id="slides">
								<div class="slide active">
									<div class="col port-item-htext"> <a id="link1" href=""> <img id="imagen1" class="img-fluid" src="" alt="imagen 1"> </a></div>
								</div>
								<div class="slide">
									<div class="col port-item-htext"> <a id="link2" href=""> <img id="imagen2" class="img-fluid" src="" alt="imagen 2"> </a></div>
								</div>
								<div id="slide3" class="slide">
									<div class="col port-item-htext"> <a id="link3" href=""> <img id="imagen3" class="img-fluid" src="" alt="imagen 3"> </a></div>
								</div>
							</div>
							<!-- slides -->
							<!-- controls -->
							<div class="controls">
								<section class="section-holder">
									<div class="container">
										<div class="row">
											<div class="col-lg-12">
												<div class="port-masonry port-masonry-4cols">
													<div class="row layout-masonry" id="controls">
														<div class="col port-item-masonry control active">
															<div class="port-item-htext">
																<div class="port-img"> <img id="imagen1chica" class="img-fluid" src="" alt="imagen 1"> </div>
															</div>
														</div>
														<div class="col port-item-masonry control">
															<div class="port-item-htext">
																<div class="port-img"> <img id="imagen2chica" class="img-fluid" src="" alt="imagen 2"> </div>
															</div>
														</div>
														<div id="control3" class="col port-item-masonry control">
															<div class="port-item-htext">
																<div class="port-img"> <img id="imagen3chica" class="img-fluid" src="" alt="imagen 3"> </div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
							<!-- controls -->

						</div>
						<!-- my_thumb_slider -->

						<!-- port-item-masonry -->
						<div class="col port-item-masonry">
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
						<!-- port-item-masonry -->

						<!-- redes sociales -->
						<div class="row">
							<div class="col">
								<span class="text-black color-blanco" style="font-size: 30px;padding-left: 10px;">
									<a href="https://www.facebook.com/FilleaFemme">
										<i class="fab fa-facebook-f"></i>
									</a>
								</span>
								<span class="text-black color-blanco" style="font-size: 30px;padding-left: 10px;">
									<a href="https://twitter.com/vestidosxvdf">
										<i class="fab fa-twitter"></i>
									</a>
								</span>
								<span class="text-black color-blanco" style="font-size: 30px;padding-left: 10px;">
									<a href="https://instagram.com/vestidosxvdf?igshid=6n545v3wy7r1">
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
						<!-- redes sociales -->

					</div>
					<!-- whitebox -->
				</div>
				<!-- container -->
			</div>
			<div class="modal-footer">
				<p><a class="view-more white-btn" href="{{asset('galleries')}}">Close</a></p>
			</div>
		</div>
	</div>
</div>
</div>

<!--Modal Bootstrap-->

<script type="text/javascript">
	$(document).ready(function() {
		$(".select-modal-imagen").click(function() {
			let nombre = $(this).data("nombre");
			let cantidad = $(this).data("cantidad");
			let href = "";
			let cadena = "";

			if (cantidad == 2) {
				$("#slide3").addClass("d-none");
				$("#control3").addClass("d-none");
			} else {
				$("#slide3").removeClass("d-none");
				$("#control3").removeClass("d-none");
			}

			for (var i = 1; i <= cantidad; i++) {

				href = "https://filleafemme.com.mx/img/" + nombre + "/" + nombre + "_730x1095_" + i + ".jpg";

				$("#imagen" + i).attr("src", href);
				$("#link" + i).attr("href", href);
			}

			for (var i = 1; i <= cantidad; i++) {

				href = "https://filleafemme.com.mx/img/" + nombre + "/" + nombre + "_730x1095_" + i + ".jpg";

				$("#imagen" + i + "chica").attr("src", href);
			}

			$(".title_modal").text(nombre.toUpperCase());
			//$("#my_thumb_slider").html(cadena);

		});
	});
</script>