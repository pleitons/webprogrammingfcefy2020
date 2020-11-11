<div class="d-flex justify-content-center align-items-center" id="#form" style="height: 100vh;">
    <div class="container col-10 row bg-primary d-flex justify-content-center align-items-center p-0 pb-lg-0 pb-md-5">
        <div class="info col-lg-4 col-md-12 text-center d-flex flex-column justify-content-center " style="border-top-left-radius: 42px;border-bottom-left-radius: 42px;">
            <p class="h3 pt-1 pb-3">
                ¿Ya tenes cuenta?
            </p>
            <p class="lead pb-3">
                Si ese ese es el caso podés iniciar sesíon acá <br> <strong>;)</strong>
            </p>
            <p class="mt-2"><a class="boton" href="ingresar">
                    Iniciar Sesion
                </a></p>
        </div>

        <div class="form col-lg-8 col-md-12 d-flex flex-column justify-content-center text-center" style="border-top-right-radius: 42px; border-bottom-right-radius: 42px;">

            <h2 class="h2">
                Crear Cuenta
            </h2>

            <form METHOD="POST" action="">
                <div class="form-group row d-flex flex-column align-items-center">

                    <input class="form-control mt-3 pt-3 pb-3 pl-4 pr-4 col-lg-8 col-md-10 col-xs-12" type="text" name="firstName" placeholder="Nombre">
                    <input class="form-control mt-3 pt-3 pb-3 pl-4 pr-4 col-lg-8 col-md-10 col-xs-12" type="text" name="lastName" placeholder="Apellido">
                    <input class="form-control mt-3 pt-3 pb-3 pl-4 pr-4 col-lg-8 col-md-10 col-xs-12" type="text" name="username" placeholder="Nombre de usuario">
                    <input class="form-control mt-3 pt-3 pb-3 pl-4 pr-4 col-lg-8 col-md-10 col-xs-12" type="email" name="email" placeholder="E-mail">
                    <input class="form-control mt-3 pt-3 pb-3 pl-4 pr-4 col-lg-8 col-md-10 col-xs-12" type="phone" name="phoneNum" placeholder="Teléfono">
                    <input class="form-control  mt-3 pt-3 pb-3 pl-4 pr-4 col-lg-8 col-md-10 col-xs-12" type="password" name="password" placeholder="Contraseña">
                    <fieldset class="form-group col-10">
 
                            <legend class="col-form-label col-sm-2 pt-4">Género</legend>
                            <div class="row">
                                <div class="form-check col-lg-4 col-md-12">
                                    <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="1" checked="">
                                    <label class="form-check-label" for="gridRadios1">
                                        Masculino
                                    </label>
                                </div>
                                <div class="form-check col-lg-4 col-md-12">
                                    <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="2">
                                    <label class="form-check-label" for="gridRadios2">
                                        Femenino
                                    </label>
                                </div>
                                <div class="form-check col-lg-4 col-md-12">
                                    <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="3">
                                    <label class="form-check-label" for="gridRadios2">
                                        Otro    
                                    </label>
                                </div>
                        </div>
                    </fieldset>
                    <button type="submit" class=" boton rounded-pill mt-5 col-lg-4 col-md-6 col-xs-8 ">Registrarse</button>
                </div>

            </form>

        </div>

    </div>
</div>

<style>
    body{
	height: 100vh;
	background: linear-gradient(90deg, rgba(4,178,115,1) 0%, rgba(5,126,93,1) 18%, rgba(6,77,72,1) 30%, rgba(7,4,41,1) 62%,rgba(7,4,41,1) 100%);
}

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