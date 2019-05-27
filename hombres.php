<?php require "conec.php";?>
<!doctype html>
<html class="no-js" lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>OptiAustral</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <!-- Favicon -->
  <link rel="icon" href="http://optiaustral.cl/wp-content/uploads/2017/12/cropped-optiaustra-favicon-32x32.png" sizes="32x32" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Grid Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/nouislider.min.css">
  <!-- Styles CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <!-- Top Menu -->
        <div class="top">
            <div class="container">
                <ul class="top-menu">
                    <li><a href="#">Horario de 9:00 am a 19:00 pm</a></li>
                </ul>
                <ul class="top-menu">
                    <li><a href="tel:6004509000" class="call"><i class="fa fa-phone"></i> + 56 2 27282469</a></li>
                </ul>
                <ul class="top-menu">
                    <li><a href="tel:6004509000">Ayuda</a></li>
                    <li><a href="#">Mi Cuenta</a></li>
                    <li><a href="#">Ordenes</a></li>
                    <li>
                        <a href="javascript:void(0)" class="favorites">
                            <i class="fa fa-heart-o"></i>
                            <i class="fa fa-heart"></i>
                            <div class="message1">
                                Añadido a Favoritos
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="cart">
                            <i class="fa fa-shopping-cart"></i>
                            <div class="message2">
                                Añadido al Carrito
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Navbar -->
        <div class="navbar">
            <div class="container">
                <a href="index.html" class="logo">
                    <img src="img/logo.png" alt="">
                </a>
                <span class="fa fa-bars menu-toggle"></span>
                <!-- Menu -->
                <nav class="menu">
                    <li><a href="index.html">Inicio</a></li>
                    <li class="products-dropdown">
                        <a href="javascript:void(0)">Productos</a>
                        <ul class="p-dropdown">
                            <a href="hombres.php">Lentes de Hombre</a>
                            <a href="mujer.php">Lentes de Mujes</a>
                        </ul>
                    </li>
                    <li class="services-dropdown">
                        <a href="javascript:void(0)">Servicios</a>
                        <ul class="s-dropdown">
                            <a href="#">Servicios a Empresas</a>
                        </ul>
                    </li>
                    <li><a href="tel:6004509000">Contacto</a></li>
                    <li class="ubicanos-dropdown">
                        <a href="javascript:void(0)">Ubicanos</a>
                        <ul class="u-dropdown">
                            <a href="https://goo.gl/maps/DkdLXekpWCH2">Santiago</a>
                            <a href="https://goo.gl/maps/aSRdbhqvpB82">Quilpué</a>
                        </ul>
                     </li>
                    <li>
                        <!-- Search bar -->
                        <div class="search">
                            <input type="text" placeholder="Buscar..">
                            <i class="fa fa-search"></i>
                        </div>
                    </li>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <!-- Banner -->
        <div class="slider">
            <div class="slider-caption">
                <h3>Lentes de Hombre</h3>
                <p>Aquí encontraras un lente que se adapte a tu personalidad</p>
                <div class="slider-group">
                    <a href="#" class="slider-button">Hacer Pedido</a>
                    <a href="#" class="slider-button slider-button-outline">Contactanos</a>
                    <div class="slider-socials">
                        <a href="https://www.facebook.com/pg/optiaustral/">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://twitter.com/optiaustral">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/opti.austral/">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/today/author/optiaustral">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="slider-content-hombre">
                <div class="d-none d-sm-block"><img src="img/banner-men.png" style="height: 300px;"></div>
                <div class="d-block d-sm-none"><img src="img/banner-men-movil.png" alt=""></div>
            </div>
        </div>

        <!-- Brands -->
        <section class="brands">
            <div class="container">
                <li class="brands-item">
                    <img src="img/marcas/dakley.png" alt="">
                </li>
                <li class="brands-item">
                    <img src="img/marcas/guess.png" alt="">
                </li>
                <li class="brands-item">
                    <img src="img/marcas/michael.png" alt="">
                </li>
                <li class="brands-item">
                    <img src="img/marcas/miu.png" alt="">
                </li>
                <li class="brands-item">
                    <img src="img/marcas/gucci.png" alt="">
                </li>
                <li class="brands-item">
                    <img src="img/marcas/persol.png" alt="">
                </li>
                <li class="brands-item">
                    <img src="img/marcas/prada.png" alt="">
                </li>
                <li class="brands-item">
                    <img src="img/marcas/rayban.png" alt="">
                </li>
                <li class="brands-item">
                    <img src="img/marcas/versace.png" alt="">
                </li>
            </div>
        </section>

        <!-- Products -->
        <section class="products">
            <div class="container">
                <div class="filter">
                    <h3>Filtro de Busqueda</h3>
                    <div class="filter-item">
                        <h4>Fijar Precio</h4>
                        <div class="filter-price">
                            <span>
                                <input type="text" placeholder="0">
                                <label for="">Min</label>
                            </span>
                            <span>
                                <input type="text" placeholder="100">
                                <label for="">Max</label>
                            </span>
                        </div>
                        <button href="#" class="button button-primary" style="width: 100%;">Buscar</button>
                    </div>
                    <div class="filter-item">
                        <h4>Condicion</h4>
                        <li>Nuevo</li>
                        <li>Usado</li>
                    </div>
                    <div class="filter-item">
                        <h4>Marcas</h4>
                        <li>Apolo</li>
                        <li>Carrera</li>
                        <li>Canbel</li>
                        <li>Dioxi</li>
                        <li>Fardin</li>
                        <li>Guess</li>
                        <li>Gloss</li>
                        <li>Point</li>
                        <li>Pietri</li>
                        <li>Statisio</li>
                        <li>Tommy Hilfiger</li>
                        <li>Topaz</li>
                        <li>Tropical</li>
                        <li>Ventura</li>
                    </div>
                    <div class="filter-item">
                        <h4>Puesto</h4>
                        <li>Más Visitados</li>
                        <li>Más Vendidos</li>
                        <li>Segun tu Búsqueda</li>
                    </div>
                    <div class="filter-item">
                        <h4>Forma de Marco</h4>
                        <li>Cuadrada</li>
                        <li>Gato</li>
                        <li>Rectangular</li>
                        <li>Redonda</li>
                    </div>
                    <div class="filter-item">
                        <h4>Tipo de Marco</h4>
                        <li>Completo</li>
                        <li>Ligero</li>
                        <li>Sin Aro</li>
                        <li>Sin Montura</li>
                    </div>
                    <div class="filter-item">
                        <h4>Material</h4>
                        <li>Metalico</li>
                        <li>Plastico</li>
                    </div>
                    <div class="filter-item">
                        <h4>Dimensiones</h4>
                        <li>Ancho</li>
                        <div class="filter-range">
                            <img src="img/model-profile.png" alt="">
                            <div id="sliderAncho1"></div>
                        </div>
                        <div class="filter-range">
                            <img src="img/model-front-x.png" alt="">
                            <div id="sliderAncho2"></div>
                        </div>
                        <li>Altura</li>
                        <div class="filter-range">
                            <img src="img/model-profile.png" alt="">
                            <div id="sliderAltura1"></div>
                        </div>
                        <div class="filter-range">
                            <img src="img/model-front-x.png" alt="">
                            <div id="sliderAltura2"></div>
                        </div>
                        <li>Puente</li>
                        <div class="filter-range">
                            <img src="img/model-profile.png" alt="">
                            <div id="sliderPuente1"></div>
                        </div>
                        <div class="filter-range">
                            <img src="img/model-front-x.png" alt="">
                            <div id="sliderPuente2"></div>
                        </div>
                    </div>
                </div>
                <div class="gallery">
                        <?php
                        $consulta="SELECT id_lens_description,codigo, img_artistica from lenses_description where (genero='unisex' OR genero='HOMBRE') and img_artistica!='NULL' LIMIT 12";
                        $resultado=mysqli_query($conexion, $consulta) or die ("no se pudo realizar la consulta por ".mysql_error());
                        while($columna=mysqli_fetch_array($resultado)){?>
                    <div class="gallery-item">
                        <div class="gallery-head">
                            <span>10% Oferta</span>
                            <a href="javascript:void(0)" class="favorites">
                                <i class="fa fa-heart-o"></i>
                                <i class="fa fa-heart"></i>
                            </a>  
                        </div>
                        <div class="gallery-colors">
                            <span class="glass-color-1"></span>
                            <span class="glass-color-2"></span>
                        </div>
                        <?php echo "<a href='detalle.php?id=".$columna['id_lens_description']."' id='glass-color-1'>";?>
                
                          <?php
                            echo"<img src=".$columna['img_artistica'].">";
                        echo "</a>";
                        echo "<div class='gallery-name'>";
                            echo"<span>".$columna['codigo']."</span>";
                        echo "</div>";
                        echo "<div class='gallery-footer'>";
                            echo "<span>$80.30</span>";
                            echo "<span style='font-size: 16px;cursor: pointer;'>Ver</span>";
                        echo "</div>";
                    echo "</div>";
                }?>
               
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <p>2019 Opti Austral, Salud Visual, Opticas en Santiago y Quilpe Sitio Web diseñado y desarrollado por SHAADES DIGITAL SERVICE</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Bxslider -->
    <script src="js/jquery.bxslider.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.js"></script>
    <script src="js/jquery-ui.js"></script>
    <!-- Scripts -->
    <script src="js/app.js"></script>


  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <!-- <script src="https://www.google-analytics.com/analytics.js" async defer></script> -->
</body>

</html>