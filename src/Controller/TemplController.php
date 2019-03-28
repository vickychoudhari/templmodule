<?php
namespace Drupal\templ\Controller;
 
use Drupal\Core\Controller\ControllerBase;
 
class TemplController extends ControllerBase {
  public function page() {
 	 
 	 $events = "My Custom twig events";
        return [
        	'#theme' => 'my_template',
        	'#events' => $events,
        ];
        echo '<pre>';
        print_r($events);
        die();
	}
}