@extends('layout')
@section('title','Colecciones 2020')

@section('content')

<!-- PAGE CONTENT -->

<div class="page-holder custom-page-template page-full fullscreen-page clearfix">
	<!-- SECTION 2-->
	<section class="section-holder-galleries">

		<!-- SECTION 4-->
		<section class="section-holder margin-b72 alignc">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2">
						<h1 class="section-title" style="padding-top: 30px;">Colecciones 2020</h1>
						<h4>Siente la magia con nuestros vestidos y luce como princesa en tu gran día.</h4>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</section>
		<!-- /SECTION 4-->

		<div class="gallery-container">
			<div class="fullscreen-container fs-gallery">

				<div class="row gallery-holder gallery-grid3cols">

					<div class="col-sm-6 col-lg-4 blog-item-masonry">
						<div class="port-item-htext select-modal-imagen" data-toggle="modal" data-target="#popup" data-nombre="LST-230" data-cantidad="3">
							<div id="ame-popup">
								<div class="port-img">
									<img src="{{asset('img/LST-230/LST-230_400x600_1.jpg')}}" class="img-fluid" alt="LST-230">
								</div>
								<div class="port-caption">
									<h3>LST 230-1 <span class="precio">$11000</span></h3>
								</div>
								<div class="album-arrow-grid"></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 blog-item-masonry">
						<div class="port-item-htext select-modal-imagen" data-toggle="modal" data-target="#popup" data-nombre="LST-240" data-cantidad="2">
							<div id="dai-popup">
								<div class="port-img"><img src="{{asset('img/LST-240/LST-240_400x600_1.jpg')}}" class="img-fluid" alt="LST-240"></div>
								<div class="port-caption">
									<h3>LST 240-1 <span class="precio">$11000</span></h3>
								</div>
								<div class="album-arrow-grid"></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 blog-item-masonry ">
						<div class="port-item-htext select-modal-imagen" data-toggle="modal" data-target="#popup" data-nombre="LST-250" data-cantidad="2">
							<div id="jan-popup">
								<div class="port-img"><img src="{{asset('img/LST-250/LST-250_400x600_1.jpg')}}" class="img-fluid" alt="LST-250"></div>
								<div class="port-caption">
									<h3>LST 250-1 <span class="precio">$8000</span></h3>
								</div>
								<div class="album-arrow-grid"></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 blog-item-masonry ">
						<div class="port-item-htext select-modal-imagen" data-toggle="modal" data-target="#popup" data-nombre="LST-260" data-cantidad="3">
							<div id="lil-popup">
								<div class="port-img"><img src="{{asset('img/LST-260/LST-260_400x600_1.JPG')}}" class="img-fluid" alt="LST-260"></div>
								<div class="port-caption">
									<h3>LST 260-1 <span class="precio">$9800</span></h3>
								</div>
								<div class="album-arrow-grid"></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 blog-item-masonry ">
						<div class="port-item-htext select-modal-imagen" data-toggle="modal" data-target="#popup" data-nombre="LST-270" data-cantidad="3">
							<div id="nic-popup">
								<div class="port-img"><img src="{{asset('img/LST-270/LST-270_400x600_1.jpg')}}" class="img-fluid" alt="LST-270"></div>
								<div class="port-caption">
									<h3>LST 270-1 <span class="precio">$9800</span></h3>
								</div>
								<div class="album-arrow-grid"></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 blog-item-masonry">
						<div class="port-item-htext select-modal-imagen" data-toggle="modal" data-target="#popup" data-nombre="LST-280" data-cantidad="3">
							<div id="tab-popup">
								<div class="port-img"><img src="{{asset('img/LST-280/LST-280_400x600_1.jpg')}}" class="img-fluid" alt="LST-280"></div>
								<div class="port-caption">
									<h3>LST 280-1 <span class="precio">$9500</span></h3>
								</div>
								<div class="album-arrow-grid"></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 blog-item-masonry">
						<div class="port-item-htext select-modal-imagen" data-toggle="modal" data-target="#popup" data-nombre="LST-290" data-cantidad="3">
							<div id="vic-popup">
								<div class="port-img"><img src="{{asset('img/LST-290/LST-290_400x600_1.jpg')}}" class="img-fluid" alt="LST-290"></div>
								<div class="port-caption">
									<h3>LST 290-1 <span class="precio">$9000</span></h3>
								</div>
								<div class="album-arrow-grid"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /container -->
		</div>
	</section>
	<!-- /SECTION 2-->
</div>

@include('layout-galeria')

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

@endsection