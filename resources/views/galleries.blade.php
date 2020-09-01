<!DOCTYPE html>
<html lang="en">

<head>
  @include('util.head')
  <title>Galleries</title>
</head>

<body>
@include('util.header')
<div class="swiper-slide" style="background-image: url({{asset('img/walking-v1.jpg')}});">
        <div class="carousel-caption d-none d-md-block">
          <h5>Walking for the adventure</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
          <p><a class="view-more white-btn" href="#">Find more</a></p>
        </div>
      </div>














		<!-- PAGE CONTENT -->
    <br><br>
		<div class="page-holder custom-page-template page-full fullscreen-page clearfix">
			<!-- SECTION 1-->
			<section class="section-holder margin-b72 aligncm">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h2 class="section-title margin-b32">Heading Title</h2>
						</div>
						<div class="col-lg-6 margin-bm32">
							<p>Appareat reformidans his te. Mundi erroribus ad eum, mea ut dicam nostro copiosae. Eligendi accusamus nec ex. Et usu ludus vitae tritani, suas deleniti pertinacia et quo. Duo veritus mediocrem ex, vidit fabellas vis ea.</p>
						</div>
						<div class="col-lg-6">
							<p>Mea graeci vocent cu, usu aperiam temporibus ei, sit ex veri docendi. Ea mazim commune eam, id usu eligendi nominati democritum. Quas soleat verterem ut vix. Liber detracto cotidieque ut has.</p>
						</div>
					</div>
					<!-- /row -->				
				</div>
				<!-- /container -->
			</section>
			<!-- /SECTION 1-->
			<!-- SECTION 2-->
			<section class="section-holder">
				<div class="gallery-container">
					<div class="fullscreen-container fs-gallery">
						<div class="row gallery-holder gallery-grid3cols">
							<div class="col-sm-6 col-lg-4 gallery-post"> <a href="{{asset('img/portfolio/water-sports-01.jpg')}}" class="lightbox" title=""> <img class="img-fluid" src="{{asset('img/portfolio/water-sports-01.jpg')}}" alt=""> </a></div>
							<div class="col-sm-6 col-lg-4 gallery-post"> <a href="{{asset('img/portfolio/water-sports-02.jpg')}}" class="lightbox" title=""> <img class="img-fluid" src="{{asset('img/portfolio/water-sports-02.jpg')}}" alt=""> </a></div>
							<div class="col-sm-6 col-lg-4 gallery-post"> <a href="{{asset('img/portfolio/water-sports-03.jpg')}}" class="lightbox" title=""> <img class="img-fluid" src="{{asset('img/portfolio/water-sports-03.jpg')}}" alt=""> </a></div>
							<div class="col-sm-6 col-lg-4 gallery-post"> <a href="{{asset('img/portfolio/water-sports-04.jpg')}}" class="lightbox" title=""> <img class="img-fluid" src="{{asset('img/portfolio/water-sports-04.jpg')}}" alt=""> </a></div>
							<div class="col-sm-6 col-lg-4 gallery-post"> <a href="{{asset('img/portfolio/camp-1.jpg')}}" class="lightbox" title=""> <img class="img-fluid" src="{{asset('img/portfolio/camp-1.jpg')}}" alt=""> </a></div>
							<div class="col-sm-6 col-lg-4 gallery-post"> <a href="{{asset('img/portfolio/camp-1.jpg')}}" class="lightbox" title=""> <img class="img-fluid" src="{{asset('img/portfolio/camp-2.jpg')}}" alt=""> </a></div>
							<div class="col-sm-6 col-lg-4 gallery-post"> <a href="{{asset('img/portfolio/camp-1.jpg')}}" class="lightbox" title=""> <img class="img-fluid" src="{{asset('img/portfolio/camp-3.jpg')}}" alt=""> </a></div>
							<div class="col-sm-6 col-lg-4 gallery-post"> <a href="{{asset('img/portfolio/camp-1.jpg')}}" class="lightbox" title=""> <img class="img-fluid" src="{{asset('img/portfolio/camp-4.jpg')}}" alt=""> </a></div>
						</div>
					</div>
					<!-- /container -->
				</div>
				<div class="container prev-next-gallery">
					<div class="row meta-nav-holder port-meta-nav">
						<div class="col-md-6 meta-nav">
							<div class="pn-holder">
								<div class="pn-desc">
									<div class="meta-nav-subtitle">
										<h3><a href="#">&larr; Carla &amp; Mike</a></h3>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 meta-nav meta-nav-right">
							<div class="pn-holder">
								<div class="pn-desc">
									<div class="meta-nav-subtitle">
										<h3><a href="#">Ellen &amp; James &rarr;</a></h3>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /SECTION 2-->
		</div>
		<!-- page-content -->
		<!-- /PAGE CONTENT -->
		<div id="footer-instagram">
			<ul class="instagram-pics instagram-size-small">
				<li class=""><a href="#" target="_blank" class=""><img src="{{asset('img/portfolio/winter-sports-01.jpg')}}" alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img src="{{asset('img/portfolio/winter-sports-02.jpg')}}" alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img src="{{asset('img/portfolio/winter-sports-03.jpg')}}" alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img src="{{asset('img/portfolio/winter-sports-04.jpg')}}" alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img src="{{asset('img/portfolio/winter-sports-05.jpg')}}" alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img src="{{asset('img/portfolio/services-1.jpg')}}" alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img src="{{asset('img/portfolio/services-2.jpg')}}" alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img src="{{asset('img/portfolio/services-3.jpg')}}" alt=""/></a></li>
			</ul>
		</div>
    @include('util.footer')
	</body>
</html>