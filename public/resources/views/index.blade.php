@extends('layout')
@section('title','Inicio')

@section('content')

<!--Swiper Autoplay-->
<!-- Swiper -->
<div class="swiper-container">
	<div class="swiper-wrapper">
		<div class="swiper-slide" style="background-image: url({{asset('img/portfolio/quinceanera-1.jpg')}});">
			<div class="carousel-caption ">
				<h5 class="animated zoomIn" style="animation-delay: 1s;">La mejor ilusión tus XV años</h5>
			</div>
		</div>
		<div class="swiper-slide" style="background-image: url({{asset('img/portfolio/quinceanera-2.jpg')}});">
			<div class="carousel-caption ">
				<h5 class="animated zoomIn" style="animation-delay: 1s;">La mejor ilusión tus XV años</h5>
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
				<div class="col text-center">
					<h2>Lo mas vendido</h2>
				</div>
			</div>
			<div class="row padding-top-30">
				<div class="col-lg-12">
					<div class="port-masonry port-masonry-4cols">
						<div class="row layout-masonry">

							<div class="row">
								<div class="col-md-4">
									<div class="col port-item-masonry select-modal-imagen" data-toggle="modal" data-target="#exampleModal" data-nombre="daimon" data-cantidad="2">
										<div class="port-item-htext">
											<div class="port-img">
												<img src="{{asset('img/daimon/daimon_400x600_1.jpg')}}" class="img-fluid" alt="Daimon">
											</div>
											<div class="album-arrow"></div>
										</div>
										<div class="port-caption-masonry">
											<h3><a href="{{asset('galleries')}}">LST 240-2 </a></h3>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="col port-item-masonry select-modal-imagen" data-toggle="modal" data-target="#exampleModal" data-nombre="vicky" data-cantidad="3">
										<div class="port-item-htext">
											<div class="port-img"><img src="{{asset('img/vicky/vicky_400x600_1.jpg')}}" class="img-fluid" alt="Vicky"></div>
											<div class="album-arrow"></div>
										</div>
										<div class="port-caption-masonry">
											<h3><a href="{{asset('galleries')}}">LST 290-2</a></h3>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="col port-item-masonry select-modal-imagen" data-toggle="modal" data-target="#exampleModal" data-nombre="jane" data-cantidad="2">
										<div class="port-item-htext">
											<div class="port-img"><img src="{{asset('img/jane/jane_400x600_1.jpg')}}" class="img-fluid" alt="Jane"></div>
											<div class="album-arrow"></div>
										</div>
										<div class="port-caption-masonry">
											<h3><a href="{{asset('galleries')}}">LST 250-1</a></h3>
										</div>
									</div>
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
	<!-- SECTION 4-->
	<section class="section-holder margin-b72 alignc">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<h2 class="section-title margin-b32">Visita nuestra galería</h2>
					<div class="port-caption-masonry">
						<h3><a href="{{asset('galleries')}}">Contamos con los mejores modelos.</a></h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /SECTION 4-->
	<!-- SECTION 3-->
	<section class="padding-top-40">
		<div class="parallax section-holder" style="background-image:url({{asset('img/portfolio/xv-girl-5.jpg')}});">
			<div class="container parallax-content alignc">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-8">
							<h3 class="section-title margin-bm32 white">Más de 20 años inspirando y marcando tendencias en diseño y elegancia de vestidos, somos Fille á Femme.</h3>
						</div>
						<div class="col-lg-4 alignr">
							<a href="{{asset('contact')}}" class="read-more">Contactanos</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /SECTION 3-->
	<!-- /SECTION 2-->
	<section class="container">
		<div class="row">
			<div class="col text-center">
				<h2>Nuestro valores</h2>
			</div>
		</div>
		<div class="row padding-top-30">
			<div class="col text-center">

				<div class="circulo background-EBEBEB">
					<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-pen" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
					</svg>
				</div>
				<h6 style="padding-top: 10px;">Diseño</h6>
				<p>Realizamos nuestros diseños con creatividad y experiencia </P>
			</div>
			<div class="col text-center">
				<div class="circulo background-EBEBEB color-blanco">
					<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-award color-blanco" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z" />
						<path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
					</svg>
				</div>
				<h6 style="padding-top: 10px;">Calidad</h6>
				<p>Cuidamos cada detalle para que vivas excelencia en tu vestido</P>
			</div>
			<div class="col text-center">
				<div class="circulo background-EBEBEB">
					<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-suit-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M8 6.236l.894-1.789c.222-.443.607-1.08 1.152-1.595C10.582 2.345 11.224 2 12 2c1.676 0 3 1.326 3 2.92 0 1.211-.554 2.066-1.868 3.37-.337.334-.721.695-1.146 1.093C10.878 10.423 9.5 11.717 8 13.447c-1.5-1.73-2.878-3.024-3.986-4.064-.425-.398-.81-.76-1.146-1.093C1.554 6.986 1 6.131 1 4.92 1 3.326 2.324 2 4 2c.776 0 1.418.345 1.954.852.545.515.93 1.152 1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z" />
					</svg>
				</div>
				<h6 style="padding-top: 10px;">Inovacion</h6>
				<p>En constante crecimiento buscamos siempre estar a la vanguardia</P>
			</div>
			<div class="col text-center">
				<div class="circulo background-EBEBEB">
					<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-people" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
					</svg>
				</div>
				<h6 style="padding-top: 10px;">Familia</h6>
				<p>Vive intensamente con los que amas</P>
			</div>
		</div>
	</section>



	<!-- SECTION 6-->
	<!-- <section class="home-section6">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-8">
					<h3 class="section-title margin-bm32">Más de 20 años inspirando y marcando tendencias en diseño y elegancia de vestidos, somos Fille á Femme.</h3>
				</div>
				<div class="col-lg-4 alignr">
					<a href="{{asset('contact')}}" class="read-more">Contactanos</a>
				</div>
			</div>
		</div>
	</section> -->
	<!-- /SECTION 6-->
</div>
<!-- home-page-content -->
<!-- /PAGE CONTENT -->


<div class="scrollup">
	<a class="scrolltop" href="#">
		<i class="fa fa-chevron-up"></i>
	</a>
</div>

@include('modal_galeria')

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

@endsection