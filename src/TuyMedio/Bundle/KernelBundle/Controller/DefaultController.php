<?php

namespace TuyMedio\Bundle\KernelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/{name}")
     * @Template()
     */
    public function indexAction($name = 'Ramon')
    {
        return array('name' => $name);
    }
}
