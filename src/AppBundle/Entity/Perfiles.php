<?php

namespace AppBundle\Entity;

/**
 * Perfiles
 */
class Perfiles
{
    /**
     * @var string
     */
    private $idPerfilUsuario;

    /**
     * @var string
     */
    private $nombrePerfil;

    /**
     * @var string
     */
    private $descripcionPerfil;


    /**
     * Get idperfilUsuario
     *
     * @return string
     */
    public function getIdperfilUsuario()
    {
        return $this->idPerfilUsuario;
    }
    /**
     * Set idPerfilUsuario
     *
     * @param string $idPerfilUsuario
     *
     * @return Perfiles
     */
    public function setIdperfilUsuario($idPerfilUsuario)
    {
        $this->idPerfilUsuario = $idPerfilUsuario;

        return $this;
    }
    /**
     * Set nombrePerfil
     *
     * @param string $nombrePerfil
     *
     * @return Perfiles
     */
    public function setNombrePerfil($nombrePerfil)
    {
        $this->nombrePerfil = $nombrePerfil;

        return $this;
    }
    
    
    /**
     * Get nombrePerfil
     *
     * @return string
     */
    public function getNombrePerfil()
    {
        return $this->nombrePerfil;
    }

    /**
     * Set descripcionPerfil
     *
     * @param string $descripcionPerfil
     *
     * @return Perfiles
     */
    public function setDescripcionPerfil($descripcionPerfil)
    {
        $this->descripcionPerfil = $descripcionPerfil;

        return $this;
    }

    /**
     * Get descripcionPerfil
     *
     * @return string
     */
    public function getDescripcionPerfil()
    {
        return $this->descripcionPerfil;
    }
}

