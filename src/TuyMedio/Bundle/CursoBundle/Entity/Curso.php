<?php

namespace TuyMedio\Bundle\CursoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Curso
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TuyMedio\Bundle\CursoBundle\Entity\CursoRepository")
 */
class Curso
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
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="TuyMedio\Bundle\GradoBundle\Entity\Grado", inversedBy="cursos")
     * @ORM\JoinColumn(name="grado_id", referencedColumnName="id")
     */
    protected $grado;

    /**
     * @var integer
     * 
     * @ORM\ManyToOne(targetEntity="TuyMedio\Bundle\SeccionBundle\Entity\Seccion", inversedBy="cursos")
     * @ORM\JoinColumn(name="seccion_id", referencedColumnName="id")
     */
    protected $seccion;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="TuyMedio\Bundle\MateriaBundle\Entity\Materia")
     * @ORM\JoinTable(
     *  name="CursosMaterias",
     *  joinColumns={@ORM\JoinColumn(name="curso_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="materia_id", referencedColumnName="id")}
     * )
     */
    protected $materias;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="TuyMedio\Bundle\AlumnoBundle\Entity\Alumno", mappedBy="curso")
     */
    protected $alumnos;
    
    public function __construct()
    {
        $this->alumnos = new ArrayCollection();
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
     * Set grado
     *
     * @param array $grado
     * @return Curso
     */
    public function setGrado($grado)
    {
        $this->grado = $grado;

        return $this;
    }

    /**
     * Get grado
     *
     * @return array 
     */
    public function getGrado()
    {
        return $this->grado;
    }

    /**
     * Set seccion
     *
     * @param integer $seccion
     * @return Curso
     */
    public function setSeccion($seccion)
    {
        $this->seccion = $seccion;

        return $this;
    }

    /**
     * Get seccion
     *
     * @return integer 
     */
    public function getSeccion()
    {
        return $this->seccion;
    }

    /**
     * Get materias
     *
     * @return ArrayCollection 
     */
    public function getMaterias()
    {
        return $this->materias;
    }
    
    
    public function setMaterias(ArrayCollection $materias)
    {
        $this->materias = $materias;
        
        return $this;
    }
    
    public function __toString()
    {
        return "{$this->grado} {$this->seccion}";
    }
}
