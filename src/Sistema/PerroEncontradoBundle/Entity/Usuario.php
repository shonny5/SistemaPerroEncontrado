<?php

namespace Sistema\PerroEncontradoBundle\Entity;

use Sistema\PerroEncontradoBundle\Entity\Perro;
use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sistema\PerroEncontradoBundle\Entity\UsuarioRepository")
 */
class Usuario
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
    * @ORM\OneToMany(targetEntity="Perro", mappedBy="usuario")
    */
    private $perros_encontrados;

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
     * @return Usuario
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
     * @return Usuario
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
     * @return Usuario
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
        $this->perros_encontrados = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add perros_encontrados
     *
     * @param \Sistema\PerroEncontradoBundle\Entity\Perro $perrosEncontrados
     * @return Usuario
     */
    public function addPerrosEncontrado(\Sistema\PerroEncontradoBundle\Entity\Perro $perrosEncontrados)
    {
        $this->perros_encontrados[] = $perrosEncontrados;

        return $this;
    }

    /**
     * Remove perros_encontrados
     *
     * @param \Sistema\PerroEncontradoBundle\Entity\Perro $perrosEncontrados
     */
    public function removePerrosEncontrado(\Sistema\PerroEncontradoBundle\Entity\Perro $perrosEncontrados)
    {
        $this->perros_encontrados->removeElement($perrosEncontrados);
    }

    /**
     * Get perros_encontrados
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPerrosEncontrados()
    {
        return $this->perros_encontrados;
    }
}
