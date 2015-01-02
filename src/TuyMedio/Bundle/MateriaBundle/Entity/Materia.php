<?php

namespace TuyMedio\Bundle\MateriaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materia
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TuyMedio\Bundle\MateriaBundle\Entity\MateriaRepository")
 */
class Materia
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    protected $nombre;

    /**
     * @var array
     *
     * @ORM\Column(name="grados_asociados", type="array")
     */
    protected $gradosAsociados;


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
     * @return Alumno
     */
    public function setId($id)
    {
        $this->id = $id;
        
        return $this;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Materia
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set gradosAsociados
     *
     * @param array $gradosAsociados
     * @return Materia
     */
    public function setGradosAsociados($gradosAsociados)
    {
        $this->gradosAsociados = $gradosAsociados;

        return $this;
    }

    /**
     * Get gradosAsociados
     *
     * @return array 
     */
    public function getGradosAsociados()
    {
        return $this->gradosAsociados;
    }
}
