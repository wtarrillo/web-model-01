<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wtarrillo, Diseño y desarrollo web</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!--Icons-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">
    <meta name="viewport" content="width=device-width, user-scalable=no"> <!--para ver en el celular-->

</head>
<body>
    <a id="whatsapp"
    href="https://api.whatsapp.com/send?phone=51939398137"><img src="images/whatsapp.png" alt=""></a>
    
    <header>
        <div class="menu">
            <div class="contenedor">
                <p class="logo">
                    <img src="images/logo_blanco.png" alt="" width="50%">
                </p>     
                 <img class="menu-icon" src="images/menu-icon.png" alt="">
                <nav>
                    <ul> <!--listas desordenadas, sin numeracion-->
                        <li><a href="#sobre-mi">Sobre mí</a></li>
                        <li><a href="#servicios">Servicios</a></li>
                        <li><a href="#mis-trabajos">Mis Trabajos</a></li>
                        <li><a href="#por-que-trabajar">Por qué trabajar conmigo?</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#contacto">Contacto</a></li>

                    </ul>
                </nav>
            </div>
        </div>

        <div class="contenedor" id="contenedor-titulo-flex">
            
            <div class="contenedor-titulo">
                <h1>Wilmer Tarrillo</h1>
                <h2>Diseñador & Desarrollador Web</h2>
                <a href="#mis-trabajos">VER MIS TRABAJOS</a> 
            </div>
        </div>
    </header>

    <main>
        <section id="sobre-mi" >
            <div class="contenedor">
                <h3>Sobre mi</h3>
                <div class="contenedor-sobremi">
                    <div class="computadoras">
                        <img src="images/computadoras.png" alt="">
                    </div>
                    <div class="texto">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing 
                        elit. Quo harum cumque veritatis iusto molestias animi. 
                        Aliquam labore laboriosam ratione nemo.</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Beatae, fugiat! Maiores eaque saepe odio quaerat? Quis, 
                        itaque? Exercitationem culpa incidunt quasi velit praesentium 
                        expedita eum!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque 
                        expedita voluptatem repellendus accusamus, porro neque.</p>
                        <a href="">VER MIS TRABAJOS</a>
                    </div>

                </div>
            </div>
        </section>
        <section id="servicios">
            <div class="contenedor">
                <h3>Servicios</h3>
                <div class="contenedor-servicios">
                    <div class="servicio violeta"> <!--dos clases en un separado por espacio-->
                        <h4>Diseño Web</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo libero 
                        voluptatem natus amet harum numquam. Commodi omnis voluptas inventore 
                        accusamus! Adipisci corporis dolorem tenetur sapiente accusantium. Id ipsam 
                        neque quod!</p>
                        <img class="icon" src="images/computer-icon.png" alt="">
                        <img src="images/ondas.png" alt="" class="ondas">
                    </div>
                    <div class="servicio celeste">
                        <h4>Desarrollo Web</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo libero 
                        voluptatem natus amet harum numquam. Commodi omnis voluptas inventore 
                        accusamus! Adipisci corporis dolorem tenetur sapiente accusantium. Id ipsam 
                        neque quod!</p>
                        <img class="icon" src="images/desarrollo.png" alt="">
                        <img class="ondas" src="images/ondas.png" alt="">
                    </div>
                    <div class="servicio violeta">
                        <h4>SEO</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo libero 
                        voluptatem natus amet harum numquam. Commodi omnis voluptas inventore 
                        accusamus! Adipisci corporis dolorem tenetur sapiente accusantium. Id ipsam 
                        neque quod!</p>
                        <img class="icon" src="images/seo.png" alt="">
                        <img class="ondas" src="images/ondas.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="mis-trabajos">
            <div class="contenedor">
                <h3>Mis Trabajos</h3>
                <div class="owl-carousel owl-theme">
                    <div class="item"><a href="http://www.google.com"><img src="images/carousel1.jpg"></a></div>  <!-- entrar a https://dimmy.club/ para generar imagenes-->
                    <div class="item"><img src="images/carousel2.png"></div>
                    <div class="item"><img src="images/carousel3.png"></div>
                    <div class="item"><img src="images/carousel1.jpg"></div>
                    <div class="item"><img src="images/carousel2.png"></div>
                    <div class="item"><img src="images/carousel3.png"></div>
                    <div class="item"><img src="images/carousel1.jpg"></div>
                    <div class="item"><img src="images/carousel3.png"></div>
                </div>
            </div>
        </section>

        <section id="por-que-trabajar">
            <div class="contenedor">
                <h3>Por que trabajar conmigo?</h3>
                <div class="contenedor-trabajar">
                    <div class="item">
                        <ul>
                            <li><img src="images/velocidad.png" alt=""></li>
                            <li>Velocidad</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                At nobis voluptate minima beatae doloribus sunt explicabo 
                                ipsum mollitia temporibus inventore!</li>
                        </ul>
                    </div>
                    <div class="item">
                        <ul>
                            <li><img src="images/velocidad.png" alt=""></li>
                            <li>Asesoramiento</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                At nobis voluptate minima beatae doloribus sunt explicabo 
                                ipsum mollitia temporibus inventore!</li>
                        </ul>
                    </div>
                    <div class="item">
                        <ul>
                            <li><img src="images/velocidad.png" alt=""></li>
                            <li>Mobile Priority</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                At nobis voluptate minima beatae doloribus sunt explicabo 
                                ipsum mollitia temporibus inventore!</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="blog">
            <div class="contenedor">
                <h3>Blog</h3>
                <div class="contenedor-publicaciones">
                    <div class="publicacion">
                        <img src="images/blog1.jpg" alt="">
                        <div class="contenido">
                            <h4>No alcanza con tener solamente una página Web</h4>
                            <p>Quieres saber cuales con las herramientas que usan
                            las mejores marcas para generar tráfico?</p></br>
                            <a href="">Leer mas →</a>
                        </div>
                    </div>
                    <div class="publicacion">
                        <img src="images/blog2.jpg" alt="">
                        <div class="contenido">
                            <h4>¿Que es el marketing y como utilizarlo</h4>
                            <p>Quieres saber cuales con las herramientas que usan
                            las mejores marcas para generar tráfico?</p></br>
                            <a href="">Leer mas →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="que-esperas">
            <div class="contenedor">
                <h3>¿Que esperas para tener tu página Web</h3>
                <a href="">CHARLEMOS</a>
            </div>
        </section>

        <section id="contacto">
                <?php
                if(@$_GET['i']=='ok') { // QUIERE DECIR QUE EL FORMULARIO SE ENVIO CORRECTAMENTE ?>
          
                <h3>La consulta se envio correctamente. Nos contactaremos a la brevedad.</h3>
          
                <?php
                } else{
                ?>
            <div class="contenedor">
                <h3>Contacto</h3>
                <form action="envio-formulario.php"
                    method="post" enctype="multipart/form-data">
                    <input type="text" placeholder="Nombre" name="nombre" required>
                    <input type="email" placeholder="Email" name="email" required>
                    <textarea name="mensaje" placeholder="Mensaje" required></textarea>
                    <input type="submit" value="ENVIAR MENSAJE">
                </form>
                    <?php } ?>

                <div class="contacto-info">
                    <div class="mail"> 
                        <img src="images/mail-icon.png" alt="">
                        wtarrillo@gmail.com
                    </div>
                    <div class="whatsapp">
                        <img src="images/whatsapp-icon.png" alt="">
                        +51 939398137
                    </div>
                </div>

            </div>
        </section>
    </main>
        
        <footer>
            <div class="contenedor">
                <div class="redes">
                    <a href="#"><img src="images/facebook.png" alt="imagen de facebook"></a>
                    <a href="https://www.linkedin.com/in/wilmer-t-0809814a/">
                    <img src="images/linkedin.png" alt="imagen de linkedin"></a>
                    <a href="https://www.youtube.com/channel/UCddQhZQlNROo5W233PK0e3g?view_as=subscriber">
                    <img src="images/youtube.png" alt="imagen de youtube"></a>
                    <a href="#"><img src="images/facebook.png" alt="imagen de facebook"></a>
                </div>
                <div class="parrafo">
                    <p> &copy; 2019 Wilmer Tarrillo | Diseñador Web Perú. Todos los derechos reservados</p>
                </div>
            </div>
        </footer>

    <script
		src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
              
    <script src="owl/owl.carousel.min.js"></script>
    <script >
        $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                dots:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            })
    </script>

    <script>
        $(document).ready(function(){

            $(window).scroll(function(){
                scroll = $(window).scrollTop();
                if (scroll > 100) {
                    $('.menu').css({"position":"fixed"});
                    $('.menu').css({"width":"100%"});
                    $('.menu').css({"top":"0"});
                    $('.menu').css({"background":"#fff"});
                    $('.menu a').css({"color":"#000"});
                    $('.logo').css({"color":"#000"});
                    $('.menu').css({"box-shadow":"rgba(0, 0, 0, 0.22) 6px 1px 1px 1px"});
                    $('.menu').css({"z-index":"100"});
                } else {
                    //cuando el scroll es para arriba
                    $('.menu').css({"position":"relative"});
                    $('.menu').css({"background":"transparent"});
                    $('.menu').css({"box-shadow":"0 0 0"});
                    $('.menu a').css({"color":"#fff"});
                    $('.logo').css({"color":"#fff"});
                }
            })
            //para la animacion del resumen del menu en movile
            $('.menu-icon').click(function(){
                $('header nav').slideToggle();
            })

        })
    
    </script>
</body>
</html>