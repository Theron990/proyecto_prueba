<?php

$servidor = "localhost:33065";
$usuario = "root";
$clave = "Megacaballero1807";
$baseDeDatos = "motocicletas_db";

$enlace = mysqli_connect($servidor,$usuario,$clave,$baseDeDatos)
        


?>
 
<DOCTYPE <html>
        <head>
            <title>title</title>
            <link rel="stylesheet" href="vista/css/micss.css"/>
            
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Knewave&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
        </head>
        
        <body>
            <header>
                <div>
                    <nav class="navPrincipal">
                        <h1 class="nunito-h1">Bienvenidos</h1>                        
                        <ul class="listaNavPrincipal">
                            <li class="elementoLista"><a href="#">Inicio</a></li>
                            <li class="elementoLista"><a href="#">Servicio</a></li>
                            <li class="elementoLista"><a href="#">Productos</a></li>
                            <li class="elementoLista"><a href="#">Nosotros</a></li>
                            <li class="elementoLista"><a href="#">Contacto</a></li>
                            <li class="elementoLista"><a href="#">Empleo</a></li>                                
                        </ul>
                    </nav>
                </div>
            </header>
            <main class="contenidoPrincipal">
                <section class="primeraSeccionContenidoPrincipal">
                    <div class="contenedorPrimeraSeccion">
                        <img src="vista/img/formulario.jpg" alt="robot">
                        <div>
                            <h1>What is Lorem Ipsum?</h1>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived
                                not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                                PageMaker including versions of Lorem Ipsum.
                            </p>
                            <br>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of
                                using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making
                                it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                                and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes
                                by accident, sometimes on purpose (injected humour and the like).
                            </p>
                        </div>
                    </div>
                </section>
                <section class="segundaSeccion">
                    <div class="contenedorSegundaSeccion">
                        <div class="contenedorElemento">
                            <h1>Principe Oscuro</h1>
                            <img src="vista/img/principe oscuro.jpg" alt="alt"/>
                            <br>
                            <p>el principe oscuro es el hermano del principe normal el cual lleva un mazo y un mazo que golpea a varios enemigos</p>
                        </div>
                        <div class="contenedorElemento">
                            <h1>Megacaballero</h1>
                            <img src="vista/img/megacaballero.jpeg" alt="alt"/>
                            <br>
                            <p>el megacaballero es un caballero con una armadura mas grande y tiene guantes con puas lo que permite golperar varios enemigos</p>
                        </div>
                        <div class="contenedorElemento">
                            <h1>Pekka</h1>
                            <img src="vista/img/pekka.png" alt="alt"/>
                            <br>
                            <p>la pekka es una robot con una espada letal con un solo golpe acaba con lo enemigos</p>
                        </div>
                    </div>
                </section>
                
                <br><br>
                
                <section class="terceraSeccion">
                    <div class="contenedorTerceraSeccion">
                        <h1>Indicanos cual es tu personaje favorito</h1>
                        <br>
                        <div class="contenedorFormulario">
                            <br>
                            <img src="vista/img/fondo clashroyale.jpg" alt="alt"/>
                            <br>                            
                            <form action="#" name="ejemplo" method="post">
                                <input class="entradaExtensaFormulario" type="text" name="nombre" placeholder="Indicanos tu nombre">                                
                                <br>                                
                                <div class="entradasAlineadasHorizontalmente">
                                    <input type="email" name="correo" placeholder="Indicanos tu correo">
                                    <input type="text" name="telefono" placeholder="indicanos tu telefono">
                                </div>                                
                                <br>                                
                                <input class="entradaExtensaFormulario" type="text" name="personaje" placeholder="indicanos tu Personaje favorito">
                                <br>
                                <div class="botonesFormulario">
                                    <input type="submit" name="registro">
                                    <input type="reset">
                                </div>
                                <br>
                        </div>
                        
                    </div>
                </section>
            </main>
            
            
            
            
            
            
            
            
            
            

            

                
                
                
                
                

            </form>

        </body>
    </html>
    
    <?php
  
    if(isset($_POST['registro'])){
        $nombre= $_POST ['nombre'];
        $correo= $_POST ['correo'];
        $telefono= $_POST ['telefono'];
        $personaje = $_POST ['personaje'];
        
        $borrardatos = "DELETE  FROM datos WHERE id = 2";
        
        $insertarDatos = "INSERT INTO datos values(' ','$nombre','$correo','$telefono','$personaje')";
        
        $ejecutarInsertar = mysqli_query ($enlace,$insertarDatos);
    }
    
    
  ?>
