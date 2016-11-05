<!DOCTYPE html>
<html lang="en">
<head>Resultados de busqueda</title>
<meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/search-form.css">
<link rel="stylesheet" href="fonts/font-awesome.css">
<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="search/search.js"></script>
<script src="js/jquery.mobilemenu.js"></script> 
<script src="js/jquery.ui.totop.js"></script>
<script src="js/jquery.equalheights.js"></script> 

<!--[if (gt IE 9)|!(IE)]><!-->
<script src="js/wow/wow.js"></script>
<script src="js/wow/device.min.js"></script>
<script>
    $(document).ready(function () {       
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }   
    });
</script>
<!--<![endif]-->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
      <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
        <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
      </map>
  </div>
  <![endif]-->
</head>
<body>
<header class="indent clearfix">
    <div class="follow-box">
        <div class="container"> 
            <h1 class="navbar-brand navbar-brand_"><a href="index.html"><img src="img/logo_smaller.png" alt="logo"></a></h1>
            <ul class="address_icon">
                <li><span class="fa fa-map-marker"></span>- </li>
                <li><span class="fa fa-envelope"></span><a href="#">info@pcs.com.do</a></li>
                <li><span class="fa fa-phone"></span>+1(809) 000 0000</li>
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
        <div class="container">
            <ul class="nav sf-menu clearfix">
                <li><a href="index.html">Home</a></li>
                <li class="sub-menu"><a href="nosotros.html">Nosotros</a><span></span>
                <!--<ul class="submenu">
        				<li><a href="#">history</a></li>
        				<li><a href="#">news</a><span class="fa fa-angle-right"></span>
                            <ul class="submenu">
                                <li><a href="#">latest</a></li>
                                <li><a href="#">archive</a></li>
                              </ul> 
                        </li>
        				<li><a href="#">testimonials</a></li>
                    </ul>-->
                </li>
                <li><a href="servicios.html">Servicios</a></li>
                <li><a href="precios.html">Precios</a></li>
                <li><a href="contacto.html">Contactos</a></li>
            </ul>
            <div class="js-search flt__l flt__n-xl">
            	<div class="toggle"></div>
            	<form id="search" class="search-form" action="search.php" method="GET" accept-charset="utf-8">
            		<label class="input" for="in">
            			<input id="in" type="text" name="s" value="Search" onblur="if(this.value == '') { this.value='Search'}" onfocus="if (this.value == 'Search') {this.value=''}">
                        <a href="#" onClick="document.getElementById('search').submit()" class="js-find"></a>
            		</label>
            	</form>
            </div>
        </div>
    </nav>
</header>
<div class="content indent">
    <!--content-->
    <div class="container">
        <h2>Resultado de busqueda:</h2>
        <div id="search-results"></div>
    </div>
</div>
<!--footer-->
<footer>
    <div class="tools-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="maxheight3">
                        <p class="title">copyright</p>
                        <p class="priv">&copy; <em id="copyright-year"></em> <a href="privacy.html">Privacy Policy</a></p>
                        <strong>Pcs.com.do</strong>
                        <ul class="follow-list">
                            <li><a href="http://www.twitter.com/pcs_rd">twitter</a></li>
                            <li><a href="http://www.facebook.com/pcsrd">facebook</a></li>
                            <li><a href="#">youtube</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="maxheight3">
                        <p class="title">Dirección</p>
                        <p>- <br>-  <br>Telefono:  +1(809) 000 0000<br><a href="#">info@pcs.com.do</a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="maxheight3">
                        <p class="title">Menu de Soporte</p>
                        <ul class="list1-1">
                            <li><a href="#">Perdio su Contraseña?</a></li>
                            <li><a href="#">Olvido su Usuario?</a></li>
                            <li><a href="#">Su Membresia</a></li>
                            <li><a href="#">Su Cuenta</a></li>
                            <li><a href="#">Foro de Soporte</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="indent maxheight3">
                        <p class="title">Sobre Nosotros</p>
                        <ul class="list1-1">
                            <li><a href="#">Enfoque en el cliente</a></li>
                            <li><a href="#">Desempeño</a></li>
                            <li><a href="#">Afiliados</a></li>
                            <li><a href="#">Revision de CV</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
</body>
</html>