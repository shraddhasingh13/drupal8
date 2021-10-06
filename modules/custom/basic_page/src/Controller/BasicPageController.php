<?php
    namespace Drupal\basic_page\Controller;
    use Drupal\Core\Controller\ControllerBase;
    
    class BasicPageController extends ControllerBase{
        public function basicPage(){
            return [
                    '#title' => 'Basic Page Information',
                    '#markup'=> '<h2>This is our basic page.</h2>'
                ];
        }
        public function information(){
            $data = array(
                        'names' => 'SSD',
                        'email' => 'ssd@gmail.com'
            );
            return [
                    '#title' => 'Information Page',
                    '#theme' => 'information_page',
                    '#items'=> $data

            ];
        }
    }
?>