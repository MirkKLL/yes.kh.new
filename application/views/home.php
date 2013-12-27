
	

	
	<div class="col_12">
		

		<script type="text/javascript">			
			$(document).ready(function(){
			  $('.bxslider').bxSlider({
			  	pagerCustom: '#bx-pager',
			  	auto: true,
  				autoControls: true,
  				autoStart: true,
  				autoDelay: 1000, // first slide show
  				pause: 5000, //time for show slide
  				//slideWidth: 300,
  				speed: 2000, // time betwen slide change,
  				preloadImages: 'visible',
  				adaptiveHeight: true,
  				mode: 'fade'
				});
			});
		</script>   

		<ul class="bxslider" style="margin:0; max-height:550px;">
			<?=$slides?>
			
			
		</ul>
	<hr />
		
		
	</div>

	<div class="col_12">
		<div id="bx-pager">
	  		<?=$pager?>

		</div>
	</div>




	