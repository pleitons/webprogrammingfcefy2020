<div class="d-flex justify-content-center align-items-center" id="#form" style="height: 100vh;">
	<div class="container col-10 row bg-primary d-flex justify-content-center align-items-center p-0 pb-lg-0 pb-md-5">
		<div class="info col-lg-4 col-md-12 text-center d-flex flex-column justify-content-center ">
			<p class="h3 pt-1 pb-3">
				Bienvenido de nuevo
			</p>
			<p class="lead pb-3">
				Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Aperiam beatae atque, accusamus repellat 
			</p>
			<p class="mt-2"><a class="boton" href="registrarse">
				Registrarse
			</a></p>
		</div>

		<div class="form col-lg-8 col-md-12 d-flex flex-column justify-content-center text-center">

		<h2 class="h2">
				Crear Cuenta
		</h2>

			<form action="">
			<div class="form-group row d-flex flex-column align-items-center">

				<input class="form-control mt-3 pt-3 pb-3 pl-4 pr-4 col-lg-8 col-md-10 col-xs-12" type="text" name="nombre" placeholder="Nombre">

				<input class="form-control mt-3 pt-3 pb-3 pl-4 pr-4 col-lg-8 col-md-10 col-xs-12" type="email" name="email" placeholder="E-mail">

				<input class="form-control  mt-3 pt-3 pb-3 pl-4 pr-4 col-lg-8 col-md-10 col-xs-12" type="password" name="password" placeholder="Contraseña">

				<button type="submit" class=" boton rounded-pill mt-5 col-lg-4 col-md-6 col-xs-8 ">Registrarse</button>

			</div>

			</form>

		</div>

	</div>
</div>

<style>
    #form{
        height: 100vh;
        background-image: url(fondo.png)
    }

    .container{
        border-radius: 15px;
        height: 90%;
    }

    .info{
        color : #fff;
        height: 100%;
    }

    .boton{
        color: #fff;
        width: 50%;
        padding: 15px 60px;
        border: 2px solid #fff;
        border-radius: 30px;
        letter-spacing: 2px;
    }
    p>a.boton:hover{
        text-decoration: none;
        color:#0275d8;
        background-color: #fff;
        font-weight: bold;
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
        background-color: #0275d8;
        color: #fff;
    }

    form .boton:hover{
        background-color: #fff;
        color:  #0275d8;
        border: #0275d8 1.5px solid;
}
</style>