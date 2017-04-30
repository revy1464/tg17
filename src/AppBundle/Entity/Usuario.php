<?php

namespace AppBundle\Entity;

/**
 * Usuario
 */
class Usuario
{
    /**
     * @var integer
     */
    private $idusuario;

    /**
     * @var string
     */
    private $cedulaUsuario;

    /**
     * @var string
     */
    private $nombreUsuario;

    /**
     * @var string
     */
    private $apellidoUsuario;

    /**
     * @var string
     */
    private $direccioUsuario;

    /**
     * @var string
     */
    private $telefonoUsuario;

    /**
     * @var string
     */
    private $celularUsuario;

    /**
     * @var \DateTime
     */
    private $fechaNacimientoUsuario;

    /**
     * @var string
     */
    private $emailUsuario;

    /**
     * @var string
     */
    private $profesionUsuario;

    /**
     * @var string
     */
    private $loginUsuario;

    /**
     * @var string
     */
    private $passwordUsuario;

    public function setIdUsuario($idusuario)
    {
        $this->idusuario = $idusuario;

        return $this;
    }
    /**
     * Get idusuario
     *
     * @return integer
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set cedulaUsuario
     *
     * @param string $cedulaUsuario
     *
     * @return Usuario
     */
    public function setCedulaUsuario($cedulaUsuario)
    {
        $this->cedulaUsuario = $cedulaUsuario;

        return $this;
    }

    /**
     * Get cedulaUsuario
     *
     * @return string
     */
    public function getCedulaUsuario()
    {
        return $this->cedulaUsuario;
    }

    /**
     * Set nombreUsuario
     *
     * @param string $nombreUsuario
     *
     * @return Usuario
     */
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;

        return $this;
    }

    /**
     * Get nombreUsuario
     *
     * @return string
     */
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * Set apellidoUsuario
     *
     * @param string $apellidoUsuario
     *
     * @return Usuario
     */
    public function setApellidoUsuario($apellidoUsuario)
    {
        $this->apellidoUsuario = $apellidoUsuario;

        return $this;
    }

    /**
     * Get apellidoUsuario
     *
     * @return string
     */
    public function getApellidoUsuario()
    {
        return $this->apellidoUsuario;
    }

    /**
     * Set direccioUsuario
     *
     * @param string $direccioUsuario
     *
     * @return Usuario
     */
    public function setDireccioUsuario($direccioUsuario)
    {
        $this->direccioUsuario = $direccioUsuario;

        return $this;
    }

    /**
     * Get direccioUsuario
     *
     * @return string
     */
    public function getDireccioUsuario()
    {
        return $this->direccioUsuario;
    }

    /**
     * Set telefonoUsuario
     *
     * @param string $telefonoUsuario
     *
     * @return Usuario
     */
    public function setTelefonoUsuario($telefonoUsuario)
    {
        $this->telefonoUsuario = $telefonoUsuario;

        return $this;
    }

    /**
     * Get telefonoUsuario
     *
     * @return string
     */
    public function getTelefonoUsuario()
    {
        return $this->telefonoUsuario;
    }

    /**
     * Set celularUsuario
     *
     * @param string $celularUsuario
     *
     * @return Usuario
     */
    public function setCelularUsuario($celularUsuario)
    {
        $this->celularUsuario = $celularUsuario;

        return $this;
    }

    /**
     * Get celularUsuario
     *
     * @return string
     */
    public function getCelularUsuario()
    {
        return $this->celularUsuario;
    }

    /**
     * Set fechaNacimientoUsuario
     *
     * @param \DateTime $fechaNacimientoUsuario
     *
     * @return Usuario
     */
    public function setFechaNacimientoUsuario($fechaNacimientoUsuario)
    {
        $this->fechaNacimientoUsuario = $fechaNacimientoUsuario;

        return $this;
    }

    /**
     * Get fechaNacimientoUsuario
     *
     * @return \DateTime
     */
    public function getFechaNacimientoUsuario()
    {
        return $this->fechaNacimientoUsuario;
    }

    /**
     * Set emailUsuario
     *
     * @param string $emailUsuario
     *
     * @return Usuario
     */
    public function setEmailUsuario($emailUsuario)
    {
        $this->emailUsuario = $emailUsuario;

        return $this;
    }

    /**
     * Get emailUsuario
     *
     * @return string
     */
    public function getEmailUsuario()
    {
        return $this->emailUsuario;
    }

    /**
     * Set profesionUsuario
     *
     * @param string $profesionUsuario
     *
     * @return Usuario
     */
    public function setProfesionUsuario($profesionUsuario)
    {
        $this->profesionUsuario = $profesionUsuario;

        return $this;
    }

    /**
     * Get profesionUsuario
     *
     * @return string
     */
    public function getProfesionUsuario()
    {
        return $this->profesionUsuario;
    }

    /**
     * Set loginUsuario
     *
     * @param string $loginUsuario
     *
     * @return Usuario
     */
    public function setLoginUsuario($loginUsuario)
    {
        $this->loginUsuario = $loginUsuario;

        return $this;
    }

    /**
     * Get loginUsuario
     *
     * @return string
     */
    public function getLoginUsuario()
    {
        return $this->loginUsuario;
    }

    /**
     * Set passwordUsuario
     *
     * @param string $passwordUsuario
     *
     * @return Usuario
     */
    public function setPasswordUsuario($passwordUsuario)
    {
        $this->passwordUsuario = $passwordUsuario;

        return $this;
    }

    /**
     * Get passwordUsuario
     *
     * @return string
     */
    public function getPasswordUsuario()
    {
        return $this->passwordUsuario;
    }
}

