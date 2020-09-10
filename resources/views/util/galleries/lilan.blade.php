<!DOCTYPE html>
<html lang="en">

<head>
  @include('util.head')
  <title>Galería</title>
</head>
<body>
		<!-- PAGE CONTENT -->
		<div class="page-holder custom-page-template page-full fullscreen-page clearfix">
			<!-- SECTION 2-->
			<section class="section-holder-galleries">
				<div class="gallery-container">
					<div class="fullscreen-container fs-gallery">
						<div class="row gallery-holder gallery-grid3cols">
                            <div class="col-sm-6 col-lg-4 gallery-post"><a href="{{asset('img/lilan/lilan_730_1095_1.jpg')}}" class="lightbox" title=""><img class="img-fluid" src="{{asset('img/lilan/lilan_730_1095_1.jpg')}}" alt=""></a></div>
                            <div class="col-sm-6 col-lg-4 gallery-post"><a href="{{asset('img/lilan/lilan_400x600_2.JPG')}}" class="lightbox" title=""><img class="img-fluid" src="{{asset('img/lilan/lilan_400x600_2.JPG')}}" alt=""></a></div>
							<div class="col-sm-6 col-lg-4 gallery-post"><a href="{{asset('img/lilan/lilan_730_1095_3.jpg')}}" class="lightbox" title=""><img class="img-fluid" src="{{asset('img/lilan/lilan_730_1095_3.jpg')}}" alt=""></a></div>
						</div>
					</div>
					<!-- /container -->
				</div>
			</section>
			<!-- /SECTION 2-->
		</div>
		<!-- /PAGE CONTENT -->
	</body>
</html>

