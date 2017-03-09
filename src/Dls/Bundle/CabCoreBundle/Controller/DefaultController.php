<?php

namespace Dls\Bundle\CabCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DlsCabCoreBundle:Default:index.html.twig');
    }
}
