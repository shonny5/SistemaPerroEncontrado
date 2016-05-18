<?php

namespace Sistema\PerroEncontradoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Propietario
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sistema\PerroEncontradoBundle\Entity\PropietarioRepository")
 */
class Propietario
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;
    /**
    *
    * @ORM\OneToMany(targetEntity="Perro", mappedBy="propietario")
    */
    private $perros_propios;

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
     * Set nombre
     *
     * @param string $nombre
     * @return Propietario
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
     * Set apellido
     *
     * @param string $apellido
     * @return Propietario
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Propietario
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->perros_propios = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add perros_propios
     *
     * @param \Sistema\PerroEncontradoBundle\Entity\Perro $perrosPropios
     * @return Propietario
     */
    public function addPerrosPropio(\Sistema\PerroEncontradoBundle\Entity\Perro $perrosPropios)
    {
        $this->perros_propios[] = $perrosPropios;

        return $this;
    }

    /**
     * Remove perros_propios
     *
     * @param \Sistema\PerroEncontradoBundle\Entity\Perro $perrosPropios
     */
    public function removePerrosPropio(\Sistema\PerroEncontradoBundle\Entity\Perro $perrosPropios)
    {
        $this->perros_propios->removeElement($perrosPropios);
    }

    /**
     * Get perros_propios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPerrosPropios()
    {
        return $this->perros_propios;
    }
}
