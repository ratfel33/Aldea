<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aldeas SOS</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body background="blue";>

<div  class="modal fade" id="frmingresar">
      <div  class="modal-dialog ">
        <div id="popup" class="modal-content">
          <div class="modal-header">
    
                <div  class="jumbotron caja" id="frmingresar">
                    <div class="container">
         <form action="inc/login.php" method="POST" role="form"> 
            <legend>Acceso Administrador</legend>
              <label>Nombre de usuario</label>
              <input class="form-control" type="text" name="usuario" placeholder="Escriba su nombre de acceso"/>
              <label>Contraseña</label>
              <input class="form-control" type="password" name="password" placeholder="Escriba su contraseña de acceso"/>
              <button type="submit" class="btn btn-lg btn-primary">Ingresar</button>
          </form>
                    <div class="modal-footer">
            <button type="button"  class="glyphicon glyphicon-ok-circle" data-dismiss="modal"></button>
                </div>
             </div>
             </div>
            </div>
        </div>
        </div>
      </div>
    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div id="cambiar" class="container">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigatio</span>
                     </button>
                <a class="navbar-brand" href="index.php">Aldeas SOS</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                 <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Quienes Somos <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="objetivos.php">Objetivos</a>
                            </li>
                            <li class="dropdown">
                                <a href="aldeasNic.php" class="dropdown-toggle" data-toggle="dropdown">Historia<b class="caret"></b></a>
                                    <!--<ul class="dropdown-menu">
                                    <li> <a href="mundo.php">Aldeas SOS en el Mundo</a>
                                    </li>
                                        <li> <a href="aldeasNic.php">Aldeas SOS en Nicaragua</a>
                                    </li>
                                    <li> <a href="biografia.php">Quien Fue Hernan Gmeiner</a>
                                    </li>

                                    </ul>-->
                          </li>
                            
                        </ul>
                    </li>
                         <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Galeria<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="galeria.php">Fotos</a>
                            </li>
                            <li>
                                <a href="#">Videos</a>
                            </li>
                            <li>
                                <a href="#">Planos</a>
                            </li>
                            <li>
                                <a href="#">Recorridos</a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                       <a href="como ayudar.php">Como Ayudar</a>
                       
                    </li>
                    
                    <li>
                        <a href="contactanos.php">Contactanos</a>
                        
                    </li>
                    <li>
                        <a data-toggle="modal" href="#frmingresar">Acceder</a>
            </div>
        </div>
    </nav>
    <header id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill"  > <img class="img-responsive" src="./img/test.jpg"> </div>
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="item">
                <div class="fill" > <img class="img-responsive" src="./img/Halo.jpg"> </div>
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="item">
                <div class="fill" >  <img class="img-responsive" src="./img/creed.jpg"> </div>
                <div class="carousel-caption">
                    
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>


      
    <div class="container">



        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Bienvenido a Aldeas SOS.
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Vision </h4>
                    </div>
                    <div class="panel-body">
                        <p align="justify">Creamos familias para niñas y niños necesitados, los ayudamos a formar su propio futuro y participamos en el desarrollo de sus comunidades.</p>
                        <a href="objetivos.php" class="btn btn-default">ver mas</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="glyphicon glyphicon-ok-circle"></i> Mision </h4>
                    </div>
                    <div class="panel-body">
                        <p>Cada niño y cada niña pertenecen a una familia y crecen con amor.</p>
                        <a href="objetivos.php" class="btn btn-default">ver mas</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="glyphicon glyphicon-screenshot"></i> Objetivos </h4>
                    </div>
                    <div class="panel-body">
                        <p align="left"> 
                    -   Audacia: Actuamos
                    </br>
                    </br>
                    -   Compromiso: Cumplimos nuestras promesas
                    </br>
                    </br>
                    -   Confianza: Creemos en cada persona
                    </br>
                    </br>
                    -   Responsabilidad: Somos socios confiables
                        </p>
                        <a href="objetivos.php" class="btn btn-default"> ver mas </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row"> 
            <div class="col-lg-12">
                <h2 class="page-header">Nuestra Historia</h2>
            </div>
            <div class="col-md-6">
                <ul>
                    <li><a href="mundo.php" >Aldeas SOS en el Mundo</a></li>
                    <li><a href="aldeasNic.php">Aldea SOS en Nicaragua</a></li>
                    <li><a href="biografia.php">Biografía de Hermann Gmeiner</a></li>
             
                </ul>
                <p>-    Audacia: Actuamos
                    -   Compromiso: Cumplimos nuestras promesas
                    -   Confianza: Creemos en cada persona
                    -   Responsabilidad: Somos socios confiables
                .</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="./img/aldea.jpg" alt="">
            </div>
        </div>

        <hr>

        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>  Para mayor informacion acerca de Aldeas SOS y su mision en el mundo puedes visitar la pagina www.Aldeas-SOS.org Visita dando clic aqui => </p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="www.aldeas-sos.org">www.Aldeas-SOS.org</a>
                </div>
            </div>
        </div>


        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p align="center">Copyright &copy; Heyling Moraga, Rafael Fonseca  </br>
                             
                    Unan Farem  Chontales 2014
                    </p>
                </div>
            </div>
        </footer>

    </div>
    <script src="js/jquery-1.11.0.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script>
    $('.carousel').carousel({
        interval: 5000
    })
    </script>

</body>

</html>
