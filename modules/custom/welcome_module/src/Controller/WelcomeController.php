<?php

namespace Drupal\welcome_module\Controller;

use Drupal\Core\Controller\ControllerBase;
// use Drupal\Core\Render\Markup;
// use Drupal\Core\Routing\RouteMatchInterface;
// use Drupal\Core\Routing\RouteProviderInterface;

use Drupal\Core\Database\Database;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Fore\FormStateInterface;



class WelcomeController extends ControllerBase
{


                                            
    public function welcome()
        {
            $element =  [
              
                '#type' => 'markup',
                '#title' => 'this is my first custom page',
                '#markup' =>  'welcome to drupal page',
                

            ]; 
            return $element;
            
    }

    public function information(){

        $info = [

            '#title' => 'information page',
            '#theme' => 'information_page',
            '#items' => 'this is an information page',
        ];

    return $info;

    }


    public function form(){

       

    }

}

?>