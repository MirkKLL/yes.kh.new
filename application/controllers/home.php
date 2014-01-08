<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	private $sFolder;
	private $aCategories = array(
		'love' => array(
			'title' => 'Лав',
			'description' => 'Эта офигенная история была снята',
			'main_image' => '01.jpg',
			),
		'reportage' => array(
			'title' => 'Репортаж',
			'description' => 'пофоткаю и репортажик',
			'main_image' => '01.jpg',
			),
		'portrets' => array(
			'title' => 'Портреты',
			'description' => 'Лица людей',
			'main_image' => '01.jpg',
			),
		'natriy' => array(
			'title' => 'Натрий',
			'description' => 'Спасибо Гусеву за это',
			'main_image' => '01.jpg',
			)
		 );

	public function index($folder = "love")
	{
		$home_images = $this->build_home_carousel();
		$carousel_indicators = $this->get_home_indicators();
		$controls = $this->get_gallery_controls();

		/*$this->load->view('home', array('dbg' => $carousel_indicators));
		return;*/
		$header = array(
               'title' => 'Фотограф Евгений Сидельников Главная',
               'description' => "фотограф харьков, свадебный фотограф, лав стори харьков, love story харьков, фотосессия харьков, yevgeniy sidelnikov, портфолио",
               'keywords' => "фотограф, харьков, свадебный, фотосессии, евгений, сидельников, yevgeniy, sidelnikov, портфолио",
               'cur' => $folder,
               'images' => $home_images,
               'indicators' => $carousel_indicators,
               'controls' => $controls
        );
        $this->sFolder = $folder;
        $this->load->view('header', $header);
		$this->load->view('footer');
	}

	public function gallery($page='love')
	{

		$images = $this->build_carousel($page);
		//$carousel_indicators = $this->get_indicators();
		$carousel_indicators = "";

		/*$this->load->view('home', array('dbg' => $images));
		return;*/
		$header = array(
               'title' => 'Фотограф Евгений Сидельников',
               'description' => "фотограф харьков, свадебный фотограф, лав стори харьков, love story харьков, фотосессия харьков, yevgeniy sidelnikov, портфолио",
               'keywords' => "фотограф, харьков, свадебный, фотосессии, евгений, сидельников, yevgeniy, sidelnikov, портфолио",
               'cur' => $page,
               'images' => $images,
               'indicators' => $carousel_indicators,
               'controls' => ''
        );
        
        $this->load->view('header', $header);
        $params['album'] = $this->prepare_gallery($page);
        $this->load->view('gallery', $params);
		$this->load->view('footer');
	}

	public function prepare_gallery($page)
	{
		$aShots = $this->get_shots($page);
		$sTitle = $this->aCategories[$page]['title'];
		$sHtml = '<div id="links" class="links_gallery">';
		foreach ($aShots as $key => $url) {
			$sHtml .= "<a href='$url' title='$sTitle' data-gallery>
							<img src='$url' alt='$sTitle' class='img-rounded'></a>";

		}
		$sHtml .= '</div>';

		return $sHtml;
	}

	public function get_home_indicators()
	{	
		$i = 0;
		$sHtml = "";
		foreach ($this->aCategories as $key) {
			$active = $i == 0 ? 'class="active"' : '';
			$sHtml .= '<li data-target="#carousel-example-generic" data-slide-to="'.$i.'"'.$active.'></li>';
			$i++;
		}
		return $sHtml;
	}

	public function prepare_home_images()
	{
		$url = base_url();
		$aImages = array();
		foreach ($this->aCategories as $category => $info) {
			$img = $info['main_image'];
			$aImages[$category]['url'] = $url."img/portfolio/$category/$img";  
			$aImages[$category]['title'] = $info['title'];
			$aImages[$category]['description'] = $info['description'];
		}
		return $aImages;
	}

	public function build_carousel($page)
	{
		$images = $this->get_shots($page);
		
		$i = 0;
		$sHtml = "";
		foreach ($images as $id => $url) {
			$sHtml .= '<div class="item'; 
			if ($i == 0) {
				$sHtml .= " active";
			}
			$sHtml .= '">
				<img src="';
			$sHtml .= $url;	
			$sHtml .= '" alt="Yevgeniy Sidelnikov portfolio" />';
			$sHtml .=	'</div>';


			$i++;
		}
		return $sHtml;
	}

	public function build_home_carousel()
	{
		$home_images = $this->prepare_home_images();
		$i = 0;
		$sHtml = "";
		foreach ($home_images as $category => $data) {
			$sHtml .= '<div class="item'; 
			if ($i == 0) {
				$sHtml .= " active";
			}
			$sHtml .= '">
				<img src="';
			$sHtml .= $data['url'];	
			$sHtml .= '" alt="'.$data['title'].'" />';
			$sHtml .=	'<div class="container">
					<div class="carousel-caption">
						<h1>'.$data['title'].'</h1>
						<p class="lead">'.$data['description'].'</p>
					</div>
				</div>
			</div>';


			$i++;
		}
		return $sHtml;
	}


	public function portrets()
	{
		$this->index("portrets");
	}

	public function reportage()
	{
		$this->index("reportage");
	}

	public function love()
	{
		$this->index("love");
	}

	public function mykhailo_anna()
	{
		$this->index("mykhailo_anna");
	}

	public function pavlinenki()
	{
		$this->index("pavlinenki");
	}

	public function natriy()
	{
		$this->index("natriy");
	}

	public function price()
	{
		$header = array(
               'title' => 'Фотограф Евгений Сидельников Услуги',
               'description' => "фотосъемка харьков, фотограф харьков, свадебный фотограф, лав стори харьков, love story харьков, фотосессия харьков, yevgeniy sidelnikov",
               'keywords' => "услуги, цены, фотограф, харьков, свадебный, фотосессии, евгений, сидельников, yevgeniy, sidelnikov",
               'cur' => 'price'
        );
        $this->load->view('header', $header);

		$this->load->view('price');

		$this->load->view('footer');
	}

	public function contacts()
	{
		$header = array(
               'title' => 'Фотограф Евгений Сидельников Контакты',
               'description' => "контактная информация, телефон, почта, фотосъемка харьков, фотограф харьков, свадебный фотограф, лав стори харьков, love story харьков, фотосессия харьков, yevgeniy sidelnikov",
               'keywords' => "контакты, телефон, email, e-mail, фотограф, харьков, свадебный, фотосессии, евгений, сидельников, yevgeniy, sidelnikov",
               'cur' => 'price',
               'url' => base_url()
        );
        $this->load->view('header', $header);

		$this->load->view('contacts');

		$this->load->view('footer');
	}

	/**
	*Get all shots from folder
	*/
	public function get_shots($folder)
	{
		$url = base_url();
		$dir    = "./img/portfolio/$folder/";
		$files1 = scandir($dir);
		unset($files1[0]);
		unset($files1[1]);
		$files = array();
		foreach ($files1 as $k => $name) {
			if ($name == "Thumbs.db") {
				unset($files1[$k]);
				continue;
			}
			$files[] = $url."img/portfolio/$folder/$name";
		}
		return $files;
	}

	/*
	*Get left and right button for courusel on main page
	*/
	public function get_gallery_controls()
	{
		return '<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>';
	}


}
