<!DOCTYPE html>
<html lang="en">
<head>
<meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e50f04e157.js" crossorigin="anonymous"></script>
    <title>300ADB | Contacto</title>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="RanGO Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link href="styles/redes.css" rel="stylesheet" type="text/css">
    <link rel='stylesheet' type='text/css' href='styles/main.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/logo.ico">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link href="styles/redes.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- Header -->

	<header>
        <a href="../index.html"><img id="logo" class="logo" src="../img/logo.png" alt="Logo"></a>
        <nav id="menuNav" class="menuNav">
            <a href="index.html">Sobre Nosotros</a>
            <a href="pages/boxing.html">Boxeo</a>
            <a href="pages/functional.html">Funcional</a>
            <a href="pages/zumba.html">Zumba</a>
            <a href="pages/ipdefense.html">Defensa Personal Integral</a>
            <a href="pages/contact.php">Contacto</a>
        </nav>
        <!--Navbar-->
        <nav class="navbar navbar-dark red lighten-1 mb-4">
            <!-- Collapse button -->
            <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false"
                aria-label="Toggle navigation"><span class="dark-blue-text"><i
                        class="fas fa-bars fa-1x"></i></span></button>

            <!-- Collapsible content -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent1">

<!-- Links -->
<ul class="navbar-nav mr-auto">
	<li class="nav-item active">
		<a class="nav-link" href="index.html">Sobre Nosotros</a>
	</li>
	<li class="nav-item active">
		<a class="nav-link" href="pages/boxing.html">Boxeo</a>
	</li>
	<li class="nav-item active">
		<a class="nav-link" href="pages/functional.html">Funcional</a>
	</li>
	<li class="nav-item active">
		<a class="nav-link" href="pages/zumba.html">Zumba</a>
	</li>
	<li class="nav-item active">
		<a class="nav-link" href="pages/ipdefense.html">Defensa Personal Integral</a>
	</li>
	<li class="nav-item active">
		<a class="nav-link" href="contact.php">Contacto</a>
	</li>
</ul>
<!-- Links -->
</div>
            <!-- Collapsible content -->
        </nav>
        <!--/.Navbar-->
    </header>	
	<!-- Contact -->

	<div class="contact">
		
		<div class="container">
			
			<!-- Google Map Container -->

			<div class="row">
				
			</div>

			<div class="row contact_row">
				<div class="col-lg-8">
					
					<!-- Reply -->

					<div class="reply">
						
						<div class="reply_title">Envíanos un Mensaje, te contactaremos a la brevedad.</div>
						<div class="reply_form_container">
							
							<!-- Reply Form -->
							


							<form action="sent.php" method="post">
								<div>
									<input name="nombre" class="input_field reply_form_name" type="text" placeholder="Nombre" required="required" data-error="Escribe tu nombre">
									<input name="mail" class="input_field reply_form_email" type="email" placeholder="E-mail" required="required" data-error="Escribe un E-mail válido">
									<input name="telefono" class="input_field reply_form_subject" type="text" placeholder="Número de teléfono" required="required" data-error="Escribe tu número de teléfono">
									<input name="asunto" class="input_field reply_form_subject" type="text" placeholder="Asunto" required="required" data-error="Escribe un Asunto.">
									<textarea name="mensaje" class="text_field reply_form_message" name="message"  placeholder="Mensaje" rows="4" required data-error="Please, write us a message."></textarea>
								</div>
								<div>
									<button id="reply_form_submit" type="submit" class="reply_submit_btn trans_300" value="Submit">
										Enviar Mensaje
									</button>
								</div>

							</form>
							
							



						</div>
					</div>

				</div>


				<div class="col-lg-4">
					
					<!-- Contact Info -->

					<div class="contact_info">

						<div class="contact_title">Información de Contacto</div>
						
						<div class="contact_info_container">

							<div class="logo contact_logo">
							
							</div>
							<div class="address_container clearfix">
								<div class="contact_info_icon">i</div>
								<div class="contact_info_content">
									<ul>
										<li class="address">Salinas, Canelones</li>
										<li class="phone">Teléfono: +598 91 312 588</li>
										<li class="email">info@300academiadeboxeo.uy</li>
								</ul>									
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
    </div>
    </br> </br> <hr/></br></br>
			<center>
		 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1638.6055662125088!2d-55.84057334172838!3d-34.77545979195366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzTCsDQ2JzMxLjciUyA1NcKwNTAnMjIuMSJX!5e0!3m2!1ses!2suy!4v1597590934992!5m2!1ses!2suy" aspect-ratio="1/1" width="50%"  frameborder="0" style="border:0" allowfullscreen></iframe></center>
	</div>

    <footer>
        <section class="columnas">
            <div class="datosContacto">
                <p><img src="img/llamada.png" alt="llamada"> +598 91 312 588</p>
                <p><img src="img/correo-electronico.png" alt="correo"> info@300academiadeboxeo.uy</p>
                <p><img src="img/mapas-y-banderas.png" alt="direccion"> Del Daimán Manzana G Solar 13, Salinas,
                    Canelones,
                    Uruguay.</p>
            </div>

            <div class="navegacion">
                <ul>
                    <li><a href="#">Sobre Nosotros</a></li>
                    <li><a href="#">Boxeo</a></li>
                    <li><a href="#">Funcional</a></li>
                </ul>

                <ul>
                    <li><a href="#">Zumba</a></li>
                    <li><a href="#">Defensa Personal Integral</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>

            <div class="logos">
                <a href="https://www.facebook.com/" target="_blank"><img src="img/facebook.png" alt="facebook"></a>
                <a href="https://www.instagram.com/" target="_blank"><img src="img/instagram.png" alt="instagram"></a>
                <a href="https://web.whatsapp.com/" target="_blank"><img src="img/whatsapp.png" alt="whatsapp"></a>
            </div>

            <div>
                <br>
                <br>
                <br>
                <br>
            </div>
        </section>


        <div class="texto">
            <p>Made with <img class="love" src="img/love.png" alt="love"> by DCCS - Uruguay 2022 - Todos los
                derechos reservados</p>
        </div>

    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script>
        // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
        window.onscroll = function () { scrollFunction() };
        function myFunction(x) {
            if (x.matches) { // If media query matches
                mobile = true
            } else {
                mobile = false
            }
            if (mobile) {
                logo.style.width = "20%";
                logo.style.top = "4%"
                na
            } else {
                logo.style.width = "11%";
            }
        }
        var mobile
        var x = window.matchMedia("(max-width: 890px)")
        myFunction(x) // Call listener function at run time
        x.addListener(myFunction) // Attach listener function on state changes

        function scrollFunction() {
            menuNav = document.getElementById("menuNav")
            document.getElementById("logo")
            if (mobile) {
                logo.style.width = "20%";
                logo.style.top = "4%"
            } else if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                menuNav.style.transition = "0.5s"
                menuNav.style.height = "10%";
                logo.style.transition = "0.5s"
                logo.style.width = "9%";
            } else {
                menuNav.style.height = "15%";
                logo.style.width = "11%";
            }
        }
    </script>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/slick-1.8.0/slick.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/about_custom.js"></script>
</body>

</html>
