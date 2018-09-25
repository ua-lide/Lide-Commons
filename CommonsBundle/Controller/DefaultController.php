<?php

namespace Lide\CommonsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LideCommonsBundle:Default:index.html.twig');
    }
}
