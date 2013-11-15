<?php

namespace Karis\CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KarisCmsBundle:Default:index.html.twig', array('name' => $name));
    }
}
