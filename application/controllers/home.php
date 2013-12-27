<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	private $sFolder;

	public function index($folder = "love")
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

	public function prepare_pager($urls)
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
	}
}
