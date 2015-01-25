<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TuyMedio\Bundle\AdminBundle\Entity\Usuario;

/**
 * UsuarioData
 *
 * @author Ramón Serrano <ramon.calle.88@gmail.com>
 */
class UsuarioData implements FixtureInterface
{
    
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $usuarioAdmin = new Usuario();
        
        $usuarioAdmin->setUsername('admin');
        $usuarioAdmin->setEmail('admin@localhost');
        $usuarioAdmin->setPlainPassword('admin');
        $usuarioAdmin->setRoles(array(
            'ROLE_ADMIN', 'ROLE_SONATA_ADMIN'
        ));
        $usuarioAdmin->setEnabled(true);
        
        $usuarioComun = new Usuario();
        
        $usuarioComun->setUsername('usuario');
        $usuarioComun->setEmail('usuario@localhost');
        $usuarioComun->setPlainPassword('usuario');
        $usuarioComun->setRoles(array('ROLE_USER'));
        $usuarioComun->setEnabled(true);
        
        $manager->persist($usuarioAdmin);
        $manager->persist($usuarioComun);
        $manager->flush();
    }

}
