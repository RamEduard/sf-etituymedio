<?php

namespace TuyMedio\Bundle\SeccionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Seccion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TuyMedio\Bundle\SeccionBundle\Entity\SeccionRepository")
 */
class Seccion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="letra", type="string", length=1)
     */
    protected $letra;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="TuyMedio\Bundle\CursoBundle\Entity\Curso", mappedBy="seccion")
     */
    protected $cursos;
    
    public function __construct()
    {
        $this->cursos = new ArrayCollection();
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
     * @return Seccion
     */
    public function setId($id)
    {
        $this->id = $id;
        
        return $this;
    }

    /**
     * Set letra
     *
     * @param string $letra
     * @return Seccion
     */
    public function setLetra($letra)
    {
        $this->letra = $letra;

        return $this;
    }

    /**
     * Get letra
     *
     * @return string 
     */
    public function getLetra()
    {
        return $this->letra;
    }
    
    /**
     * Get cursos
     * 
     * @return ArrayCollection
     */
    public function getCursos()
    {
        return $this->cursos;
    }
    
    /**
     * Get Letra
     * 
     * @return string
     */
    public function __toString()
    {
        return $this->letra;
    }
}
