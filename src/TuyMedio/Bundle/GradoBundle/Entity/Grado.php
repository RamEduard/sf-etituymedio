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
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=1)
     */
    protected $numero;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="TuyMedio\Bundle\CursoBundle\Entity\Curso", mappedBy="grado")
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
     * Get cursos
     * 
     * @return ArrayCollection
     */
    public function getCursos()
    {
        return $this->cursos;
    }
    
    /**
     * Get Numero
     * 
     * @return string
     */
    public function __toString()
    {
        return $this->numero;
    }
}
