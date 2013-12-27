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

		/*$this->load->view('home', array('dbg' => $carousel_indicators));
		return;*/
		$header = array(
               'title' => 'Фотограф Евгений Сидельников Главная',
               'description' => "фотограф харьков, свадебный фотограф, лав стори харьков, love story харьков, фотосессия харьков, yevgeniy sidelnikov, портфолио",
               'keywords' => "фотограф, харьков, свадебный, фотосессии, евгений, сидельников, yevgeniy, sidelnikov, портфолио",
               'cur' => $folder,
               'images' => $home_images,
               'indicators' => $carousel_indicators
        );
        $this->sFolder = $folder;
        $this->load->view('header', $header);

        //$aImages = $this->get_shots($folder);
       // $sSlides = $this->prepare_slide($aImages);
       
        //$home = array('slides' => $aImages);
		//$this->load->view('home', $home);

		$this->load->view('footer');
	}
	public function get_home_indicators()
	{	
		$i = 0;
		$sHtml = "";
		foreach ($this->aCategories as $key => $value) {
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

	public function index_old($folder = "love")
	{
		$header = array(
               'title' => 'Фотограф Евгений Сидельников Главная',
               'description' => "фотограф харьков, свадебный фотограф, лав стори харьков, love story харьков, фотосессия харьков, yevgeniy sidelnikov, портфолио",
               'keywords' => "фотограф, харьков, свадебный, фотосессии, евгений, сидельников, yevgeniy, sidelnikov, портфолио",
               'cur' => $folder
        );
        $this->sFolder = $folder;
        $this->load->view('header', $header);

        $aImages = $this->get_shots($folder);
        $sSlides = $this->prepare_slide($aImages);
        $sPager = $this->prepare_pager($aImages);
        $home = array('slides' => $sSlides, 
        				'pager' => $sPager);
		$this->load->view('home', $home);

		$this->load->view('footer');
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

	public function get_shots($folder)
	{
		$dir    = "./img/portfolio/$folder/";
		$files1 = scandir($dir);
		unset($files1[0]);
		unset($files1[1]);
		foreach ($files1 as $k => $name) {
			if ($name == "Thumbs.db") {
				unset($files1[$k]);
			}
		}
		return $files1;
	}

	public function prepare_slide($urls)
	{
		$url = base_url();
		$folder = $this->sFolder;
		$sResults = "";
		foreach ($urls as $key => $value) {
			$sResults .= "<li><img src=\"$url/img/portfolio/$folder/$value\"  /></li>";
		}
		return $sResults;
	}

/*	public function prepare_pager($urls)
	{
		$url = base_url();
		$folder = $this->sFolder;
		$sResults = "";
		$i = 0;
		foreach ($urls as $key => $value) {
			$sResults .= "<a data-slide-index=\"$i\" href=\"\"><img src=\"$url/img/portfolio/$folder/$value\" /></a>";
			$i++;
		}
		return $sResults;
	}*/


}
