<?php
	/**
	 * @file
	 *
	 * Contains \Drupal\drupalform\Form\ExampleForm.
	 **/

	namespace Drupal\drupalform\Form;

	use Drupal\Core\Form\ConfigFormBase;

	use Drupal\Core\Form\FormStateInterface;

	class ExampleForm extends ConfigFormBase {
		/**
		 * {@inheritdoc}
		 */
		protected function getEditableConfigNames(){
			//This function defines the configuration names, which will be editable by the form
			return array('drupalform.company');
		}

		/**
		 * {@inheritdoc}
		 */
		public function getFormId(){
			return 'drupalform_example_form';
		}

		/**
		 * {@inheritdoc}
		 */
		public function buildForm(array $form, FormStateInterface $form_state){

			$form_state->setValidateHandlers(
				array(
					'::validateForm',
				)
			);

			$form['company_name'] = array(
				'#type' => 'textfield',
				'#title' => $this->t('Company name'),
				'#default_value' => $this->config('drupalform.company')->get('name'),
			);

			$form['phone'] = array(
				'#type' => 'tel',
				'#title' => t('Phone'),
			);

			$form['email'] = array(
				'#type' => 'email',
				'#title' => t('Email'),
			);

			$form['integer'] = array(
				'#type' => 'number',
				'#title' => t('My integer'),
				'#step' => 1,
				'#min' => 0,
				'#max' => 100,
			);

			$form['datos'] = array(
				'#type' => 'date',
				'#title' => t('Date'),
				'#date_date_format' => 'Y-m-d',
			);

			$form['website'] = array(
				'#type' => 'url',
				'#title' => t('Website'),
			);

			$form['search'] = array(
				'#type' => 'search',
				'#title' => t('Search'),
				'#autocomplete_route_name' => FALSE,
			);

			$form['range'] = array(
				'#type' => 'range',
				'#title' => t('Range'),
				'#min' => 0,
				'#max' => 100,
				'#step' => 1,
			);

			return parent::buildForm($form, $form_state);
		}

		/**
		 * {@inheritdoc}
		 */
		public function validateForm(array &$form, FormStateInterface $form_state){
			if (!$form_state->isValueEmpty('company_name')){
				//value is set, verify
				if (strlen($form_state->getValue('company_name')) <= 5){
					//validation error
					$form_state->setErrorByName('company_name', t('Company name is less than 5 chars'));
				}
			}
		}

		/**
		 * {@inheritdoc}
		 */
		public function submitForm(array &$form, FormStateInterface $form_state){
			parent::submitForm($form, $form_state);

			$this->config('drupalform.company')->set('name', $form_state->getValue('company_name'));
		}
	}