<?php

namespace TuyMedio\Bundle\UsuarioBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Description of User
 *
 * @author Ramón Serrano <ramon.calle.88@gmail.com>
 * 
 * @ORM\Entity(repositoryClass="TuyMedio\Bundle\UsuarioBundle\Entity\UsuarioRepository")
 * @ORM\Table()
 */
class Usuario extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    public function __construct()
    {
        parent::__construct();
    }
}