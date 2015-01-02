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
            new \Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new \FOS\UserBundle\FOSUserBundle(),
            new \Sonata\CoreBundle\SonataCoreBundle(),
            new \Sonata\AdminBundle\SonataAdminBundle(),
            new \Sonata\BlockBundle\SonataBlockBundle(),
            new \Sonata\jQueryBundle\SonatajQueryBundle(),
            new \Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
            new \Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new \Sonata\UserBundle\SonataUserBundle(),
            new \Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
        );
        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        
    }

}
