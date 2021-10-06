<?php 
namespace Drupal\page_controller\Controller;
class ArticleController{
    public function page(){
        $items = array(
                    array('name'=>'Article One'),
                    array('name'=>'Article two'), 
                     array('name'=>'Article three'), 
                      array('name'=>'Article four'),
        );
        return array(
            '#theme'=>'article_list',
            '#items' =>$items,
            '#title' =>'Our article list'
        );
    }
}

?>