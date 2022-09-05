<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilocv.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7286fe37dd.js" crossorigin="anonymous"></script>

    <title>Jose Imbrenda</title>
</head>

<body>
    <?php
    // CONSTANTES
    const NOMBRE = "JOSE IMBRENDA";
    const CUIT = 20315335230;
    const DIRECCION = "Miro 2493";
    const TELEFONO = 5491160255236;
    const MAIL = "jsimbrenda@gmail.com";
    // VARIABLES
    $anioInicio = 0;
    $anioFinal = 0;
    $periodoTrabajado = 0;
    ?>

    <header>
    <h1> <?php echo NOMBRE  ?></h1>
    </header>
    <div id="div1">
        <div id="imagen">
            <img src="jose.jpeg" alt="Jose Imbrenda">
        </div>
        <div id="datos">
            <h2>Datos Personales</h2>
            <ul>
                <li>C.U.I.T.: <?php echo CUIT ?> </li>
                <li>Direccion: <?php echo DIRECCION ?> </li>
                <li>Telefono: <?php echo TELEFONO ?> </li>
                <li>Email: <?php echo MAIL ?> </li>
            </ul>
        </div>
    </div>
    <br>
    <div id="contenedor2">
        <div class="formato">
            <h2>Experiencia Laboral</h2>
            <ul>
                <li>
                    <?php 
                    $anioInicio = 2012;
                    $anioFinal = 2014;
                    $periodoTrabajado = $anioFinal - $anioInicio;
                    ?>
                    <h3> Marco Trade Marketing. <?php echo "Dede $anioInicio hasta $anioFinal . Periodo trabajado:  $periodoTrabajado años"?></h3>
                </li>
                <p>Empresa dedicada a la asistencia en Puntos de Venta,
                    Capacitacion de Vendedores y Estrategias de venta.</p>
                <p>J.M. de Arco 956, CABA - Tel: 011-4592-5698 <a href="https://marcomkt.com/mkttrends/" target="_blank"> Sitio Web</a></p>

                <h4>Funciones desempeñadas:</h4>
                <ul>
                    <li>Auditorias en puntos de ventas para la firma Motorola.</li>
                    <li>Capacitación y asesoramiento sobre los diferentes productos de la empresa a vendedores y responsables de los PDV.</li>
                    <li>Ubicación estratégica de material P.O.P, control de la imagen visual de los productos de la empresa y de la competencia.</li>
                    <li>Generación de vínculos claves, en la zona asignada, para la realización del trabajo.</li>
                    <li>Comunicación sobre acciones, promociones, incentivos, nuevos lanzamientos y asesoramiento sobre los productos, por parte de la empresa para con los puntos de venta y consumidores finales.</li>
                    <li>Capacitación sobre lo anteriormente mencionado a nuevos integrantes del equipo.</li>
                </ul>
                <li>
                <?php 
                    $anioInicio = 2010;
                    $anioFinal = 2012;
                    $periodoTrabajado = $anioFinal - $anioInicio;
                    ?>
                    <h3> Datamap Trade Marketing. <?php echo "Dede $anioInicio hasta $anioFinal . Periodo trabajado:  $periodoTrabajado años"?></h3>
                </li>
                <p>Empresa dedicada a la geolocalizacion de zonas calientes para venta de productos,
                    asistencia en PDV y consultoria en Ventas.</p>
                <p>Belgrano 594, CABA - Tel: 011-4568-6242.</p>
                <h4>Funciones desempeñadas:</h4>
                <ul>
                    <li>Deteccion de zonas potenciales para el desarrollo de acciones de venta.</li>
                    <li>Distribucion de Material de apoyo para la venta.</li>
                    <li>Capacitacion sobre ventas.</li>
                </ul>
            </ul>
        </div>
        <div class="formato">
            <h2>Estudios</h2>
            <ul>
                <li>
                    <h3>Terciarios</h3>
                </li>
                <ul>
                    <li>2022 - UTN a Distancia - Full Stack Developer con JS y React - en curso</li>
                    <li>2022 - UDEMY- The complete JavasCript Course 2022 - en curso</li>
                    <li>2022 - UTN a Distancia - Curso de Fundamentos de Programacion - Nota Sobresaliente (10) <a href="Certificados.pdf" target="_blank">Ver Certificado</a></li>
                    <li>2018 - CECARP - Gastronomico Profesional</li>
                </ul>
                <li>
                    <h3>Universitarios</h3>
                </li>
                <ul>
                    <li> 2002-2005 Universidad de Moron: Lic. en Relaciones Publicas (22 materias aprobadas)</li>
                </ul>
                <h3>Secundario</h3>
                <ul>
                    <li>Colegio Corazon Eucaristico de Haedo - Economia y Gestion de Org.</li>
                </ul>
                <li>
                    <h3>Idiomas</h3>
                </li>
                <ul>
                    <li>2022 - Inglés (preparando el First Certificate para rendir en 2023)</li>
                    <li>1997 - 2002 - Inglés: Traut Hall Institute</li>
                </ul>
            </ul>
        </div>
        <div class="formato">
            <h2>Objetivos y Aptitudes</h2>
            <ul>
                <li>
                    <h3>Objetivos</h3>
                </li>
                <ul>
                    <li>
                        <p>Estoy en la busqueda constante de desafiarme a mi mismo, tengo como objetivo principal, profesionalizarme en el campo de IT, mas especificamente en el desarrollo web, tanto Front-end y profundizandome en Back-end. Para ello me encuentro haciendo varios cursos en simultaneo y por comenzar otros</p>
                    </li>
                </ul>
                <li>
                    <h3>Aptitudes</h3>
                    <?php
                    define( "APTITUDES", array ("Esfuerzo y dedicacion", "Capacidad de entender procesos logicos", "Adaptacion a entornos laborales nuevos"));
                    ?>
                </li>
                <ul>
                    <li><?php echo APTITUDES[0] ?> </li>
                    <li><?php echo APTITUDES[1] ?></li>
                    <li><?php echo APTITUDES[2] ?></li>
                </ul>
        </div>
    </div>
    <footer>
        <div id="iconos">
            <a href="https://wa.me/+5491160255236" target="_blank"><i class="fa-brands fa-whatsapp fa-beat"></i></a>
            <a href="mailto:jsimbrenda@gmail.com"><i class="fa-solid fa-envelope fa-beat"></i></a>
            <a href="https://www.linkedin.com/feed/"><i class="fa-brands fa-linkedin fa-beat"></i></a>
        </div>
    </footer>
</body>

</html>