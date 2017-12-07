<?php
	/**
	 * @file
	 *
	 * Contains \Drupal\checkperms\Controller\MyPermController class
	 */

	namespace Drupal\checkperms\Controller;

	use Drupal\Core\Controller\ControllerBase;

	class MyPermController extends ControllerBase {
		public function customPermPage(){
			$user = \Drupal::currentUser();

			dpm($user);
			
			return array(
				'#type' => 'markup',
				'#markup' => $this->t('Wecome to this custom page with perms'),
			);
		}
	}