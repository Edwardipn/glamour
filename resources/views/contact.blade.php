<!DOCTYPE html>
<html lang="en">

<head>
  @include('util.head')
  <title>Contact</title>
</head>

<body>
@include('util.header')
<div class="swiper-slide" style="background-image: url({{asset('img/gardening.jpg')}});">
        <div class="carousel-caption d-none d-md-block">
          <h5>Unique Moments</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque saepe molestias unde et fugiat corrupti cupiditate? Temporibus unde et itaque,</p>
          <p><a class="view-more white-btn" href="#">Find more</a></p>
        </div>
      </div>






		<!-- PAGE CONTENT -->
		<br><br>
		<div class="page-holder custom-page-template page-full fullscreen-page clearfix">
			<!-- SECTION 1-->
			<section class="section-holder">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 margin-bm54 aligncm">
							<div class="margin-r54">
								<h2 class="section-title margin-b32">Are you interested to work with me? Get in touch</h2>
								<p>Lorem ipsum dolor sit amet, eam ex velit postea repudiare, est sale definitiones id. Ut quo quem harum munere, eu labore voluptatum mei, ad epicurei interesset has. Vel dicant conceptam reformidans.</p>
								<h5>Address:</h5>
								<p>40 Park Ave, Brooklyn, New York, NY 10000, US</p>
								<h5>Phone:</h5>
								<p>+1 800 111 2222</p>
								<h5>Email:</h5>
								<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d2b1bdbca6b3b1a692b7aab3bfa2beb7fcb1bdbf">[email&#160;protected]</a></p>
							</div>
						</div>
						<!-- /col-lg-6 -->	
						<div class="col-lg-6">
							<div id="contact-form-holder">
								<form method="post" id="contact-form" action='include/contact-process.php'>
									<div class="margin-b24"><input type="text" name="name" class="comm-field" placeholder="Name" /></div>
									<div class="margin-b24"><input type="text" name="email" class="comm-field" placeholder="Email" /> </div>
									<div class="margin-b24"><input type="text" name="subject" class="comm-field" placeholder="Subject" /> </div>
									<div class="margin-b24"><textarea name="message" id="msg-contact" rows="5" placeholder="Message"></textarea></div>
									<p class="antispam">Leave this empty: <input type="text" name="url" /></p>
									<p><input type="submit" value="Send message" id="submit"/></p>
								</form>
							</div>
							<!-- contact-form-holder-->
							<div id="output-contact"></div>
						</div>
						<!-- /col-lg-6 -->		
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</section>
			<!-- /SECTION 1-->
			<!-- SECTION 2-->
			<section>
				<div class="gmaps">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.9762977047603!2d-73.96009086693977!3d40.69651965846399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bc1f922373f%3A0x398427d98fba822e!2sPark+Ave%2C+Brooklyn%2C+NY%2C+USA!5e0!3m2!1sen!2sro!4v1471514814808">
					</iframe>
				</div>
			</section>
			<!-- /SECTION 2-->
		</div>
		<!-- page-content -->
		<!-- /PAGE CONTENT -->

@include('util.footer')
</body>

</html>