<!DOCTYPE html>
<html lang="en">

<head>
  @include('util.head')
  <title>Contacto</title>
</head>

<body>
@include('util.header')


		<!-- PAGE CONTENT -->
		<br><br>
		<div class="page-holder custom-page-template page-full fullscreen-page clearfix">
			<!-- SECTION 1-->
			<section class="section-holder-contact">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 margin-bm54 aligncm">
							<div class="margin-r54">
								<h2 class="section-title margin-b32">¿Estás interesado en nosotros? Contactanos</h2>
								<p></p>
								<h5>Dirección:</h5>
								<p>Calle República de Honduras 61 INT 8, Col. Centro,<br> Alcaldía Cuauhtémoc, CDMX 06010, México.</p>
								<p>Tel 55 5772 1398, Cel 55 4200 7997</p>
							</div>
						</div>
						<!-- /col-lg-6 -->	
						<div class="col-lg-6">
							<div id="contact-form-holder">
								<form method="post" id="contact-form" action='include/contact-process.php'>
									<div class="margin-b24"><input type="text" name="name" class="comm-field" placeholder="Nombre" /></div>
									<div class="margin-b24"><input type="text" name="email" class="comm-field" placeholder="Correo" /> </div>
									<div class="margin-b24"><input type="text" name="subject" class="comm-field" placeholder="Asunto" /> </div>
									<div class="margin-b24"><textarea name="message" id="msg-contact" rows="5" placeholder="Mensaje"></textarea></div>
									<p class="antispam">Leave this empty: <input type="text" name="url" /></p>
									<p><input type="submit" value="Enviar mensaje" id="submit"/></p>
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
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.345525815922!2d-99.13658398578154!3d19.440664045461833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f931e1adf043%3A0x450b70f62d2807cb!2sRep%C3%BAblica%20de%20Honduras%2061%2C%20Centro%20Hist%C3%B3rico%20de%20la%20Cdad.%20de%20M%C3%A9xico%2C%20Centro%2C%20Cuauht%C3%A9moc%2C%2006000%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1599289655188!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</section>
			<!-- /SECTION 2-->
		</div>
		<!-- page-content -->
		<!-- /PAGE CONTENT -->

@include('util.footer')
</body>

</html>