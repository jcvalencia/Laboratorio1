<?php defined('BASEPATH') or exit('No se permite acceso directo'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Usuarios</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../../images/icons/login.ico"/>
	<link rel="stylesheet" type="text/css" href="../../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?= FOLDER_PATH . '/main' ?>">HW</a>
	    </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
	        <li><a href="#">Link</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">One more separated link</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				 <ul class="list-group">
				 <li class="list-group-item disabled">Usuarios</li>	
				<?php 
				 if ($status==0) {
					 echo '<table class="table table-striped"><tr><th>Nombre de usuario</th><th>Email</th><th>Nombre</th></tr>';
					for ($i=0; $i < count($result); $i++)  { 
						//echo '<li class="list-group-item">'.$result[$i]['username'] ." - " .$result[$i]['email'] .' </li>';
						echo '<tr><td>'.$result[$i]['username'] ."</td><td>" .$result[$i]['email'] .'</td><td>' . $result[$i]['name'] . '</td></tr>';
					}//for $i
					echo '</table>';
				} else  if ($status==2) {
					$alert="";
					if (is_null($result)) {
						$alert='<div class="alert alert-danger" role="alert">'. 
						'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.
						'<strong>El usuario ya existe, intenta con otro nombre de usuario.</strong></div>';
					} else if($result){
						$alert='<div class="alert alert-success" role="alert">'. 
						'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.
						'<strong>El usuario se registro satisfactoriamente.</strong></div>';
					} else {
						$alert='<div class="alert alert-danger" role="alert">'. 
						'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.
						'<strong>No fue posible registrar al usuario. Por favor contacte al Adminitrador</strong></div>';
					}// result
					echo "$alert";
				} // status
				?>
				</ul>
			</div> <!--cols-->
		</div><!--row-->	
	</div> <!--container-->
	<script src="../../vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../../vendor/bootstrap/js/popper.js"></script>
	<script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>