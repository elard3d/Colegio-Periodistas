<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Envío de Correo</title>

        <link           href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

          <script src="https://kit.fontawesome.com/c83689a06a.js" crossorigin="anonymous"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="stylesFirst.css">
        <link rel="stylesheet" type="text/css" href="stylesNavbar.css">
        <link rel="stylesheet" type="text/css" href="stylesSection.css">

        <link rel="shortcut icon" href="images/favicon.jpg" />



    </head>
    <body>

        <div class="c1">
            <div class="c2">
                <div class="box21">
                    <div class="box211">
                        <img class="logo" src="images/Logo%20CPP.jpg"
							 href="index.html">
                    </div>

                </div>

                <div class="box22">

                    <div class="box221">
                        <div class="nombre">
                            Colegio de Periodistas de Cajamarca
                        </div>
                        <div class="lema">
                            "Todo por Cajamarca, Nada Contra Cajamarca"
                        </div>


                    </div>

                </div>


            </div>

        </div>

            <div class="c3" style="font-size:18px">
                <nav id ="navbar">
                    <div class="myicono">
						<center>
							<i class="far fa-envelope" aria-hidden="true">
                        	</i>
						</center>
                    </div>
            	</nav>
        </div>
    <p></p>
	<div class="fotoTitulo">
		Contáctanos
	</div>
	<p></p>


	<article>
	<?php
		$name = $_POST['name'];
		$lastname =$_POST['lastName'];
		$email	 = $_POST['email'];
		$message = $_POST['message'];

		echo $name." ". $lastName." a dicho : <br/> ". $message;

		if(mail("administracion@cpcajamarca.com",$email,$message)){
    	echo " Mensaje enviado exitosamente ";
		}else {
		echo " Error de envio ";
		exit;
		}

	?>
	</article>

	</body>
</html>
