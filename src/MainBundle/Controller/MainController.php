<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MainController extends Controller
{
    /**
     * @Route("/",name="home")
     *
     */
    public function indexAction()
    {
        phpinfo();
        die();
        return $this->render('MainBundle:Default:home.html.twig');
    }
}
