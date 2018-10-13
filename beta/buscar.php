<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  
  <link rel="stylesheet" type="text/css" href="includes/css/sidebarNavigation.css">
  <script src="includes/js/sidebarNavigation.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="includes/css/switchery.css">
 <script src="includes/js/jquery.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="includes/js/switchery.js"></script>
  <link href="includes/css/buscar.css" rel="stylesheet">

</head>
<body>
<nav id="nav" class="navbar navbar-dark bg-primary sidebarNavigation" data-sidebarClass="navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <button type="button" class="navbar-toggle left-navbar-toggle" style="display: none" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <center><a href="index.php"  id="buscar3"><i class="fas fa-arrow-left"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Volver al menu</a></center>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <ul class="nav navbar-nav">
        
        <li><a href="#"><img src="images/jug.png" class="perfil"></a></li>
        <li><a href="#" class="nomb">Juan</a></li>
       
        <li><a href="index.php"><i class="icons iconos fas fa-home"></i></a></li>
        <li><a href="#"><i class="icons3 far fa-image"></i> Herramientas</a></li>
        <li><a href="#"><i class="icons4 iconos fas fa-wrench"></i> Galeria</a></li>
       
      </ul>

      <ul class="navbar-form navbar-left" id="form1" onsubmit="return enviar();" method="POST">
       <div class="form-group">
       
          <input type="text" class="form-control" name="buscar1" id="buscar1" placeholder="Buscar servicios">
        
          <button name="enviando" class="btn btn-primary" id="boton"><i class="icons iconos fas fa-search"></i> Buscar</button>
          
       </div>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href=""><i class="icons5 far fa-star"></i> Mi puntuacion</a></li>
        <li><a href="#"><i class="icons far fa-comments"></i></a></li>
        <li><a href="#"><i class="icons1 far fa-bell"></i></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icons2 far fa-user"></i> Mi perfil<span class="caret"></span></a>
          <img src="images/jug.png" class="perfiles">
          <ul class="dropdown-menu">
            <li><a href="sesion.php">ver perfil</a></li>
            <li><a href="servicios.php">Mis servicios</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Salir</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

 <div class="container1">
              <div class="row">
                          <div class="col-lg-12">
                             <div class="button-group">
                               <center> <button type="button" id="buscar2" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Buscar servicios <span class="caret"></span></button>
                        <ul class="dropdown-menu" style="width: 100%;">
                          <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"  class="js-switch"/>&nbsp;Electrisita</a></li>
                          <li><a href="#" class="small" data-value="option2" tabIndex="-1"><input type="checkbox" class="js-switch"/>&nbsp;GASISITA</a></li>
                          <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input type="checkbox" class="js-switch"/>&nbsp;PLOMERO</a></li>
                          <li><a href="#" class="js-switch" class="small" data-value="option4" tabIndex="-1"><input type="checkbox" class="js-switch"/>&nbsp;ALBAÑIL</a></li>
                          <li><a href="#" class="small" data-value="option5" tabIndex="-1"><input type="checkbox" class="js-switch"/>&nbsp;CERRAJERO</a></li>
                          <li><a href="#" class="small" data-value="option6" tabIndex="-1"><input type="checkbox" class="js-switch"/>&nbsp;CARPINTERO</a></li>
                           <script type="text/javascript">
            
                              var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

                                  elems.forEach(function(html) {
                                    
                                    var switchery = new Switchery (html, {disabled: true ,


                                     color              :  '#3BBD4B',
                                     secondaryColor:'#CBCDCE',
                                     size: 'small'
                                      });
                                       

                                        });
                            </script>
                        </ul></center>
                          </div>
                        </div>
                  </div>
            </div>

      <div class="container-fluid">
    <br>
    <div class="col-md-5">
      <div class="media">
        <div class="media-left">
          <a href="profesionnal.php"><img src="images/juan.jpg" style="width: 90px;height: 90px;"></a>
        </div>
        <div class="media-body">
          <p>juan gonzales</p>
          <p> los lunes nunca viene</p>
        </div>
      </div>
      <div class="media">
        <div class="media-left">
          <a href="profesionnal.php"><img src="images/jose.jpg" style="width: 90px;height: 90px;"></a>
        </div>
        <div class="media-body">
          <p>ramon</p>
          <p>albanil borrachin los viernes nunca viene</p>
        </div>
      </div>
      <div class="media">
        <div class="media-left">
          <a href="profesionnal.php"><img src="images/ramon.jpg" style="width: 90px;height: 90px;"></a>
        </div>
        <div class="media-body">
          <p>jose</p>
          <p> los sabados nunca viene</p>
        </div>
      </div>
      <div class="media">
        <div class="media-left">
          <a href="profesionnal.php"><img src="images/ramon.jpg" style="width: 90px;height: 90px;"></a>
        </div>
        <div class="media-body">
          <p>jose</p>
          <p> los sabados nunca viene</p>
        </div>
      </div>
       <div class="media">
        <div class="media-left">
          <a href="profesionnal.php"><img src="images/jose.jpg" style="width: 90px;height: 90px;"></a>
        </div>
        <div class="media-body">
          <p>ramon</p>
          <p> los viernes nunca viene</p>
        </div>
      </div>
    </div>

    <br>
  
      
    
  </div>
   
</body>
 

<script type="text/javascript">
  var options = [];

$( '.dropdown-menu a' ).on( 'click', function( event ) {

   var $target = $( event.currentTarget ),
       val = $target.attr( 'data-value' ),
       $inp = $target.find( 'input' ),
       idx;

   if ( ( idx = options.indexOf( val ) ) > -1 ) {
      options.splice( idx, 1 );
      setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
   } else {
      options.push( val );
      setTimeout( function() { $inp.prop( 'checked', true ) }, 0);
   }

   $( event.target ).blur();
      
   console.log( options );
   return false;
});
</script>
</html>