<?php 

use Phalcon\Mvc\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
       $name = $this->request->get('fname');
        //echo "-$name-"; exit;
        $this->view->name = empty($name) ? "Toni Lee" : $name;
        $this->view->random = rand(1,1000);
    }
  
}