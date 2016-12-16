<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Intelirobot</title>
<link rel="stylesheet" href="{{asset('css/styles.css')}}" type="text/css" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>
<body>
<script>
	var centesimas = 0;
	var segundos = 0;
	var minutos = 0;
	var intentos = 0;
	var bandera=0;
	function inicio () {	

		control = setInterval(cronometro,10);
		document.getElementById("inicio").disabled = true;
		document.getElementById("sumar").disabled = false;
		
	}
	function sumar () {
		intentos++;
		if (intentos < 10) { intentos = "0"+intentos}
		document.formulario.tries.value=intentos;
	}
	function cronometro () {
		if(bandera==0){
			centesimas="00";
			segundos="00";
			minutos="00";
		}
		if (centesimas < 99) {
			centesimas++;
			if (centesimas < 10) { centesimas = "0"+centesimas }
			
		}
		if (centesimas == 99) {
			centesimas = -1;
		}
		if (centesimas == 0) {
			segundos ++;
			if (segundos < 10) { segundos = "0"+segundos }
		}
		if (segundos == 59) {
			segundos = -1;
		}
		if ( (centesimas == 0)&&(segundos == 0) ) {
			minutos++;
			if (minutos < 10) { minutos = "0"+minutos }
			
		}
		bandera=1;
		document.formulario.time.value=minutos+":"+segundos+":"+centesimas;
	}
	</script>

	<style type="text/css">
		.contenedor{
			margin-left: 20%;
			display: inline-block;
		}
		.try{
			margin-left: 47%;
			display: inline-block;
		}
		.reloj{
			float: left;
			font-size: 80px;
			font-family: 'Varela Round', sans-serif;
			color: #363431;
		}
		.boton{
			border: none;
			background: #7F577A;
			color: #ffffff;
			font-weight: bold;
			padding: 6px 10px;
			font-size: 12px;
			letter-spacing: 1px;
			width: auto;
			overflow: visible;
		}
	</style>

<div id="container">
  <header>
	<div class="width">
    		<h1><a>Intelirobot - Yo Programo Robots</a></h1>
       	</div>
    </header>


    <div id="body" class="width">
		

        <section id="content">

	    <article>
	    <h2>Registro de jugadores</h2>
	    @if(Session::has('message'))
          <br>
          	<h2 align="center">{{Session::get('message')}}</h2>
          <br>
       	@endif
            
            

            <p>&nbsp;</p>

            
            <h3>Programación web</h3>

            <fieldset>
            	<div class="contenedor">		
					<center>
						<input type="button" class="boton" id="inicio" value="Iniciar &#9658;" onclick="inicio();">
						<input type="button" class="boton" id="sumar" value="+" onclick="sumar();" disabled><br>	
					</center>
				</div>
                <legend>Formulario</legend>
                <form name="formulario" method="POST" action="{{url('insert')}}">
                    <p><label for="name">Nombre:</label>
                    <input name="name" id="name" value="{{Input::old('name')}}" autocomplete="off" /></p>

                    <p><label for="number">Tiempo:</label>
                    <input name="time" id="time" value="" autocomplete="off" /></p>

                    <p><label for="message">Intentos:</label>
                	<input name="tries" id="tries" value="" autocomplete="off"></p>

                    <p><input name="send"  class="formbutton" value="Registrar" type="submit" /></p>
                   
                  
                    {{csrf_field()}}
                </form>
            
            </fieldset>
            
      		</article>
        </section>
        
       <aside class="sidebar">

           <ul>	
               <li>
                    <h4>Colaboradores</h4>
                    <ul>
                        <div>
                            <img src="images/image.jpg" width=264 height=150>
                        </div>
                        <li><a>Erick Terán Alfraro</a></li>
                        <li><a>Antonio De Anda Navarrete</a></li>
                        <li><a>Jesus Artemio De Anda Navarrete </a></li>
                        <li><a>Yoalli Paola Rodríguez Bernal</a></li>
                        <li><a>Adan Flores Ramírez</a></li>
                        <li><a>Diego Vitales Medellin</a></li>
                        <li><a>Gerardo Franco Delgado</a></li>
                       
                    </ul>
                </li>
                <li>
                    <h4>¿Qué hicimos?</h4>
                    <ul>
                        <li class="text">
                        	<p>En este proyecto incluimos los temas vistos en la clase de progrmación avanzada(Bases de datos,HTML,LARAVEL,bootstrap,estilos,
                            MySQL,CSS3,JavaScriptetc) y lo combinamos
                             con el divertido juego de moda:BOTTLE FLIP CHALLENGE!
                              para lograr una actividad interactiva y divertida.</p>
                        </li>
                    </ul>
                </li>         		
        </aside>
    	<div class="clear"></div>
    </div>
    <footer>
        <div class="footer-content width">  
            <ul>
            	<li><h4>Contacto</h4></li>
                <li>Tel.(444)811 44 11</a></li>
                <li>Terrazas 315,Tequisquiapan</li>
                <li>San Luis Potosi,S.L.P,México</li>
                <li>contacto@intelirobot.com.mx</li>
            </ul>  
            <div class="clear"></div>
        </div>
        <div class="footer-bottom">
            <p>&copy; Clase programación web - nivel 1 <a target="_blank" href="http://www.intelirobot.com.mx/">Intelirobot - Yo Hago Robots</a></p>
         </div>
    </footer>
</div>
</body>
</html>

