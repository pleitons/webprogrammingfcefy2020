
<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="index.html">GO LIVE</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo mr-auto"><img src="assets/img/logo2.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#team">Team</a></li>
              <li class="drop-down"><a href="">Drop Down</a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="drop-down"><a href="#">Deep Drop Down</a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                </ul>
              </li>
              <li><a href="#contact">Contact</a></li>

            </ul>
          </nav><!-- .nav-menu -->

          <a href="#about" class="get-started-btn scrollto">Get Started</a>
        </div>
	</div>
</header><!-- End Header -->

<section id="hero" class="d-flex container-fluid justify-content-center align-items-center">
	<div class="d-flex justify-content-center align-items-center" id="#form" style="height: 80vh;">
		<div class="container col-10 row bg-primary d-flex justify-content-center align-items-center p-0 pb-lg-0 pb-md-5" style="">
			<div class="info col-lg-4 col-md-12 text-center d-flex flex-column justify-content-center " style="border-top-left-radius: 42px;border-bottom-left-radius: 42px;">
				<p class="h3 pt-1 pb-3">
					¿Sos nuevo por acá? ;)
				</p>
				<p class="lead pb-3">
					Comenza a manejar tus actividades de forma smart.
				</p>
				<p class="mt-2"><a class="boton" href="registrarse">
					Registrarse
				</a></p>
			</div>

			<div class="form col-lg-8 col-md-12 d-flex flex-column justify-content-center text-center" style="border-top-right-radius: 42px; border-bottom-right-radius: 42px;">

			<h2 class="h2">
					Iniciar Sesion
			</h2>

				<form method="POST" action="">
				<div class="form-group row d-flex flex-column align-items-center">

					<input class="form-control mt-3 pt-3 pb-3 pl-4 pr-4 col-lg-8 col-md-10 col-xs-12" type="text" name="username" placeholder="Usuario">

					<input class="form-control  mt-3 pt-3 pb-3 pl-4 pr-4 col-lg-8 col-md-10 col-xs-12" type="password" name="password" placeholder="Contraseña">

					<button type="submit" class=" boton rounded-pill mt-5 col-lg-4 col-md-6 col-xs-8 ">Registrarse</button>

				</div>

				</form>

			</div>

		</div>
	</div>
</section>

<style>

.container{
	font-family: 'Poppins', sans-serif;
	height: 90%;
	border-radius: 40px;
}

.lead{
	font-family: sans-serif;
}

h2.h2{
	color: #0B0050;
}

.info{
	color : #f9f8ff;
	height: 100%;
	background: linear-gradient(90deg, rgba(11,0,80,1) 0%, rgba(7,4,41,1) 100%);
}

.boton{
	color: #fff;
	width: 50%;
	padding: 15px 60px;
	border: 2px solid #fff;
	border-radius: 30px;
	letter-spacing: 2px;
	transition: background .1s linear .1s;
}
p>a.boton:hover{
	text-decoration: none;
	color: rgb(11,0,80);
	background-color: #fff;
	cursor: pointer;
}

.container div{
	padding: 0 4vw;
}

.form{
	background-color: #fff;
	height: 100%;
}

form input{
	height: 15px;
}

form .boton{
	background-color: rgb(11,0,80);
	color: #fff;
}

form .boton:hover{
	background-color: #fff;
	color:  rgb(11,0,80);
	border: rgb(11,0,80) 1.5px solid;
}   
</style>