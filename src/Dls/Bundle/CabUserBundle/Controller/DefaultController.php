<?php

namespace Dls\Bundle\CabUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DlsCabUserBundle:Default:index.html.twig');
    }
}
