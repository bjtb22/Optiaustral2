<?php require "conec.php";?>
                        <?php
                        $id=$_GET['id'];
                        $consulta="SELECT *,format(precio,0) as precio from lenses_description, lenses_inventory where pk_inventory_description=id_lens_description and id_lens_description=".$id;
                        $resultado=mysqli_query($conexion, $consulta) or die ("no se pudo realizar la consulta por ".mysql_error());
                        while($columna=mysqli_fetch_array($resultado)){?>
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
  <!-- Styles CSS -->
  <link rel="stylesheet" href="css/magnifier.css">
  <link rel="stylesheet" type="text/css" href="css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
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
        <section class="glass">
            <div class="container">
                <div class="glass-colors">
                    <div class="glass-change">
                        <span class="glass-change-left">
                            <div class="glass-profile" id="front-img">
                                <img <?php echo "src='".$columna['img_frontal']."'"; ?> onclick="cambiar(this)"; id="frontal" class="thumb">
                                <p>Frontal</p>
                            </div>
                            <div class="glass-profile" id="tras-img">
                                <img <?php echo "src='".$columna['img_diagonal']."'"; ?> onclick="cambiar(this)"; id="trasera" class="thumb">
                                <p id="glass2">Perspectiva</p>
                            </div>
                            <div class="glass-profile" id="lat-img">
                                <img <?php echo "src='".$columna['img_lateral']."'"; ?> id="lateral" onclick="cambiar(this)"; class="thumb">
                                <p id="glass3">Lateral</p>
                            </div>
                        </span>
                      
                        <span>
                            <div class="glass-photo" id="users"> 
                                <form id="form1" runat="server" class="flex justify-content-between align-items-center">
                                    <div class="glass-user" id="img_contain">
                                        <img src="img/user-1.png" id="userImg">
        
                                        <div class="glass-move">
                                            <img src="img/glass-move.png" style="position: relative;" class="ui-draggable ui-draggable-handle">
                                        </div>
                                    </div>
                                </form>
                                <div class="glass-users">
                                    <div class="glass-users-item" id="user-1">
                                        <img src="img/user-2.png" id="blah">
                                    </div>
                                    <div class="glass-users-item" id="user-2">
                                        <img src="img/user-1.png">
                                    </div>
                                    <div class="glass-users-item" id="user-3">
                                        <img src="img/user-3.png">
                                    </div>
                                </div>
                            </div>
                            <div class="glass-photo" id="photo">
                                <div class="glass-profile glass-zoomBig">
                                    <img <?php echo "src='".$columna['img_frontal']."'"; ?> id="general" class="thumb">
                               </div>
                            </div>
                        </span>
                    </div>
                    <div class="glass-controls">
                        <div class="fix">
                            <span class="glass-trial">
                                <label class="glass-uplaod" for="inputGroupFile01">
                                    <i class="fa fa-upload"></i>
                                    Cargar Imagen
                                    <input type="file" id="inputGroupFile01" class="imgInp custom-file-input">
                                </label>
                            </span>
                            <span class="glass-trial" id="try"><i class="fa fa-camera"></i>Pruébatelos</span>
                            <span class="glass-trial" id="notTry"><i class="fa fa-eye"></i>Ver Lente</span>
                        </div>
                        <div class="glass-cartInfo">
                            <li>
                                <div class="glass-votes">
                                    <div class="glass-labelStar">
                                        <p>0</p>
                                        <p>5</p>
                                        <p>10</p>
                                        <p>15</p>
                                        <p>20</p>
                                    </div>
                                    <div class="rating" data-rate-value=6></div>
                                    <p>Excelente</p>
                                </div>
                            </li>
                            <li>
                                <div style="font-size: 18px;">
                                    <span><?php echo $columna["codigo"];?></span>
                                </div>
                            </li>
                            <li>
                                <div style="display: flex;flex-direction: column;">
                                    <div class="glass-price">
                                        <p>Precio</p>
                                        <h4><?php echo $columna["precio"]."".$columna["moneda"];?></h4>
                                    </div>
                                    <a href="#" class="glass-trial">Comprar</a>
                                </div>
                            </li>
                        </div>  
                    </div>
                </div>
                <sidebar class="glass-description">
                    <h3>Descripcion del Producto</h3>
                    <article>
                        <h4>Marcas y Medidas</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab nostrum eaque illo commodi quia explicabo facilis quaerat provident eveniet delectus.</p>
                        <ul>
                            <li>Detalles</li>
                            <?php echo "<li>Talla: <span>".$columna['talla']."</span></li>";?>
                            <?php echo "<li>Material: <span>".$columna['mterial']."</span></li>"?>
                            <?php echo "<li>Forma: <span>".$columna['forma']."</span></li>"?>
                            <?php echo "<li>Bisagras de primavera: <span>Si</span></li>"?>
                            <?php echo "<li>Color: <span>".$columna['color']."</span></li>"?>
                        </ul>
                        <ul>
                            <li>Medidas</li>
                            <?php echo "<li><img src='img/model-front-y.png'>Altura: <span>".$columna['altura']."mm</span></li>";?>
                            <?php echo "<li><img src='img/model-front-x.png'>Anchura: <span>".$columna['ancho']."mm</span></li>";?>
                            <?php echo "<li><img src='img/model-space.png'>Puente: <span>".$columna['puente']."mm</span></li>";?>
                            <?php echo "<li><img src='img/model-profile.png'>Templo: <span>".$columna['varilla']."mm</span></li>";?>
                        </ul>
                        <?php }?>
                    </article>
                </sidebar>
            </div>
        </section>

         <div class="offerts">
            <div class="container">
                <h3>Lentes en <span>Oferta</span></h3>
                <p>Revisa nuestro catálogo de ofertas especiales</p>
                <div class="offerts-items">
                    <a href="detalle.html" class="offerts-item">
                        <span>Oferta</span>
                        <img src="img/glass-1.png" alt="">
                        <h4 class="offerts-price">50.000,00 Pcl</h4>
                    </a>
                    <a href="detalle.html" class="offerts-item">
                        <span>Oferta</span>
                        <img src="img/glass-2.png" alt="">
                        <h4 class="offerts-price">50.000,00 Pcl</h4>
                    </a>
                    <a href="detalle.html" class="offerts-item">
                        <span>Oferta</span>
                        <img src="img/glass-3.png" alt="">
                        <h4 class="offerts-price">50.000,00 Pcl</h4>
                    </a>
                    <a href="detalle.html" class="offerts-item">
                        <span>Oferta</span>
                        <img src="img/glass-4.png" alt="">
                        <h4 class="offerts-price">50.000,00 Pcl</h4>
                        
                    </a>
                    <a href="detalle.html" class="offerts-item">
                        <span>Oferta</span>
                        <img src="img/glass-5.png" alt="">
                       <h4 class="offerts-price">50.000,00 Pcl</h4>
                    </a>
                    <a href="detalle.html" class="offerts-item">
                        <span>Oferta</span>
                        <img src="img/glass-1.png" alt="">
                       <h4 class="offerts-price">50.000,00 Pcl</h4>
                    </a>
                    <a href="detalle.html" class="offerts-item">
                        <span>Oferta</span>
                        <img src="img/glass-3.png" alt="">
                        <h4 class="offerts-price">50.000,00 Pcl</h4>
                    </a>
                    <a href="detalle.html" class="offerts-item">
                        <span>Oferta</span>
                        <img src="img/glass-4.png" alt="">
                        <h4 class="offerts-price">50.000,00 Pcl</h4>
                        
                    </a>
                </div>
            </div>
        </div>

        <div class="question">
            <div class="container">
        
                <h3>1. Para que usted utiliza sus vidrios?</h3>
                <div class="question-body">
                    <div class="question-item">
                        <h4>Visión Única</h4>
                        <p>Distancia</p>
                        <span>Incluida</span>
                    </div>
                    <div class="question-item">
                        <h4>Visión Cercana</h4>
                        <p>Lectura</p>
                        <span>Incluida</span>
                    </div>
                    <div class="question-item">
                        <h4>Progresivo</h4>
                        <p>Distancia</p>
                        <span>$ 55</span>
                    </div>
                    <div class="question-item">
                        <h4>Bifocal</h4>
                        <p>Distancia y lectura</p>
                        <span>$ 88</span>
                    </div>
                    <div class="question-item">
                        <h4>Sin Prescripción</h4>
                        <p>Moda</p>
                        <span>Incluida</span>
                    </div>
                </div>
        
            </div>
        </div>

        <div class="prescription">
            <div class="container">
                <h3>2. Ingrese su prescripción</h3>
                <div class="prescription-body">
                    <div class="prescription-tabs">
                        <li class="is-active">LLénalo En línea</li>
                        <li>Cargar o enviar mas tarde</li>
                        <li>Usar mi receta guardada</li>
                    </div>
                    <div class="prescription-content">
                        <div class="row align-items-lg-center mb-4">
                            <div class="col-lg">
                                <div class="prescription-item">
                                    <p class="prescription-label">Derecha <b>(OD)</b></p>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="prescription-item">
                                    <p class="prescription-label mb-3">Esfera (SPH)<i class="fa fa-question-circle-o"></i></p>
                                    <div class="select">
                                        <span class="placeholder">Nada</span>
                                        <ul>
                                            <li data-value="en">Option 1</li>
                                            <li data-value="es">Option 2</li>
                                        </ul>
                                        <input type="hidden" name="changeme"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="prescription-item">
                                    <p class="prescription-label mb-3">Cilindro (CYL)<i class="fa fa-question-circle-o"></i></p>
                                    <div class="select">
                                        <span class="placeholder">Nada</span>
                                        <ul>
                                            <li data-value="en">Option 1</li>
                                            <li data-value="es">Option 2</li>
                                        </ul>
                                        <input type="hidden" name="changeme"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="prescription-item">
                                    <p class="prescription-label mb-3">Eje (AXI)<i class="fa fa-question-circle-o"></i></p>
                                    <div class="select">
                                        <span class="placeholder">Nada</span>
                                        <ul>
                                            <li data-value="en">Option 1</li>
                                            <li data-value="es">Option 2</li>
                                        </ul>
                                        <input type="hidden" name="changeme"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="prescription-item">
                                    <p class="prescription-label mb-3">Anadir<i class="fa fa-question-circle-o"></i></p>
                                    <div class="select">
                                        <span class="placeholder">Nada</span>
                                        <ul>
                                            <li data-value="en">Option 1</li>
                                            <li data-value="es">Option 2</li>
                                        </ul>
                                        <input type="hidden" name="changeme"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-lg-center mb-4">
                            <div class="col-lg">
                                <div class="prescription-item">
                                    <p class="prescription-label">Izquierda <b>(OS)</b></p>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="prescription-item">
                                    <div class="select">
                                        <span class="placeholder">Nada</span>
                                        <ul>
                                            <li data-value="en">Option 1</li>
                                            <li data-value="es">Option 2</li>
                                        </ul>
                                        <input type="hidden" name="changeme"/>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-lg">
                                <div class="prescription-item">
                                    <div class="select">
                                        <span class="placeholder">Nada</span>
                                        <ul>
                                            <li data-value="en">Option 1</li>
                                            <li data-value="es">Option 2</li>
                                        </ul>
                                        <input type="hidden" name="changeme"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="prescription-item">
                                    <div class="select">
                                        <span class="placeholder">Nada</span>
                                        <ul>
                                            <li data-value="en">Option 1</li>
                                            <li data-value="es">Option 2</li>
                                        </ul>
                                        <input type="hidden" name="changeme"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="prescription-item">
                                    <div class="select">
                                        <span class="placeholder">Nada</span>
                                        <ul>
                                            <li data-value="en">Option 1</li>
                                            <li data-value="es">Option 2</li>
                                        </ul>
                                        <input type="hidden" name="changeme"/>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="hr"></div>
                        
                        <div class="row align-items-lg-center mb-4">
                            <div class="col-lg-2">
                                <div class="prescription-item">
                                    <p class="prescription-label">PD<i class="fa fa-question-circle-o"></i></p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="prescription-item">
                                    <div class="select">
                                        <span class="placeholder">Nada</span>
                                        <ul>
                                            <li data-value="en">Option 1</li>
                                            <li data-value="es">Option 2</li>
                                        </ul>
                                        <input type="hidden" name="changeme"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="prescription-item flex">
                                    <input type="checkbox" name="" class=" mr-2">
                                    <p class="prescription-label">Tengo 2 números para mi PD</p>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row align-items-lg-center">
                            <div class="col-lg-2">
                                <div class="prescription-item">
                                    <p class="prescription-label">Cerca PD<i class="fa fa-question-circle-o"></i></p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="prescription-item">
                                    <div class="select">
                                        <span class="placeholder">Nada</span>
                                        <ul>
                                            <li data-value="en">Option 1</li>
                                            <li data-value="es">Option 2</li>
                                        </ul>
                                        <input type="hidden" name="changeme"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <p>2019 Opti Austral, Salud Visual, Ópticas en Santiago y Quilpué Sitio Web diseñado y desarrollado por SHAADES DIGITAL SERVICE</p>
                </div>
            </div>
        </div>
    </footer>
 <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/slick.js"></script>
    <script>
        $(document).ready(function(){
            $('.offerts-items').slick({
                infinite: true,
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            });
        });
    </script>
    <script src="js/event.js"></script>
    <script src="js/magnifier.js"></script>
    <script>
        $('#lat-img').click(function(){
            $(".glass-zoomBig img").attr('src', "img/glass-thumb2.png");
        });
        $('#front-img').click(function(){
            $(".glass-zoomBig img").attr('src', "img/glass-thumb1.png");
        });
        $('#tras-img').click(function(){
            $(".glass-zoomBig img").attr('src', "img/glass-thumb1.png");
        });
        $('.glass-color-2').click(function(){
            $(".glass-zoomBig img").attr('src', "img/glass-1-alt.png");
        });
        $('.glass-color-1').click(function(){
            $(".glass-zoomBig img").attr('src', "img/glass-1.png");
        });

        var evt = new Event(),
            m = new Magnifier(evt);
        m.attach({
            thumb: '.thumb',
            // large: 'http://upload.wikimedia.org/wikipedia/commons/thumb/9/94/Starry_Night_Over_the_Rhone.jpg/1200px-Starry_Night_Over_the_Rhone.jpg',
            mode: 'inside',
            zoom: 3,
            zoomable: true
        });
    </script>
   

    <!-- jQuery -->
   <script src="js/jquery.bxslider.js"></script>
    <script src="js/jquery.zoom.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/rater.min.js"></script>
    <!-- Scripts -->
    <script src="js/app.js"></script>


  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <!-- <script src="https://www.google-analytics.com/analytics.js" async defer></script> -->

<script type="text/javascript">
    function cambiar(ssrct){
        var ssrc=document.getElementById(ssrct.id); 
        var des=ssrc.getAttribute("src");
        document.getElementById('general').src=des;
        document.getElementById('zoom').src=des;
          }
</script>

</body></html>