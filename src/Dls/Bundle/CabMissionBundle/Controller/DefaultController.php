<?php

namespace Dls\Bundle\CabMissionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DlsCabMissionBundle:Default:index.html.twig');
    }
}
