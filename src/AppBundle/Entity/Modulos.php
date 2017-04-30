<?php

namespace AppBundle\Entity;

/**
 * Modulos
 */
class Modulos
{
    /**
     * @var string
     */
    private $idModulos;

    /**
     * @var string
     */
    private $nombreModulo;

    /**
     * @var string
     */
    private $descripcionModulo;

    
    /**
     * Set idModulos
     *
     * @param string $idModulos
     *
     * @return idModulos
     */
    public function setIdModulos($idModulos)
    {
        $this->idModulos = $idModulos;

        return $this;
    }

    /**
     * Get idModulo
     *
     * @return string
     */
    public function getIdModulo()
    {
        return $this->idModulos;
    }

    /**
     * Set nombreModulo
     *
     * @param string $nombreModulo
     *
     * @return Modulos
     */
    public function setNombreModulo($nombreModulo)
    {
        $this->nombreModulo = $nombreModulo;

        return $this;
    }

    /**
     * Get nombreModulo
     *
     * @return string
     */
    public function getNombreModulo()
    {
        return $this->nombreModulo;
    }

    /**
     * Set descripcionModulo
     *
     * @param string $descripcionModulo
     *
     * @return Modulos
     */
    public function setDescripcionModulo($descripcionModulo)
    {
        $this->descripcionModulo = $descripcionModulo;

        return $this;
    }

    /**
     * Get descripcionModulo
     *
     * @return string
     */
    public function getDescripcionModulo()
    {
        return $this->descripcionModulo;
    }
}

