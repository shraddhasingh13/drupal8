<?php 
namespace Drupal\page_controller\Controller
class SimpleController{
    public function content(){
        retrun array(
            '#markup'=>'<p>Output from my simple controller.</p>'
        )
    }
}
?>