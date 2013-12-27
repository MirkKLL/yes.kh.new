<?php
$url = base_url(); 
?>

<!DOCTYPE html>
<html><head>
<title><?=$title?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content="<?=$description?>" />
<meta name="keywords" content="<?=$keywords?>" />
<meta name="copyright" content="Yevgeniy Sidelnikov" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="<?=$url?>js/kickstart.js"></script>                                  <!-- KICKSTART -->
<link rel="stylesheet" type="text/css" href="<?=$url?>css/kickstart.css" media="all" />                  <!-- KICKSTART -->
<link href="<?=$url?>/img/ico/favicon.ico" rel="shortcut icon" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="<?=$url?>style.css" media="all" />                          <!-- CUSTOM STYLES -->
<style type="text/css">
		#bx-pager .active{
			border-color: black;
			border-width: 3px;
			border-style: solid;
		}

		#bx-pager{
			float: left;
			width: 100%;
		}

		#bx-pager img{
			margin: 5px;
			max-height: 100px;
			max-width: 100px;
		}

		.bx-wrapper img{
			width: auto;
			margin: 0 auto;
		}

		.grid img {
			max-height: 850px;
		}

		/*.bx-viewport {
			max-height: 800px;
		}*/

</style>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-39874009-1', 'yes.kh.ua');
	  ga('send', 'pageview');

	</script>
</head>
<body>

<!-- <div class="col_12" style="position:absolute; text-align:right;">
 Address 
	<address><p>
		photo@yes.kh.ua<i class="icon-envelope-alt icon-2x pull-right" style="margin-top: -7px;"></i> <br /><br />
		+3 8(093) 87 87 172<i class="icon-phone-sign icon-2x pull-right" style="margin-top: -7px;"></i> <br /><br />
		<a href="https://vk.com/mirkill" target="_blank">Vkontakte</a> <img src="<?=$url?>img/ico/vk_50.png" alt="vk" width=30 height=30 style="margin: -7px -7px -3px 5px"> <br /><br />
		<a href="https://twitter.com/mirkill" target="_blank">Twitter</a><i class="icon-twitter-sign icon-2x pull-right" style="margin-top: -7px;"></i> <br /><br />
		<a href="http://www.facebook.com/evgeniy.sidelnikov.1" target="_blank">Facebook</a><i class="icon-facebook-sign icon-2x pull-right" style="margin-top: -7px;"></i> <br /><br />
		<a href="https://plus.google.com/114239259741778424399" target="_blank">Google+</a><i class="icon-google-plus-sign icon-2x pull-right" style="margin-top: -7px;"></i> <br /><br />
		
		</p>
	</address>
</div> -->

<div class="grid">
	
<!-- ===================================== END HEADER ===================================== -->
	 
<div class="col_12">
	<div class="col_12">
		<!-- Menu Horizontal -->
		<ul class="menu">
			<!-- <li class="current"><a href="<?=$url?>"><i class="icon-camera"></i> Home</a></li> -->
			<li <?php if($cur == 'love' || $cur == 'mykhailo_anna' || $cur == 'pavlinenki'){ ?>class="current"<?php } ?>><a href="<?=$url?>home/love"><i class="icon-heart"></i> Love Story</a>
				<ul>
					<li><a href="<?=$url?>home/natriy">Натрий и Дария</a></li>
					<li><a href="<?=$url?>home/pavlinenki">Артем и Мира</a></li>
					<li><a href="<?=$url?>home/mykhailo_anna">Миша и Анна</a></li>
				</ul>
			</li>
			<li <?php if($cur == 'portrets'){ ?>class="current"<?php } ?>><a href="<?=$url?>/home/portrets"><i class="icon-user"></i> Портреты</a></li>			
			<li <?php if($cur == 'reportage'){ ?>class="current"<?php } ?>><a href="<?=$url?>home/reportage"><i class="icon-camera"></i> Репортаж</a></li>			
			<li <?php if($cur == 'contacts'){ ?>class="current"<?php } ?>><a href="<?=$url?>home/contacts"><i class="icon-envelope-alt"></i> Контакты</a></li>			
			<!-- <li <?php if($cur == 'price'){ ?>class="current"<?php } ?>><a href="<?=$url?>home/price"><i class="icon-credit-card"></i> Услуги</a></li> -->
		</ul>
	</div>