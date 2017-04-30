<?php

namespace AppBundle\Entity;

/**
 * PerfilUsuario
 */
class PerfilUsuario
{
    /**
     * @var integer
     */
    private $idperfilUsuario;

    /**
     * @var \AppBundle\Entity\Perfiles
     */
    private $perfilesperfilUsuario;

    /**
     * @var \AppBundle\Entity\Usuario
     */
    private $usuariousuario;


    /**
     * Get idperfilUsuario
     *
     * @return integer
     */
    public function getIdperfilUsuario()
    {
        return $this->idperfilUsuario;
    }

    /**
     * Set perfilesperfilUsuario
     *
     * @param \AppBundle\Entity\Perfiles $perfilesperfilUsuario
     *
     * @return PerfilUsuario
     */
    public function setPerfilesperfilUsuario(\AppBundle\Entity\Perfiles $perfilesperfilUsuario = null)
    {
        $this->perfilesperfilUsuario = $perfilesperfilUsuario;

        return $this;
    }

    /**
     * Get perfilesperfilUsuario
     *
     * @return \AppBundle\Entity\Perfiles
     */
    public function getPerfilesperfilUsuario()
    {
        return $this->perfilesperfilUsuario;
    }

    /**
     * Set usuariousuario
     *
     * @param \AppBundle\Entity\Usuario $usuariousuario
     *
     * @return PerfilUsuario
     */
    public function setUsuariousuario(\AppBundle\Entity\Usuario $usuariousuario = null)
    {
        $this->usuariousuario = $usuariousuario;

        return $this;
    }

    /**
     * Get usuariousuario
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getUsuariousuario()
    {
        return $this->usuariousuario;
    }
}

