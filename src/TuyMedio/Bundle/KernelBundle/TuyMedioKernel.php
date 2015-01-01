<?php

namespace TuyMedio\Bundle\KernelBundle;

use Symfony\Component\Config\Loader\LoaderInterface,
    Symfony\Component\HttpKernel\Kernel;

/**
 * Description of TuyMedioKernel
 *
 * @author Ramón Serrano <ramon.calle.88@gmail.com>
 */
class TuyMedioKernel extends Kernel
{
    
    /**
     * Register TuyMedioKernel bundles
     * @return array Bundles
     */
    public function registerBundles()
    {
        $bundles = array(
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new \Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new \Symfony\Bundle\TwigBundle\TwigBundle(),
            new \Symfony\Bundle\MonologBundle\MonologBundle(),
            new \Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new \Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new \Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new \Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new \FOS\UserBundle\FOSUserBundle(),
        );
        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        
    }

}
