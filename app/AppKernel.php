<?php

use Symfony\Component\Config\Loader\LoaderInterface,
    TuyMedio\Bundle\KernelBundle\TuyMedioKernel;

class AppKernel extends TuyMedioKernel
{
    public function registerBundles()
    {
        $bundles = array(
            new TuyMedio\Bundle\UsuarioBundle\TuyMedioUsuarioBundle(),
            new TuyMedio\Bundle\KernelBundle\TuyMedioKernelBundle(),
        );
        
        $bundles = array_merge(parent::registerBundles(), $bundles);

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Acme\DemoBundle\AcmeDemoBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
