<?php defined('BASEPATH') or exit('No se permite acceso directo'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Catálogo</title>
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
                <div class="list-group">
                   
                    <?php 
                     if ($status==0) {
                         echo '<a href="#" class="list-group-item active"><strong>Nombre</strong></a>';
                        for ($i=0; $i < count($result); $i++)  { 
                            echo '<a href="' . $result[$i]['id'] . '" class="list-group-item">' . $result[$i]['name'] . '</a>';
                        }//for $i
                     } else if($status==1) {
                        ?>
                        <ul class="list-group">
                            <li class="list-group-item disabled"><strong><?php echo $result[0]['name']; ?></strong></li>
                            <li class="list-group-item"><img class="img-fluid rounded" src="../../images/hw/<?php echo $result[0]['id']; ?>.png" alt="<?php echo $result[0]['name']; ?>" style="width:225px;height:225px;">
                                    <br/><strong>Descripción:</strong><br/>
                                <?php echo $result[0]['description']; ?> <br/>
                                <a href="../../pdf/hw/<?php  echo $result[0]['id']; ?>.pdf" download>PDF</a><br/>
                                <strong>Link de referencia en la página oficial:</strong><br/> 
                                <a href="<?php  echo $result[0]['link']; ?>" target="_blank"><?php  echo $result[0]['link']; ?></a><br/>
                                <strong>Link de documentación en la página oficial:</strong><br/>
                                <a href="<?php echo $result[0]['drivers']; ?>" target="_blank"><?php  echo $result[0]['drivers']; ?></a><br/>
                            </li>
                        </ul>
                        <br/>
                        <?php
                     } // else 
                        
                    ?>
                </div>   
            </div> <!--cols-->
        </div><!--row-->	
	</div> <!--container-->
	<script src="../../vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../../vendor/bootstrap/js/popper.js"></script>
	<script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>