<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ranking Flip Bottle Challenge</title>
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
        		<li class="start"><a href="http://localhost/proyectofinalweb/public/inicio">Inicio</a></li>
                <li class="selected"><a href="http://localhost/proyectofinalweb/public/resultados">Ranking</a></li>
                <li class=""><a href="http://localhost/proyectofinalweb/public/tutorial">Tutorial</a></li>
        	</ul>
	</div>
    </nav>


    <div id="body" class="width">

		

		<section id="content">
        
        <article>
            
            <h2>Top 5 mejores</h2>
            <br>
            <table width="200" border="1" align="center"> 
     <tr>
        <th scope="col">POSICIÓN</th>  
        <th scope="col">NOMBRE</th> 
        <th scope="col">TIEMPO</th>
        <th scope="col">INTENTOS</th> 

      </tr> 
      <div id="oculto" style="visibility:hidden">  {{$i=1}}</div>
      @foreach ($mejores as $mejor)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$mejor->NOMBRE}}</td>
            <td>{{$mejor->TIEMPO}}</td>
            <td>{{$mejor->INTENTOS}}</td>     
        </tr> 
      @endforeach   
  
</table>

        </article>
		<article>
			
			<h2>Ranking</h2>
            <br>
            <table width="200" border="1" align="center"> 
     <tr> 
        <th scope="col">POSICIÓN</th> 
        <th scope="col">NOMBRE</th> 
        <th scope="col">TIEMPO</th>
        <th scope="col">INTENTOS</th> 

      </tr> 
      <div id="oculto" style="visibility:hidden">  {{$i=1}}</div>
      @foreach ($participantes as $participante)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$participante->NOMBRE}}</td>
            <td>{{$participante->TIEMPO}}</td>
            <td>{{$participante->INTENTOS}}</td>
        </tr> 
      @endforeach   
  
</table>

		</article>  
		
        </section>
        
        <aside class="sidebar">
	
            <ul>	
               <li>
                    <h4>Información</h4>
                    <ul>
                       
                        <li><iframe width="250" height="150" src="https://www.youtube.com/embed/P8V_bx0L4RY" frameborder="0"></iframe>
                    </ul>
                </li>
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