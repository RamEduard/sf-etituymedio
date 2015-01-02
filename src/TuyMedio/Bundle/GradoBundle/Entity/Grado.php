<?php

namespace TuyMedio\Bundle\GradoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Grado
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TuyMedio\Bundle\GradoBundle\Entity\GradoRepository")
 */
class Grado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=1)
     */
    private $numero;

    /**
     * @var ArrayCollection
     * 
     * @ORM\ManyToMany(targetEntity="TuyMedio\Bundle\SeccionBundle\Entity\Seccion")
     * @ORM\JoinTable(
     *  name="GradosSecciones",
     *  joinColumns={@ORM\JoinColumn(name="grado_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="seccion_id", referencedColumnName="id", unique=true)}
     * )
     */
    protected $secciones;

    public function __construct() {
        $this->secciones = new ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set id
     * 
     * @param integer $id
     * @return Grado
     */
    public function setId($id)
    {
        $this->id = $id;
        
        return $this;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return Grado
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }
    
    /**
     * Get Secciones
     * 
     * @return ArrayCollection
     */
    public function getSecciones()
    {
        return $this->secciones;
    }
}
