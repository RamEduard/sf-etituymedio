<?php

namespace TuyMedio\Bundle\AsistenciaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asistencia
 *
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(name="asistencia_unique", columns={"materia_id", "alumno_id", "fecha"})})
 * @ORM\Entity(repositoryClass="TuyMedio\Bundle\AsistenciaBundle\Entity\AsistenciaRepository")
 */
class Asistencia
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
     * @ORM\ManyToOne(targetEntity="TuyMedio\Bundle\MateriaBundle\Entity\Materia", inversedBy="asistencias")
     * @ORM\JoinColumn(name="materia_id", referencedColumnName="id")
     */
    protected $materia;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="TuyMedio\Bundle\AlumnoBundle\Entity\Alumno", inversedBy="asistencias")
     * @ORM\JoinColumn(name="alumno_id", referencedColumnName="id")
     */
    protected $alumno;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    protected $fecha;

    /**
     * @var boolean
     *
     * @ORM\Column(name="alumno_asistente", type="boolean")
     */
    protected $alumnoAsistente;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="text", nullable=true)
     */
    protected $observaciones;


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
     * @return Asistencia
     */
    public function setId($id)
    {
        $this->id = $id;
        
        return $this;
    }

    /**
     * Set materia
     *
     * @param integer $materia
     * @return Asistencia
     */
    public function setMateria($materia)
    {
        $this->materia = $materia;

        return $this;
    }

    /**
     * Get materia
     *
     * @return integer 
     */
    public function getMateria()
    {
        return $this->materia;
    }

    /**
     * Set alumno
     *
     * @param integer $alumno
     * @return Asistencia
     */
    public function setAlumno($alumno)
    {
        $this->alumno = $alumno;

        return $this;
    }

    /**
     * Get alumno
     *
     * @return integer 
     */
    public function getAlumno()
    {
        return $this->alumno;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Asistencia
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set asistente
     *
     * @param boolean $asistente
     * @return Asistencia
     */
    public function setAlumnoAsistente($asistente)
    {
        $this->alumnoAsistente = $asistente;

        return $this;
    }

    /**
     * Get asistente
     *
     * @return boolean 
     */
    public function getAlumnoAsistente()
    {
        return $this->alumnoAsistente;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Asistencia
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }
    
    public function __toString()
    {
        return 'Asistencia';
    }
}
