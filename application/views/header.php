<?php
$url = base_url(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<meta name="description" content="<?=$description?>" />
	<meta name="keywords" content="<?=$keywords?>" />
	<meta name="copyright" content="Yevgeniy Sidelnikov" />
	<title><?=$title?></title>

	<link href="<?=$url?>/img/ico/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<!-- Included Bootstrap CSS Files -->
	<link rel="stylesheet" href="<?=$url?>css/bootstrap.min.css" />
	
	<!-- Just include this Css file -->	
	<link rel="stylesheet" href="<?=$url?>css/jquery.carousel.fullscreen.css" />

	<!-- gallery css -->	
	<link rel="stylesheet" href="<?=$url?>css/blueimp-gallery.min.css">
	<link rel="stylesheet" href="<?=$url?>css/bootstrap-image-gallery.min.css">
	
	<!-- My custom css -->	
	<link rel="stylesheet" href="<?=$url?>css/my.css" />

</head>
<body>

	<div class="navbar-wrapper">
      <div class="container" style="width: 700px;">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?=$url?>">Yevgeniy Sidelnikov</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="<?php echo $cur=='home'? 'active' : ''; ?>" ><a href="<?=$url?>">Главная</a></li>
                <li class="<?php echo $cur=='portrets'? 'active' : ''; ?>"><a href="<?=$url?>home/gallery/portrets">Портреты</a></li>
                <li class="dropdown <?php echo $cur=='love' || $cur=='natriy' || $cur=='pavlinenki' || $cur=='mykhailo_anna' ? 'active' : ''; ?>">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Love Story <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?=$url?>home/gallery/love">Общее</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Пары</li>
                    <li><a href="<?=$url?>home/gallery/natriy">Натрий</a></li>
                    <li><a href="<?=$url?>home/gallery/pavlinenki">Артем и Мира</a></li>
                    <li><a href="<?=$url?>home/gallery/mykhailo_anna">Миша и Анна</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle <?php echo $cur=='wed'? 'active' : ''; ?>" data-toggle="dropdown">Свадьбы <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?=$url?>home/reportage">Reportage</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
                <li class="<?php echo $cur=='contacts'? 'active' : ''; ?>"><a href="<?=$url?>home/contacts">Info</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>



<!-- This is a typical Twitter Bootstrap Carousel -->
	<!-- Carousel -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<?=$indicators?>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<?=$images?>
		</div>

		<!-- Controls -->
		<?=$controls?>
	</div>



    <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
	<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
	    <!-- The container for the modal slides -->
	    <div class="slides"></div>
	    <!-- Controls for the borderless lightbox -->
	    <h3 class="title"></h3>
	    <a class="prev">‹</a>
	    <a class="next">›</a>
	    <a class="close">×</a>
	    <a class="play-pause"></a>
	    <ol class="indicator"></ol>
	    <!-- The modal dialog, which will be used to wrap the lightbox content -->
	    <div class="modal fade">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <button type="button" class="close" aria-hidden="true">&times;</button>
	                    <h4 class="modal-title"></h4>
	                </div>
	                <div class="modal-body next"></div>
	                <div class="modal-footer">
	                    <button type="button" class="btn btn-default pull-left prev">
	                        <i class="glyphicon glyphicon-chevron-left"></i>
	                        Previous
	                    </button>
	                    <button type="button" class="btn btn-primary next">
	                        Next
	                        <i class="glyphicon glyphicon-chevron-right"></i>
	                    </button>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
