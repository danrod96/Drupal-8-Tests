<?php
	/**
	 * @file
	 *
	 * Contains \Drupal\mymodule\Controller\MyPageController class
	 */

	namespace Drupal\mymodule\Controller;

	use Drupal\Core\Controller\ControllerBase;

	class MyPageController extends ControllerBase {
		public function customPage(){
			return array(
				'#type' => 'markup',
				'#markup' => $this->t('Wecome to this custom page!'),
			);
		}

		public function cats($name){
			return array(
				'#type' => 'markup',
				'#markup' => $this->t('My Cats Name is @name', array('@name' => $name)),
			);
		}
	}