<?php 
    namespace Drupal\employee\Form;
    use Drupal\Core\Form\FormBase;
    use Drupal\Core\Form\FormStateInterface;

    class EmployeeForm extends FormBase{
        /**
         * {@inheritdoc}
         */
        public function getFormId(){
            return 'create_employee';
        }
        /**
         * {@inheritdoc}
         */
        public function buildForm(array $form, FormStateInterface $form_state){
            $genderOptions = array(
                    '0'=>'Select Gender',
                    'Male'=>'Male',
                    'Female'=>'Female',
                    'Other' =>'Other'
            );
            $form['name'] = array(
                                '#type' => 'textfield',
                                '#title' => t('Name'),
                                '#default_value'=>''
            );
            $form['phone_number'] = [
                '#type' => 'tel',
                '#title' => $this->t('Your phone number'),
              ];
            $form['gender'] = array(
                '#type' => 'select',
                '#title' => 'Gender',
                '#options'=>$genderOptions
            );
            $form['about_employee'] = array(
                '#type' => 'textarea',
                '#title' => 'About Employee',
                '#default_value'=>''
            );
            $form['save'] = array(
                    '#type' => 'submit',
                    '#value' => 'Save Employee',
                    '#button_type' =>'primary'
            );
            return $form;
        }
        /** // $this->messenger()->addStatus($this->t('Your phone number is @number', ['@number' => $form_state->getValue('phone_number')]));
            
         * {@inheritdoc}
         */
        public function submitForm(array &$form, FormStateInterface $form_state){
            $postData = $form_state->getValue();
           echo "<pre>";
            print_r($postData);
            echo "<pre>";
            exit;
        }
    }