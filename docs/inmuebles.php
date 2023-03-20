<?PHP
include('php/list_opciones.php');
include('php/list_inmuebles.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Grupo DB</title>
    <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/img-logos/Iso-CMYK.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/fontello.css">
    <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icheck.min_all.css">
    <link rel="stylesheet" href="assets/css/price-range.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- Body content -->


    <div class="header-connect">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-8  col-xs-12">
                    <div class="header-half header-call">
                        <p>
                            <span><i class="pe-7s-call"></i> +54 264 570-2451</span>
                            <span><i class="pe-7s-mail"></i> inmobiliaria@grupo-db.com.ar</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                    <div class="header-half header-social">
                        <ul class="list-inline">
                            <li><a href="https://www.facebook.com/grupodb" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/grupodbcorredoresinmobiliarios/?hl=es" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End top header -->

    <nav class="navbar navbar-default ">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="assets/img-logos/Isologo-RGB1.png" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse yamm" id="navigation">

                <ul class="main-nav nav navbar-nav navbar-right">

                    <ul class="main-nav nav navbar-nav navbar-right">

                        <li class="wow fadeInDown" data-wow-delay="0.3s">
                            <a class="" href="index.html">Inicio</a>
                        </li>

                        <li class="wow fadeInDown" data-wow-delay="0.5s">
                            <a class="" href="nosotros.html">Nosotros</a>
                        </li>

                        <li class="wow fadeInDown" data-wow-delay="0.7s">
                            <a class="" href="servicios.html">Servicios</a>
                        </li>

                        <li class="wow fadeInDown" data-wow-delay="0.9s">
                            <a class="active" href="inmuebles.html">Inmuebles</a>
                        </li>

                        <li class="wow fadeInDown" data-wow-delay="1.1s">
                            <a class="" href="preguntas.html">Preguntas</a>
                        </li>

                        <li class="wow fadeInDown" data-wow-delay="1.3s">
                            <a href="contacto.html">Contacto</a>
                        </li>

                    </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- End of nav bar -->

    <div class="page-head">
        <div class="container">
            <div class="row">
                <div class="page-head-content">
                    <h1 class="page-title">Lista de Inmuebles</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End page header -->

    <!-- property area -->
    <div class="properties-area recent-property" style="background-color: #FFF;">
        <div class="container">
            <div class="row">

                <div class="col-md-3 p0 padding-top-40">
                    <div class="blog-asside-right pr0">
                        <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                            <div class="panel-heading">
                                <h3 class="panel-title">Búsqueda inteligente</h3>
                            </div>
                            <div class="panel-body search-widget">
                                <form action="" class=" form-inline">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <!-- <input type="text" class="form-control" placeholder="Palabra clave"> -->
                                                <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Tipo de Inmueble">
                                                    <option value=""><b>&nabla;</b>&nbsp;Todas las propiedades</option>
                                                    <?PHP while ($propiedad = mysqli_fetch_assoc($rtspropiedad)) { ?>
                                                        <option value="<?PHP echo $propiedad['idPropiedad']; ?>"> <?PHP echo $propiedad['nombrePropiedad']; ?></option>
                                                    <?PHP } ?>
                                                </select>

                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="row">
                                            <div class="col-xs-6">

                                                <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Localización">

                                                    <option value=""><b>&nabla;</b>&nbsp;Todas las localidades</option>
                                                    <option value="">Localidad</option>
                                                    <?PHP while ($localidad = mysqli_fetch_assoc($rtslocalidad)) { ?>
                                                        <option value="<?PHP echo $localidad['idLocalidad']; ?>"> <?PHP echo $localidad['nombreLocalidad']; ?></option>
                                                    <?PHP } ?>
                                                </select>

                                            </div>
                                            <div class="col-xs-6">

                                                <select id="basic" class="selectpicker show-tick form-control">
                                                    <option value=""><b>&nabla;</b>&nbsp;Todas las operaciones</option>
                                                    <?PHP while ($operacion = mysqli_fetch_assoc($rtsoperacion)) { ?>
                                                        <option value="<?PHP echo $operacion['idOperacion']; ?>"> <?PHP echo $operacion['nombreOperacion']; ?></option>
                                                    <?PHP } ?>

                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <!-- <fieldset class="padding-5">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label for="price-range">Price range ($):</label>
                                                <input type="text" class="span2" value="" data-slider-min="0" 
                                                       data-slider-max="600" data-slider-step="5" 
                                                       data-slider-value="[0,450]" id="price-range" ><br />
                                                <b class="pull-left color">2000$</b> 
                                                <b class="pull-right color">100000$</b>                                                
                                            </div>
                                            <div class="col-xs-12">
                                                <label for="property-geo">Superficie (m2) :</label>
                                                <input type="text" class="span2" value="" data-slider-min="0" 
                                                       data-slider-max="12000" data-slider-step="10" 
                                                       data-slider-value="[10,2000]" id="property-geo" ><br />
                                                <b class="pull-left color">10m</b> 
                                                <b class="pull-right color">12000m</b>                                                
                                            </div>                                            
                                        </div>
                                    </fieldset>                                 -->

                                    <!-- <fieldset class="padding-5">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label for="price-range">Baños :</label>
                                                <input type="text" class="span2" value="" data-slider-min="0" 
                                                       data-slider-max="5" data-slider-step="1" 
                                                       data-slider-value="[1,5]" id="min-baths" ><br />
                                                <b class="pull-left color">1</b> 
                                                <b class="pull-right color">5</b>                                                
                                            </div>

                                            <div class="col-xs-6">
                                                <label for="property-geo">Habitaciones :</label>
                                                <input type="text" class="span2" value="" data-slider-min="0" 
                                                       data-slider-max="10" data-slider-step="1" 
                                                       data-slider-value="[1,5]" id="min-bed" ><br />
                                                <b class="pull-left color">1</b> 
                                                <b class="pull-right color">10</b>

                                            </div>
                                        </div>
                                    </fieldset> -->

                                    <!-- <fieldset class="padding-5">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="checkbox">
                                                    <label> <input type="checkbox" checked> Cloaca</label>
                                                </div> 
                                            </div>

                                            <div class="col-xs-6">
                                                <div class="checkbox">
                                                    <label> <input type="checkbox"> Gas Natural</label>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </fieldset>

                                    <fieldset class="padding-5">
                                        <div class="row">
                                            <div class="col-xs-6"> 
                                                <div class="checkbox">
                                                    <label> <input type="checkbox" checked> Agua corriente</label>
                                                </div>
                                            </div>  
                                            <div class="col-xs-6"> 
                                                <div class="checkbox">
                                                    <label> <input type="checkbox" checked> Pavimento </label>
                                                </div>
                                            </div>  
                                        </div>
                                    </fieldset>

                                    <fieldset class="padding-5">
                                        <div class="row">
                                            <div class="col-xs-6"> 
                                                <div class="checkbox">
                                                    <label><input type="checkbox"> Mejoras </label>
                                                </div>
                                            </div>  
                                            <div class="col-xs-6"> 
                                                <div class="checkbox">
                                                    <label> <input type="checkbox"> Cochera</label>
                                                </div>
                                            </div>  
                                        </div>
                                    </fieldset> -->

                                    <!-- <fieldset class="padding-5">
                                        <div class="row">
                                            <div class="col-xs-6"> 
                                                <div class="checkbox">
                                                    <label>  <input type="checkbox" checked> Jog Path </label>
                                                </div>
                                            </div>  
                                            <div class="col-xs-6"> 
                                                <div class="checkbox">
                                                    <label>  <input type="checkbox"> 26' Ceilings </label>
                                                </div>
                                            </div>  
                                        </div>
                                    </fieldset>

                                    <fieldset class="padding-5">
                                        <div class="row">
                                            <div class="col-xs-12"> 
                                                <div class="checkbox">
                                                    <label>  <input type="checkbox"> Hurricane Shutters </label>
                                                </div>
                                            </div>  
                                        </div>
                                    </fieldset> -->

                                    <fieldset>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <input class="button btn largesearch-btn" value="Buscar" type="submit">
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>

                        <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                            <div class="panel-heading">
                                <!-- <h3 class="panel-title">Recommended</h3> -->
                            </div>
                            <div class="panel-body recent-property-widget">
                                <!-- <ul>
                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="assets/img/demo/small-property-2.jpg"></a>
                                                <span class="property-seeker">
                                                    <b class="b-1">A</b>
                                                    <b class="b-2">S</b>
                                                </span>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="single.html">Super nice villa </a></h6>
                                                <span class="property-price">3000000$</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-3 col-sm-3  col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="assets/img/demo/small-property-1.jpg"></a>
                                                <span class="property-seeker">
                                                    <b class="b-1">A</b>
                                                    <b class="b-2">S</b>
                                                </span>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="single.html">Super nice villa </a></h6>
                                                <span class="property-price">3000000$</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="assets/img/demo/small-property-3.jpg"></a>
                                                <span class="property-seeker">
                                                    <b class="b-1">A</b>
                                                    <b class="b-2">S</b>
                                                </span>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="single.html">Super nice villa </a></h6>
                                                <span class="property-price">3000000$</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="assets/img/demo/small-property-2.jpg"></a>
                                                <span class="property-seeker">
                                                    <b class="b-1">A</b>
                                                    <b class="b-2">S</b>
                                                </span>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="single.html">Super nice villa </a></h6>
                                                <span class="property-price">3000000$</span>
                                            </div>
                                        </li>

                                    </ul> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-9  pr0 padding-top-40 properties-page">
                    <div class="col-md-12 clear">
                        <div class="col-xs-10 page-subheader sorting pl0">
                            <ul class="sort-by-list">
                                <!-- <li class="active">
                                    <a href="javascript:void(0);" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                        Property Date <i class="fa fa-sort-amount-asc"></i>					
                                    </a>
                                </li>
                                <li class="">
                                    <a href="javascript:void(0);" class="order_by_price" data-orderby="property_price" data-order="DESC">
                                        Property Price <i class="fa fa-sort-numeric-desc"></i>						
                                    </a>
                                </li> -->
                            </ul><!--/ .sort-by-list-->

                            <div class="items-per-page">
                                <!-- <label for="items_per_page"><b>Property per page :</b></label>
                                <div class="sel">
                                    <select id="items_per_page" name="per_page">
                                        <option value="3">3</option>
                                        <option value="6">6</option>
                                        <option value="9">9</option>
                                        <option selected="selected" value="12">12</option>
                                        <option value="15">15</option>
                                        <option value="30">30</option>
                                        <option value="45">45</option>
                                        <option value="60">60</option>
                                    </select>
                                </div>/ .sel -->
                            </div><!--/ .items-per-page-->
                        </div>

                        <div class="col-xs-2 layout-switcher">
                            <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i> </a>
                            <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>
                        </div><!--/ .layout-switcher-->
                    </div>

                    <div class="col-md-12 clear">
                        <div id="list-type" class="proerty-th">
                            <?PHP echo $listado; ?>
                        </div>
                    </div>

                    <!--div class="col-md-12">
                        <div class="pull-right">
                            <div class="pagination">
                                <ul>
                                    <li><a href="#">Ant.</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">Sig.</a></li>
                                </ul>
                            </div>
                        </div>
                    </div -->
                </div>
            </div>
        </div>
    </div>

    <!-- Footer area-->
    <div class="footer-area">

        <div class=" footer">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                        <div class="single-footer">
                            <h4>Acerca de nosotros </h4>
                            <div class="footer-title-line"></div>

                            <img src="assets/img-logos/Isologo-RGB.png" alt="" class="wow pulse" data-wow-delay="1s">
                            <p>Excelencia en negocios inmobiliarios. <br>
                                Nos destacamos por el asesoramiento de calidad para nuestros clientes.</p>
                            <ul class="footer-adress">
                                <li><i class="pe-7s-map-marker strong"> </i> Calle Segundino Navarro 601 (Sur), Capital, San Juan</li>
                                <li><i class="pe-7s-mail strong"> </i> inmobiliaria@grupo-db.com.ar</li>
                                <li><i class="pe-7s-call strong"> </i> +54 264 570-2451</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                        <div class="single-footer">
                            <h4>Navegación </h4>
                            <div class="footer-title-line"></div>
                            <ul class="footer-menu">
                                <li><a href="index.html">Inicio</a> </li>
                                <li><a href="nosotros.html">Acerca de</a></li>
                                <li><a href="servicios.html">Servicios</a> </li>
                                <li><a href="inmuebles.html">Inmuebles</a> </li>
                                <li><a href="contacto.html">Contacto</a></li>
                                <li><a href="preguntas.html">Preguntas Frecuentes</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                        <div class="single-footer">
                            <h4>Últimas entradas</h4>
                            <div class="footer-title-line"></div>
                            <ul class="footer-blog">
                                <li>
                                    <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                                        <a href="detalle-inmueble.html">
                                            <img src="assets/img/casa10.jpeg">
                                        </a>
                                        <span class="blg-date">15/10/2022</span>

                                    </div>
                                    <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                        <h6> <a href="detalle-inmueble.html">Terreno 100 ha </a></h6>
                                        <p style="line-height: 17px; padding: 8px 2px;">Terreno apto para desarrollo inmobiliario</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                                        <a href="#">
                                            <img src="assets/img/casa9.jpeg">
                                        </a>
                                        <span class="blg-date">20/09/2022</span>

                                    </div>
                                    <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                        <h6> <a href="#">Casa en Bº Privado </a></h6>
                                        <p style="line-height: 17px; padding: 8px 2px;">Casa en alquiler de 3 habitaciones</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                                        <a href="#">
                                            <img src="assets/img/casa8.jpeg">
                                        </a>
                                        <span class="blg-date">08/09/2022</span>

                                    </div>
                                    <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                        <h6> <a href="#">Llave de negocio </a></h6>
                                        <p style="line-height: 17px; padding: 8px 2px;">Ferretería completa, listo para trabajar</p>
                                    </div>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                        <div class="single-footer news-letter">
                            <h4>Dejanos tu mail</h4>
                            <div class="footer-title-line"></div>
                            <p>Escribí tu mail en el campo y nos comunicaremos con vos.</p>

                            <form>
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="E-mail ... ">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary subscribe" type="button"><i class="pe-7s-paper-plane pe-2x"></i></button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </form>

                            <div class="social pull-right">
                                <ul>
                                    <li><a class="wow fadeInUp animated" href="https://www.facebook.com/grupodb" target="_blank" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="wow fadeInUp animated" href="https://www.instagram.com/grupodbcorredoresinmobiliarios/?hl=es" target="_blank" data-wow-delay="0.4s"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-copy text-center">
            <div class="container">
                <div class="row">
                    <div class="pull-left">
                        <span> (C) <a href="index.html">Grupo DB - Corredores Inmobiliarios</a> , Todos los derechos reservados 2023 </span>
                    </div>
                    <div class="bottom-menu pull-right">
                        <ul>
                            <li><a class="wow fadeInUp animated" href="index.html" data-wow-delay="0.2s">Inicio</a></li>
                            <li><a class="wow fadeInUp animated" href="inmuebles.html" data-wow-delay="0.3s">Inmuebles</a></li>
                            <li><a class="wow fadeInUp animated" href="preguntas.html" data-wow-delay="0.4s">Preguntas Frecuentes</a></li>
                            <li><a class="wow fadeInUp animated" href="contacto.html" data-wow-delay="0.6s">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="assets/js/modernizr-2.6.2.min.js"></script>
    <script src="assets/js/jquery-1.10.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/bootstrap-hover-dropdown.js"></script>
    <script src="assets/js/easypiechart.min.js"></script>
    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/icheck.min.js"></script>
    <script src="assets/js/price-range.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>