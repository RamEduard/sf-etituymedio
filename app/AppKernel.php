<?php

use Symfony\Component\Config\Loader\LoaderInterface,
    TuyMedio\Bundle\KernelBundle\TuyMedioKernel;

class AppKernel extends TuyMedioKernel
{
    public function registerBundles()
    {
        $bundles = array(
            new AppBundle\AppBundle(),
            new TuyMedio\Bundle\AdminBundle\TuyMedioAdminBundle(),
            new TuyMedio\Bundle\KernelBundle\TuyMedioKernelBundle(),
            new TuyMedio\Bundle\AlumnoBundle\TuyMedioAlumnoBundle(),
            new TuyMedio\Bundle\MateriaBundle\TuyMedioMateriaBundle(),
            new TuyMedio\Bundle\SeccionBundle\TuyMedioSeccionBundle(),
            new TuyMedio\Bundle\GradoBundle\TuyMedioGradoBundle(),
        );
        
        $bundles = array_merge(parent::registerBundles(), $bundles);

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
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
