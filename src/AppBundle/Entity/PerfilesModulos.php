<?php

namespace AppBundle\Entity;

/**
 * PerfilesModulos
 */
class PerfilesModulos
{
    /**
     * @var integer
     */
    private $idperfilesModulos;

    /**
     * @var \AppBundle\Entity\Modulos
     */
    private $modulosmodulos;

    /**
     * @var \AppBundle\Entity\Perfiles
     */
    private $perfilesperfilUsuario;


    
   public function setIdPerfilesModulos($idperfilesModulos)
    {
        $this->idperfilesModulos = $idperfilesModulos;

        return $this;
    }
    /**
     * Get idperfilesModulos
     *
     * @return integer
     */
    public function getIdperfilesModulos()
    {
        return $this->idperfilesModulos;
    }

    /**
     * Set modulosmodulos
     *
     * @param \AppBundle\Entity\Modulos $modulosmodulos
     *
     * @return PerfilesModulos
     */
    public function setModulosmodulos(\AppBundle\Entity\Modulos $modulosmodulos = null)
    {
        $this->modulosmodulos = $modulosmodulos;

        return $this;
    }

    /**
     * Get modulosmodulos
     *
     * @return \AppBundle\Entity\Modulos
     */
    public function getModulosmodulos()
    {
        return $this->modulosmodulos;
    }

    /**
     * Set perfilesperfilUsuario
     *
     * @param \AppBundle\Entity\Perfiles $perfilesperfilUsuario
     *
     * @return PerfilesModulos
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
}

