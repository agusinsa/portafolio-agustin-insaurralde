
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agustin Insaurralde</title>

    <!--CSS-->
    <link rel="stylesheet" href="css/styles.css">

    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

   
</head>
<body>
    <!--HEADER-->
    <div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="#home"><img src="img/logo1.png" alt=""></a>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="#home" id="item">Inicio</a></li>
                    <li><a href="#aboutme" id="item2">Sobre Mi</a></li>
                    <li><a href="#portfolio" id="item3">Portafolio</a></li>
                    <li><a href="#contact" id="item4">Contacto</a></li>
                </ul>
            </nav>
            <div class="nav-responsive">
                <i class="fa-solid fa-bars"></i>
            </div>
        </header>
    </div>

    <!--HOME-->
    <section id="home" class="inicio">
        <div class="contenido-banner">
            <div class="contenedor-img">
                <img src="img/memoji2.png" alt="">
                <h1>Agustin Insaurralde</h1>
                <h2>Software Developer -  Application Support Maintenance</h2>
                <div class="redes">
                    <a href="https://github.com/agusinsa"><i class="fa-brands fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/agus-insa/"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="mailto:agusinsa2412@gmail.com"><i class="fa-brands fa-google"></i></a>
                    <a href="https://wa.me/5491167987583"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </div>

    </section>

    <!--ABOUT ME--> <!--A MODIFICAR-->
    <section id="aboutme" class="aboutme">
        <div class="contenido-seccion">
            <h2>Sobre Mí</h2>
            <p><span>Hola, me llamo Agustin Insaurralde.</span> Soy técnico en Informática, estudiante de la carrera de Licenciatura en Sistemas y programador web. Me defino como una persona que busca siempre desafíos donde pueda adquirir nuevos conocimientos y también plasmar los que ya tengo. Siempre con buena predisposicion a abrirme a nuevas prácticas y tecnologías en el mundo del desarrollo y sobre todo con ganas de tener un crecimiento tanto laboral como personal en cualquier lugar o posición donde se me requiera.</p>

            <div class="fila">
                <!-- datos personales -->
                <div class="col">
                    <h3>Datos Personales</h3>
                    <ul>
                        <li>
                            <strong>Fecha de Nacimiento</strong>
                            24-12-1999
                        </li>
                        <li>
                            <strong>Teléfono</strong>
                            +54 9 116798-7583
                        </li>
                        <li>
                            <strong>Email</strong>
                            agusinsa2412@gmail.com
                        </li>
                        <li>
                            <strong>Ubicacion</strong>
                            Tortuguitas, Buenos Aires, Argentina
                        </li>
                        <li>
                            <strong>Puesto</strong>
                            <span>Desarrollador PHP</span>
                        </li>
                    </ul>
                </div>

                <!-- intereses -->
                <div class="col">
                    <h3>Intereses</h3>
                    <div class="contenedor-intereses">
                        <div class="interes">
                            <i class="fa-solid fa-gamepad"></i>
                            <span>JUEGOS</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-headphones"></i>
                            <span>MUSICA</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-plane"></i>
                            <span>VIAJAR</span>
                        </div>
                        <div class="interes">
                            <i class="fa-brands fa-apple"></i>
                            <span>TECNOLOGÍA</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-person-hiking"></i>
                            <span>DEPORTE</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-futbol"></i>
                            <span>FÚTBOL</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-car"></i>
                            <span>AUTOS</span>
                        </div>
                        <div class="interes">
                            <i class="fa-brands fa-node"></i>
                            <span>NODE.JS</span>
                        </div>
                        
                    </div>
                </div>
            </div>
            <a href="src/CV.pdf">
                <button>
                Descargar CV <i class="fa-solid fa-download"></i>
                <span class="overlay"></span>
            </button>
            </a>
        </div>
    </section>

    <!--SKILLS--> <!--A MODIFICAR-->
    <section class="skills" id="skills">
        <div class="contenido-seccion">
            <h2>Skills</h2>
            <div class="fila">
                <!--Technicals skills-->
                <div class="col">
                    <h3>Technicals Skills</h3>
                    <div class="skill">
                        <span>JavaScript</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>40%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>HTML</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>70%</span>
                            </div>
                        </div>
                        <div class="skill">
                            <span>CSS</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>50%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>PHP</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>50%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>React</span>
                            <div class="barra-skill">
                                <div class="progreso react">
                                    <span>30%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>SQL</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>40%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!--Professionall skills-->
                 <div class="col">
                    <h3>Proffessional Skills</h3>
                    <div class="skill">
                        <span>Comunicacion</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Trabajo En equipo</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>85%</span>
                            </div>
                        </div>
                        <div class="skill">
                            <span>Creatividad</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>60%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>Dedidacion</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>85%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>Autodidacta</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>70%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>Responsabilidad</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>99%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--PORTFOLIO-->
    <section id="portfolio" class="portfolio">
        <div class="contenido-seccion">
            <img src="img/memoj_laptopi.png" alt="">
            <h2>Portafolio</h2>          
            <div class="proyectos">
                <div class="proyecto">
                    <img src="img/p1.jpg" alt="">
                    <div class="overlay">
                        <h3>Pintureria Iberoamericana</h3>
                        <p>E-commerce</p>
                        <div class="tecnologias">
                            <i class="fa-brands fa-php"></i>
                            <i class="fa-brands fa-html5"></i>
                            <i class="fa-brands fa-css3"></i>
                            <i class="fa-brands fa-bootstrap"></i>
                            <i class="fa-brands fa-js"></i>
                            <i class="fas fa-database"></i>
                        </div>                 
                    </div>
                </div>
                <div class="proyecto">
                    <a href="https://www.rvafumigaciones.com/">
                        <img src="img/p2.jpg" alt="">
                        <div class="overlay">
                            <h3>Fumigaciones R.V.A</h3>
                            <p>Landing Page</p>
                            <div class="tecnologias">
                                <i class="fa-brands fa-php"></i>
                                <i class="fa-brands fa-html5"></i>
                                <i class="fa-brands fa-css3"></i>
                                <i class="fa-brands fa-bootstrap"></i>
                                <i class="fa-brands fa-js"></i>
                            </div> 
                        </div>
                    </a>
                </div>
                <div class="proyecto">
                    <a href="https://agusinsa.github.io/React-GifExpert-App/">
                    <img src="img/p3.jpg" alt="">
                        <div class="overlay">
                            <h3>Gift Expert App</h3>
                            <p>React App</p>
                            <div class="tecnologias">
                                    <i class="fa-brands fa-html5"></i>
                                    <i class="fa-brands fa-css3"></i>
                                    <i class="fa-brands fa-bootstrap"></i>
                                    <i class="fa-brands fa-js"></i>
                                    <i class="fa-brands fa-react"></i>
                                </div> 
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--CONTACTO-->
    <section id="contact" class="contact">
        <div class="contenido-seccion">
            <h2>Contacto</h2>
            <div class="fila">
                <!--Formulario-->
                <div class="col">
                    <div id="alerta"></div>
                    <form id="form-contact" method="post">
                        <input type="text" placeholder="Nombre completo" name="nombre"  autocomplete="off">
                        <input type="email" placeholder="Correo Electrónico" name="email"  autocomplete="off">
                        <input type="text" placeholder="Asunto" name="asunto"  autocomplete="off">
                        <textarea name="msj" id="" cols="30" rows="6" placeholder="Mensaje" ></textarea>
                        <button type="submit" name="submit">
                            Enviar Mensaje
                            <i class="fa-solid fa-paper-plane"></i>
                            <span class="overlay"></span>
                        </button>
                    </form>
                </div>
                <!--Relleno-->
                <div class="col">
                    <img class="memoji_contacto" src="img/memoj_contacto.png" alt="">
                </div>
                <!-- <div class="col">
                    <img src="img/ubicacion.png" alt="">
                    <div class="info">
                        <ul>
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                Nicaragua 159, San Rafael Mza
                            </li>
                            <li>
                                <i class="fa-solid fa-mobile-screen"></i>
                                Llamanos: 2384 - 4343443 
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                Email: cw@example.com
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!--FOOTER-->
    <footer>
        <a href="#home" class="subir">
            <i class="fa-regular fa-circle-up"></i>
        </a>
        <div class="redes">
            <a href="https://github.com/agusinsa"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.linkedin.com/in/agus-insa/"><i class="fa-brands fa-linkedin"></i></a>
            <a href="mailto:agusinsa2412@gmail.com"><i class="fa-brands fa-google"></i></a>
            <a href="https://wa.me/5491167987583"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
        <p>Desarrollado por <span>Agustín Insaurralde</span>, Buenos Aires Argentina <?php echo date("Y")?></p>
    </footer>
</body>

    <!--JAVASCRIPT-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="js/fetch.js"></script>

</html>