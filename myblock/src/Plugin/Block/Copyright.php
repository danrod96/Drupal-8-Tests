<?php
	/**
	 * @file
	 * Contains \Drupal\mymodule\Plugin\Block\Copyright.
	 */

	namespace Drupal\myblock\Plugin\Block;

	use Drupal\Core\Block\BlockBase;

	/**
	 * Provides a 'Copyright' Block.
	 *
	 * @Block(
	 *   id = "copyright_block",
	 *   admin_label = @Translation("Copyright Block"),
	 *   category = @Translation("Custom"),
	 * )
	 */
	class Copyright extends BlockBase {
		/**
		 * {@inheritdoc}
		 */
		public function defaultConfiguration(){
			//returns array of settings and default values
			return array(
				'company_name' => '',
			);
		}

		/**
		 * {@inheritdoc}
		 */
		public function blockForm($form, \Drupal\Core\Form\FormStateInterface $form_state){
			//override BlockBase for returning a settings form
			$form['company_name'] = array(
				'#type' => 'textfield',
				'#title' => t('Company name'),
				'#default_value' => $this->configuration['company_name'],
			);

			return $form;
		}

		/**
		 * {@inheritdoc}
		 */
		public function blockSubmit($form, \Drupal\Core\Form\FormStateInterface $form_state){
			$this->configuration['company_name'] = $form_state->getValue('company_name');
		}

		/**
		 * {@inheritdoc}
		 */
		 public function build(){
		 	$date = new \Datetime();

		 	return array(
		 		'#markup' => t('Copyright @year &copy; @company', array('@year' => $date->format('Y'), '@company' => $this->configuration['company_name'])),	
		 	);
		 }
	}