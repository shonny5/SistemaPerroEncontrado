<?php

namespace Sistema\PerroEncontradoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Raza
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sistema\PerroEncontradoBundle\Entity\RazaRepository")
 */
class Raza
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
    *
    * @ORM\ManyToMany(targetEntity="Perro", mappedBy="razas")
    */
    private $perros;


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
     * @return Raza
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
}
