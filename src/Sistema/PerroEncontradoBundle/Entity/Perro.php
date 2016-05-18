<?php

namespace Sistema\PerroEncontradoBundle\Entity;

use Sistema\PerroEncontradoBundle\Entity\Usuario;
use Doctrine\ORM\Mapping as ORM;

/**
 * Perro
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sistema\PerroEncontradoBundle\Entity\PerroRepository")
 */
class Perro
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
     * @ORM\Column(name="ubicacion", type="string", length=255)
     */
    private $ubicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso", type="datetime")
     */
    private $fechaIngreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_salida", type="datetime")
     */
    private $fechaSalida;

    /**
    *
    * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="perros_encontrados")
    */
    private $usuario_de_rescate;

    /**
    *
    * @ORM\ManytoOne(targetEntity="Propietario", inversedBy="perros_propios")
    */
    private $propietario;

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
     * Set ubicacion
     *
     * @param string $ubicacion
     * @return Perro
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Perro
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return Perro
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime 
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set fechaSalida
     *
     * @param \DateTime $fechaSalida
     * @return Perro
     */
    public function setFechaSalida($fechaSalida)
    {
        $this->fechaSalida = $fechaSalida;

        return $this;
    }

    /**
     * Get fechaSalida
     *
     * @return \DateTime 
     */
    public function getFechaSalida()
    {
        return $this->fechaSalida;
    }

    /**
     * Set usuario_de_rescate
     *
     * @param \Sistema\PerroEncontradoBundle\Entity\Usuario $usuarioDeRescate
     * @return Perro
     */
    public function setUsuarioDeRescate(\Sistema\PerroEncontradoBundle\Entity\Usuario $usuarioDeRescate = null)
    {
        $this->usuario_de_rescate = $usuarioDeRescate;

        return $this;
    }

    /**
     * Get usuario_de_rescate
     *
     * @return \Sistema\PerroEncontradoBundle\Entity\Usuario 
     */
    public function getUsuarioDeRescate()
    {
        return $this->usuario_de_rescate;
    }

    /**
     * Set propietario
     *
     * @param \Sistema\PerroEncontradoBundle\Entity\Propietario $propietario
     * @return Perro
     */
    public function setPropietario(\Sistema\PerroEncontradoBundle\Entity\Propietario $propietario = null)
    {
        $this->propietario = $propietario;

        return $this;
    }

    /**
     * Get propietario
     *
     * @return \Sistema\PerroEncontradoBundle\Entity\Propietario 
     */
    public function getPropietario()
    {
        return $this->propietario;
    }
}
