<?php

namespace OC\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class GeneralController extends Controller
{
    public function indexAction()
    {


      // Notre liste d'annonce en dur
      $listAdverts = array(
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
        return $this->render('OCCoreBundle:General:Home.html.twig',array(
          'listAdverts' => $listAdverts));
    }

    public function ContactAction(Request $request)
    {
      $session = $request->getSession();

      // Bien sûr, cette méthode devra réellement ajouter l'annonce

      // Mais faisons comme si c'était le cas
      $session->getFlashBag()->add('info', 'Annonce bien enregistrée');

      // Le « flashBag » est ce qui contient les messages flash dans la session
      // Il peut bien sûr contenir plusieurs messages :
      $session->getFlashBag()->add('info', 'Oui oui, elle est bien enregistrée !');

      // Puis on redirige vers la page de visualisation de cette annonce
      return $this->redirectToRoute('oc_homepage' );

    }



}
