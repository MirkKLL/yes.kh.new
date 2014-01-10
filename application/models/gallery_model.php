<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery_model extends CI_Model {

	public function get_category_data($category = 'all')
	{
		$aResult = array();
		$query = $this->db->query('SELECT folder, title, description, main_image FROM categories
			WHERE main_page>0
			');
		foreach ($query->result() as $row) {
			$aResult[$row->folder] = array('title' => $row->title,
												'description' => $row->description,
												'main_image' => $row->main_image );
		}
		return $aResult;
		return array(
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
	}
}