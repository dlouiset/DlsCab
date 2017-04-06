<?php
# @Author: David LOUISET <dlouiset>
# @Date:   2017-03-25T11:05:28+01:00
# @Last modified by:   dlouiset
# @Last modified time: 2017-04-05T18:32:52+02:00




namespace Dls\Bundle\CabMissionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class AffairController extends Controller
{
  public function indexAction($page)
  {
    // On ne sait pas combien de pages il y a
    // Mais on sait qu'une page doit être supérieure ou égale à 1
    if ($page < 1) {
      // On déclenche une exception NotFoundHttpException, cela va afficher
      // une page d'erreur 404 (qu'on pourra personnaliser plus tard d'ailleurs)
      throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
    }

    // Ici, on récupérera la liste des affaires, puis on la passera au template

    // Notre liste d'affaire en dur
    $listAffairs = array(
          array(
            'title'   => 'Recherche développpeur Symfony',
            'id'      => 1,
            'author'  => 'Alexandre',
            'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
            'date'    => new \Datetime()),
          array(
            'title'   => 'Mission de webmaster',
            'id'      => 2,
            'author'  => 'Hugo',
            'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
            'date'    => new \Datetime()),
          array(
            'title'   => 'Offre de stage webdesigner',
            'id'      => 3,
            'author'  => 'Mathieu',
            'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
            'date'    => new \Datetime())
    );

    // Mais pour l'instant, on ne fait qu'appeler le template
    return $this->render('DlsCabMissionBundle:Affair:index.html.twig', array(
      'listAffairs' => $listAffairs
  ));
  }

  public function viewAction($id)
  {
    // Ici, on récupérera l'affaire correspondante à l'id $id

    // Notre affaire en dur
    $affair = array(
          'title'   => 'Recherche développpeur Symfony2',
          'id'      => $id,
          'author'  => 'Alexandre',
          'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
          'date'    => new \Datetime()
        );

    return $this->render('DlsCabMissionBundle:Affair:view.html.twig', array(
      'affair' => $affair
    ));
  }

  public function addAction(Request $request)
  {
    // La gestion d'un formulaire est particulière, mais l'idée est la suivante :

    // Si la requête est en POST, c'est que le visiteur a soumis le formulaire
    if ($request->isMethod('POST')) {
      // Ici, on s'occupera de la création et de la gestion du formulaire

      $request->getSession()->getFlashBag()->add('notice', 'Affaire bien enregistrée.');

      // Puis on redirige vers la page de visualisation de cette affaire
      return $this->redirectToRoute('dls_cab_mission_view', array('id' => 5));
    }

    // Si on n'est pas en POST, alors on affiche le formulaire
    return $this->render('DlsCabMissionBundle:Affair:new.html.twig');
  }

  public function editAction($id, Request $request)
  {
    // Ici, on récupérera l'affaire correspondante à $id

    // Même mécanisme que pour l'ajout
    if ($request->isMethod('POST')) {
      $request->getSession()->getFlashBag()->add('notice', 'Affaire bien modifiée.');

      return $this->redirectToRoute('dls_cab_mission_view', array('id' => 5));
    }

    // Notre affaire en dur
    $affair = array(
         'title'   => 'Recherche développpeur Symfony',
         'id'      => $id,
         'author'  => 'Alexandre',
         'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
         'date'    => new \Datetime()
       );

    return $this->render('DlsCabMissionBundle:Affair:edit.html.twig', array(
      'affair' => $affair
    ));
  }

  public function deleteAction($id)
  {
    // Ici, on récupérera l'affaire correspondant à $id

    // Ici, on gérera la suppression de l'affaire en question

    return $this->render('DlsCabMissionBundle:Affair:delete.html.twig');
  }

  public function menuAction($limit)
  {
    // On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !
    $listAffairs = array(
      array('id' => 2, 'title' => 'Recherche développeur Symfony'),
      array('id' => 5, 'title' => 'Mission de webmaster'),
      array('id' => 9, 'title' => 'Offre de stage webdesigner')
    );

    return $this->render('DlsCabMissionBundle:Affair:menu.html.twig', array(
      // Tout l'intérêt est ici : le contrôleur passe les variables nécessaires au template !
      'listAffairs' => $listAffairs
    ));
  }
}
