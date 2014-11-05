<?php 
  require ('inc/conexion.php');
   $consulta="SELECT * FROM usuarios";
   $resultado=$mysqli->query($consulta); //objeto consulta
 ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Laboratorio de Base de Datos</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">	
  </head>
  <body>

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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Registro <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Niños</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Empleados<b ></b></a>
                                   
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
                       <a href="como ayudar.php">Agenda</a>
                       
                    </li>
                    
                    <li>
                        <a href="user control.php">Control de Usuario</a>
                        
                    </li>
                    <li>
                        <a data-toggle="modal" href="#frmingresar">Registrar</a>
            </div>
        </div>
    </nav>

  <h1>Lista de Usuarios</h1>
  <h3><a data-toggle="modal" href="#frmingresar">Agregar nuevo usuario</a></h3>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
     <?php while ($fila=$resultado->fetch_assoc()){ ?>
      <tr>
        <td><?php echo $fila ['Id']; ?></td>
        <td><?php echo $fila ['user']; ?></td>
        <td><?php echo $fila ['mail']; ?></td>
        <td><a data-toggle="modal" href="#frmmodificar">Modificar</a>|<a href="inc/eliminar.php?id=<?php echo $fila['Id'];?>">Eliminar</a></td>
      </tr>
      <?php } ?>
    </tbody>

  </table>
   
   <div class="modal fade" id="frmingresar">
      <div class="modal-dialog">
        <div   class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Ingresar usuario</h4>
          </div>
         <div  class="jumbotron" >
                    <div class="container">
         <form action="inc/nuevo.php" method="POST" name="nuevousuario">
            
              <label>Nombre de usuario</label>
              <input class="form-control" type="text" name="usuario" placeholder="Escriba su nombre de acceso"/>
                <label>Correo</label>
              <input class="form-control" type="text" name="mail" placeholder="Escriba su correo"/>
            
              <label>Contraseña</label>
              <input  class="form-control" type="password" name="password" placeholder="Escriba su contraseña de acceso"/>
              <button  type="submit" class="btn btn-lg btn-primary">Registrar</button>
          </form>

                    <div class="modal-footer">
            <button id="boton2" type="button"  class="glyphicon glyphicon-ok-circle" data-dismiss="modal"></button>
                </div>
             </div>
             </div>
            </div>
        </div>
        </div>

        <div class="modal fade" id="frmmodificar">
        
      <div class="modal-dialog">
     
        <div   class="modal-content">

          <div class="modal-header">
          
            <h4 class="modal-title">Ingresar usuario</h4>
          </div>
         <div  class="jumbotron" >
                    <div class="container">

         <form action="inc/nuevo.php" method="POST" name="nuevousuario">
                      
              <label>Nombre de usuario</label>
                
              <input   class="form-control" type="text" name="usuario" />
                <label>Correo</label>
              <input class="form-control" type="text" name="mail" placeholder="Escriba su correo"/>
             
              <label>Contraseña</label>
              <input class="form-control" type="password" name="password" placeholder="Escriba su contraseña de acceso"/>
              <button  type="submit" class="btn btn-lg btn-primary">Registrar</button>
              
          </form>
              
                    <div class="modal-footer">
            <button id="boton2" type="button"  class="glyphicon glyphicon-ok-circle" data-dismiss="modal"></button>
                </div>
                

             </div>
                          </div>
             
            </div>
            
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
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script> 	
    
  </body>
</html>