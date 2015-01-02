<?php

namespace TuyMedio\Bundle\AlumnoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumno
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TuyMedio\Bundle\AlumnoBundle\Entity\AlumnoRepository")
 */
class Alumno
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
     * @ORM\Column(name="cedula", type="string", length=15)
     */
    private $cedula;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=100)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=100)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1)
     */
    private $sexo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccionVivienda;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="date")
     */
    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar_nacimiento", type="string", length=255)
     */
    private $lugarNacimiento;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="grado_actual", type="integer")
     */
    private $gradoActual;

    /**
     * @var array
     *
     * @ORM\Column(name="grados_cursados", type="array")
     */
    private $gradosCursados;


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
     * Set cedula
     *
     * @param string $cedula
     * @return Alumno
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return string 
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Alumno
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return Alumno
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return Alumno
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set direccion
     *
     * @param string $direccionVivienda
     * @return Alumno
     */
    public function setDireccionVivienda($direccionVivienda)
    {
        $this->direccionVivienda = $direccionVivienda;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccionVivienda()
    {
        return $this->direccionVivienda;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return Alumno
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set lugarNacimiento
     *
     * @param \DateTime $lugarNacimiento
     * @return Alumno
     */
    public function setLugarNacimiento($lugarNacimiento)
    {
        $this->lugarNacimiento = $lugarNacimiento;

        return $this;
    }

    /**
     * Get lugarNacimiento
     *
     * @return \DateTime 
     */
    public function getLugarNacimiento()
    {
        return $this->lugarNacimiento;
    }
    
    /**
     * Set gradoActual
     *
     * @param integer $gradoActual
     * @return Alumno
     */
    public function setGradoActual($gradoActual)
    {
        $this->gradoActual = $gradoActual;

        return $this;
    }

    /**
     * Get gradoActual
     *
     * @return integer 
     */
    public function getGradoActual()
    {
        return $this->gradoActual;
    }

    /**
     * Set gradosCursados
     *
     * @param array $gradosCursados
     * @return Alumno
     */
    public function setGradosCursados($gradosCursados)
    {
        $this->gradosCursados = $gradosCursados;

        return $this;
    }

    /**
     * Get gradosCursados
     *
     * @return array 
     */
    public function getGradosCursados()
    {
        return $this->gradosCursados;
    }
}
