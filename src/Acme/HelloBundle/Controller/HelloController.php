<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HelloController
 *
 * @author shaduli
 */
namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function indexAction($name) {
        return $this->render('AcmeHelloBundle:Hello:index.html.twig', array('name' => $name));
    }
}

?>
