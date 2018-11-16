<?php

namespace OC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GeneralController extends Controller
{
    public function indexAction()
    {
        return $this->render('OCCoreBundle:Index:Layout.html.twig');
    }
}
