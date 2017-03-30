<?php
# @Author: David LOUISET <dlouiset>
# @Date:   2017-03-30T13:53:14+02:00
# @Last modified by:   dlouiset
# @Last modified time: 2017-03-30T14:14:39+02:00



namespace Dls\Bundle\CabCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class CoreController extends Controller
{
  // La page d'accueil - tableau de bord
  public function indexAction()
  {

    return $this->render('DlsCabCoreBundle:Core:index.html.twig');

  }

  // La page de contact
  public function contactAction(Request $request)
  {
    // On récupère la session depuis la requête, en argument du contrôleur
    $session = $request->getSession();
    // Et on définit notre message
    $session->getFlashBag()->add('info', 'La page de contact n’est pas encore disponible.');

    // Redirection vers la page d'accueil
    return $this->redirectToRoute('dls_cab_core_home');

  }
}
