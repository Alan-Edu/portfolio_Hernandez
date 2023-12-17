<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
            integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Portfolio edu</title>
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" href="resources/css/diseño.css">
    </head>
    <body>
        <!-- MENU ENCABEZADO -->
        <div class="contenedor-header">
            <header>
                <div class="logo">
                    <a href="#">Alan Edu</a>
                </div>
                <nav id="nav">
                    <ul>
                        <li><a href="#inicio" onclick="seleccionar()">INICIO</a></li>
                        <li><a href="#sobremi" onclick="seleccionar()">SOBRE MI</a></li>
                        <li><a href="#skills" onclick="seleccionar()">HABILIDADES</a></li>
                        <li><a href="#curriculum" onclick="seleccionar()">CURRICULUM</a></li>
                        <li><a href="#portfolio" onclick="seleccionar()">PORTAFOLIO</a></li>
                        <li><a href="#contacto" onclick="seleccionar()">CONTACTO</a></li>
                        <li><a href="../Proyecto Web/index.php">PROYECTOS</a></li>
                    </ul>
                </nav>
                <div class="nav-responsive" onclick="mostrarOcultarMenu()">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </header>
        </div>

        <!-- SECCION INICIO -->
        <section id="inicio" class="inicio">
            <div class="contenido-banner">
                <div class="contenedor-img">
                    <img src="img/edu.png" alt>
                </div>
                <h1>Alan Edu Hernandez</h1>
                <h2>Ingeniero de Sistemas</h2>
                <div class="redes">
                    <a href="https://web.facebook.com/profile.php?id=100009126681055"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/aledhernandezz"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=927319124"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="https://www.linkedin.com/in/alan-edu-hernandez-malca-1313a1280/"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://www.youtube.com/channel/UC1Ae9CyHuO5li9SiPpasVVw"><i class="fa-brands fa-youtube"></i></a>

                    <!-- <a href="#"><i class="fa-solid fa-rss"></i></a> -->
                    <!-- <a href="#"><i class="fa-brands fa-skype"></i></a> -->
                    <!-- <a href="#"><i class="fa-brands fa-twitter"></i></a> -->
                </div>
            </div>
        </section>

        <!-- SECCION SOBRE MI -->
        <section id="sobremi" class="sobremi">
            <div class="contenido-seccion">
                <h2>Sobre Mí</h2>
                <p><span>¡Un gusto😊! Mi nombre es, Alan Edu Hernandez Malca.</span>Tengo
                    20 años de edad, y me dedico a la
                    resolución de problemas y la innovación tecnológica. Mi
                    viaje académico ha estado marcado por una curiosidad
                    insaciable por entender cómo funcionan los sistemas
                    informáticos y cómo pueden ser mejorados para satisfacer las
                    crecientes demandas del mundo digital. A lo largo de mi
                    carrera, voy cultivando habilidades sólidas en programación,
                    diseño de software (frontend,backend), gestión de proyectos,
                    base de datos, respaldadas por
                    una sólida formación en conceptos fundamentales de la
                    ingeniería de sistemas. Mi enfoque no se limita únicamente
                    al código; Tengo una visión integral que abarca desde el
                    análisis de requisitos hasta la implementación efectiva y el
                    mantenimiento de sistemas eficientes. <h5>Además de mi
                        sólida formación, siempre estoy en un aprendizaje
                        continuo y siempre busco oportunidades para expandir mis
                        conocimientos. Mi objetivo es contribuir al campo de la
                        ingeniería de sistemas mediante la aplicación de mis
                        habilidades y conocimientos en proyectos que tengan un
                        impacto positivo en la sociedad.</h5></p>

                <div class="fila">
                    <!-- datos personales -->
                    <div class="col">
                        <h3>Mis Datos Personales</h3>
                        <ul>
                            <li>
                                <strong>Fecha De Cumpleaños</strong>
                                14-12-2003
                            </li>
                            <li>
                                <strong>Teléfono</strong>
                                +(51) 927 319 124
                            </li>
                            <li>
                                <strong>Email</strong>
                                alaneduh231.com@gmail.com
                            </li>
                            <li>
                                <strong>Website</strong>
                                www.example.com
                            </li>
                            <li>
                                <strong>Dirección</strong>
                                San Miguel, Lima
                            </li>
                            <li>
                                <strong>Cargo</strong>
                                <span>FREELANCE</span>
                            </li>
                        </ul>
                    </div>

                    <!-- intereses -->
                    <div class="col">
                        <h3>Intereses</h3>
                        <div class="contenedor-intereses">
                            <div class="interes">
                                <i class="fa-solid fa-cogs"></i>
                                <span>INVESTIGAR</span>
                            </div>
                            <div class="interes">
                                <i class="fa-solid fa-code"></i>
                                <span>PROGRAMAR</span>
                            </div>
                            <div class="interes">
                                <i class="fa-solid fa-futbol"></i>
                                <span>FUTBOL</span>
                            </div>
                            <div class="interes">
                                <i class="fa-solid fa-headphones"></i>
                                <span>MUSICA</span>
                            </div>
                            <div class="interes">
                                <i class="fa-solid fa-motorcycle"></i>
                                <span>VIAJAR</span>
                            </div>
                            <div class="interes">
                                <i class="fa-solid fa-person-hiking"></i>
                                <span>DEPORTE</span>
                            </div>
                            <div class="interes">
                                <i class="fa-solid fa-book"></i>
                                <span>LIBROS</span>
                            </div>
                            <div class="interes">
                                <i class="fa-solid fa-crosshairs"></i>
                                <span>JUEGOS</span>
                            </div>
                            <div class="interes">
                                <i class="fa-solid fa-camera"></i>
                                <span>FOTOS</span>
                            </div>

                        </div>
                    </div>
                </div>
                <button>
                    Descargar CV <i class="fa-solid fa-download"></i>
                    <span class="overlay"></span>
                </button>
            </div>
        </section>

        <!-- SECCION SKILLS -->
        <section class="skills" id="skills">

            <div class="contenido-seccion">
                <h2>HABILIDADES</h2>
                <div class="fila">
                    <!-- Technical Skill -->
                    <div class="col">
                        <h3>LENGUAJES DE PROGRAMACION</h3>
                        <div class="skill">
                            <span>Javascript</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>65%</span>
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
                            <span>HTML & CSS</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>8O%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>JAVA</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>65%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>PYTHON</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>55%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>MYSQL WORKBENCH</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>85%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>SQL</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>85%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>ERWIN</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>80%</span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="skill">
                            <span>Photoshop</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>95%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>Wordpress</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>81%</span>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="skill">
                            <span>Drupa</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>55%</span>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- Professional Skills -->
                    <div class="col">
                        <h3>ERRAMIENTAS DE DISEÑO</h3>

                        <div class="skill">
                            <span>FIGMA</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>8O%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>LUCIDCHART</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>84%</span>
                                </div>
                            </div>
                        </div>

                        <div class="skill">
                            <span>UNITY</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>70%</span>
                                </div>
                            </div>
                        </div>

                        <div class="skill">
                            <span>CINEMA 4D</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>75%</span>
                                </div>
                            </div>
                        </div>
                        <h3>frameworks</h3>
                        <div class="skill">
                            <span>BOOSTRAP</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>6O%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>BULMA</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>50%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h3>HABILIDADES PROFESIONALES</h3>
                        <div class="skill">
                            <span>Comunicación</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>80%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>Trabajo en Equipo</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>70%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>Creatividad</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>99%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>Dedicación</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>65%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>Proyect Management</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>94%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>Responsabilidad</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>98%</span>
                                </div>
                            </div>
                        </div>

                        <div class="skill">
                            <span>Compromiso</span>
                            <div class="barra-skill">
                                <div class="progreso">
                                    <span>96%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <!-- <p>Libro recomendado para iniciar <a href="https://uniwebsidad.com/?from=librosweb">click aquì</a></p> -->
                </div>
            </div>
        </section>

        <!-- SECCION CURRICULUM -->
        <section id="curriculum" class="curriculum">
            <div class="contenido-seccion">
                <h2>Curriculum</h2>

                <div class="fila">
                    <div class="col izquierda">
                        <h3>Educación</h3>
                        <div class="item izq">
                            <h4>Ingeniería de Sistemas</h4>
                            <span class="casa">Universidad César Vallejo</span>
                            <span class="fecha">2020 - 2025</span>
                            <p>Estudiante de Ingeniería de Sistemas con enfoque
                                en desarrollo de software, gestiòn de proyectos, Anàlisis de datos, desarrollo web (frontend, backend). Actualmente
                                cursando el septimo ciclo.</p>
                            <div class="conectord">
                                <div class="circulod"></div>
                            </div>
                        </div>
                        <div class="item izq">
                            <h4>Curso de Ciberseguridad</h4>
                            <span class="casa">Plataforma de Educación en Línea</span>
                            <span class="fecha">2021 - 2022</span>
                            <p>Realicé un curso en línea de ciberseguridad donde
                                adquirí conocimientos en la identificación de vulnerabilidades,
                                 análisis de seguridad, o manejo de incidentes de ciberseguridad.</p>
                            <div class="conectord">
                                <div class="circulod"></div>
                            </div>
                        </div>
                        <div class="item izq">
                            <h4>Curso de Còmputo</h4>
                            <span class="casa">Plataforma de Educación en Línea</span>
                            <span class="fecha">2021 - 2022</span>
                            <p>Realicé un curso en línea de còmputo donde adquirì conocimientos 
                                relacionados a redes donde hacemos uso de cisco
                            </p>
                            <div class="conectord">
                                <div class="circulod"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col derecha">
                        <h3>Experiencia Académica</h3>
                        <div class="item der">
                            <h4>Proyecto de Desarrollo Web</h4>
                            <span class="casa">Implementaciòn de una pàgina web para el proceso de ventas</span>
                            <span class="fecha">2022 - Actualidad</span>
                            <p>Participé como desarrollador en un proyecto
                                académico de creación de un sitio web
                                interactivo utilizando PHP, html, css, boostrap, SweetAlert2, js haciendo uso de MVC</p>
                            <div class="conectord">
                                <div class="circulod"></div>
                            </div>
                        </div>
                        <div class="item der">
                            <h4>Grupo de Estudio de Redes</h4>
                            <span class="casa">Universidad César Vallejo</span>
                            <span class="fecha">2021 - 2022</span>
                            <p>Formé parte de un grupo de estudio centrado en
                                temas avanzados de redes, incluyendo
                                configuración de routers y seguridad de redes.</p>
                            <div class="conectord">
                                <div class="circulod"></div>
                            </div>
                        </div>
                        <div class="item der">
                            <h4>Proyecto de Modelado</h4>
                            <span class="casa">Universidad César Vallejo</span>
                            <span class="fecha">2021 - 2022</span>
                            <p>Realicè un proyecto de modelaciòn y animaciòn haciendo uso de Cinema 4d, Unity, Blender y algunas librerias
                                donde hice uso del lenguaje de programación C# </p>
                            <div class="conectord">
                                <div class="circulod"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCION PORTFOLIO -->
        <section id="portfolio" class="portfolio">
            <div class="contenido-seccion">
                <h2>PORTFOLIO</h2>
                <div class="galeria">
                    <div class="proyecto">
                        <img src="img/edu9.jpeg" alt>
                        <div class="overlay">
                            <h4>¡Programar: donde los errores son oportunidades de aprendizaje! 🛠️</h4>
                            <!-- <p>Fotografía</p> -->
                        </div>
                    </div>
                    <div class="proyecto">
                        <img src="img/edu10.jpeg" alt>
                        <div class="overlay">
                            <h4>Entre llaves y sueños de código. 🚀</h4>
                            <!-- <p>Fotografía</p> -->
                        </div>
                    </div>
                    <div class="proyecto">
                        <img src="img/edu3.jpeg" alt>
                        <div class="overlay">
                            <h4>Programar es mi lugar feliz. 💻</h4>
                            <!-- <p>Fotografía</p> -->
                        </div>
                    </div>
                    <div class="proyecto">
                        <img src="img/edu4.jpeg" alt>
                        <div class="overlay">
                            <h4>Programar: Donde lo imposible se convierte en 'Hola Mundo.</h4>
                            <!-- <p>Fotografía</p> -->
                        </div>
                    </div>
                    <div class="proyecto">
                        <img src="img/edu5.jpeg" alt>
                        <div class="overlay">
                            <h4>En el mundo de la programación, la sintaxis es el lenguaje de la magia. ✨</h4>
                            <!-- <p>Fotografía</p> -->
                        </div>
                    </div>
                    <div class="proyecto">
                        <img src="img/edu6.jpeg" alt>
                        <div class="overlay">
                            <h4>Mantén la calma y sigue programando.</h4>
                            <!-- <p>Fotografía</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCION CONTACTO -->
        <section id="contacto" class="contacto">
            <div class="contenido-seccion">
                <h2>CONTACTO</h2>
                <div class="fila">
                    <!-- Formulario -->
                    <div class="col">
                        <input type="text" placeholder="Tú Nombre">
                        <input type="text" placeholder="Número telefónico">
                        <input type="text" placeholder="Dirección de correo ">
                        <input type="text" placeholder="Tema">
                        <textarea name id cols="30" rows="10"
                            placeholder="Mensaje"></textarea>
                        <button>
                            Enviar Mensaje<i class="fa-solid fa-paper-plane"></i>
                            <span class="overlay"></span>
                        </button>
                    </div>
                    <!-- Mapa -->
                    <div class="col">
                        <img src="img/ubi.png" alt>
                        <div class="info">
                            <ul>
                                <li>
                                    <i class="fa-solid fa-location-dot"></i>
                                    San Miguel, Lima
                                </li>
                                <li>
                                    <i class="fa-solid fa-mobile-screen"></i>
                                    Contactame: 927 319 124                                </li>
                                <li>
                                    <i class="fa-solid fa-envelope"></i>
                                    Email: alaneduh231@gmail.com
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- footer -->
        <footer>
            <a href="#inicio" class="arriba">
                <i class="fa-solid fa-angles-up"></i>
            </a>
            <div class="redes">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-skype"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#"><i class="fa-solid fa-rss"></i></a>
            </div>
        </footer>

        <script src="script.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="resources/js/sweetAlert.js"></script>
    </body>
</html>