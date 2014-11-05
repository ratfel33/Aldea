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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            
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
                        <a href="#"> Acceder <b ></b></a>
                        
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contactanos
                                    </h1>
                
            </div>
        </div>


        <div class="row">
            <div class="col-md-8">

             <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15604.157584882963!2d-85.37391808504505!3d12.109455578104786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sni!4v1414618732195" width="600" height="450" frameborder="0" style="border:0"></iframe>
            </div>
            <div class="col-md-4">
                <h3> Detalles de Contacto</h3>
                <p>
                    Remasa 3 c. oeste, <br>Juigalpa, Chontales  Nicaragua<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: (505) 2512 0000</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">aldeasjuigalpa@aldea-SOS.org</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Lunes - Domingo: 9:00 AM --- 5:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h3>Escribenos</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nombre Completo:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Telefono:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mensaje:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
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

    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
