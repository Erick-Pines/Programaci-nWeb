<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Flip Bottle Challenge</title>
<link rel="stylesheet" href="{{asset('css/styles.css')}}" type="text/css" />
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--
respo, a free CSS web template by ZyPOP (zypopwebtemplates.com/)

Download: http://zypopwebtemplates.com/

License: Creative Commons Attribution
//-->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>
<body>
<div id="container">
    <header>
	<div class="width">
    		<h1>Puntuación</h1>
       	</div>
    </header>
    <nav>
	<div class="width">
    		<ul>
                <li class="selected"><a href="http://localhost/proyectofinalweb/public/inicio">Inicio</a></li>
                <li class=""><a href="http://localhost/proyectofinalweb/public/resultados">Ranking</a></li>
                <li class=""><a href="http://localhost/proyectofinalweb/public/tutorial">Tutorial</a></li>
            </ul>
	</div>
    </nav>


    <div id="body" class="width">

		

		<section id="content">

	    <article>
					
			<h2>Introducción del Flip Bottle Challenge</h2>
			<br>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/anqGLPFBAAY" frameborder="0"></iframe>
			<br>
            <p>Este reto (o challenge) fue presentado por un estudiante de California en un show de talentos, y esto se volvió viral al instante debido a que las personas intentaban realizar este acto.</p>	
		
		</article>
		<article>

			<h2>Proyecto</h2>
			<br>
			<p>Este proyecto se dividió en dos páginas web enlazadas por una base de datos de SQL, una de estas páginas registra el tiempo, nombre e intentos del participante y la otra página muestra estos datos y pone un ranking de todos los participantes e indica los primeros lugares. Las herramientas usadas fue html 5, laravel, mySQL y json.</p>

		</article>

        </section>
        
        <aside class="sidebar">
	
            <ul>
                 <div id="oculto" style="visibility:hidden">  {{$i=1}}</div>
                <li>
                    <h4>Top 5 mejores</h4>
                    <ul>
                        @foreach ($mejores as $mejor)
                            <li>{{$i++}}. {{$mejor->NOMBRE}}, {{$mejor->TIEMPO}}, {{$mejor->INTENTOS}} intentos.</li>
                        @endforeach 
                    </ul>
                </li>
            </ul>
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
                
            </ul>
		
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