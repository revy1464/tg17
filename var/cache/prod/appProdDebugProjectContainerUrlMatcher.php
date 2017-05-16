<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // controlador_index
        if ($pathinfo === '/usuarios/index') {
            return array (  '_controller' => 'AppBundle\\Controller\\UsuariosController::indexAction',  '_route' => 'controlador_index',);
        }

        if (0 === strpos($pathinfo, '/perfiles')) {
            // controlador_addPerfil
            if ($pathinfo === '/perfiles/addPerfil') {
                return array (  '_controller' => 'AppBundle\\Controller\\perfilesController::addPerfilAction',  '_route' => 'controlador_addPerfil',);
            }

            // controlador_readPerfil
            if ($pathinfo === '/perfiles/readPerfil') {
                return array (  '_controller' => 'AppBundle\\Controller\\perfilesController::readPerfilAction',  '_route' => 'controlador_readPerfil',);
            }

            // controlador_delPerfil
            if (0 === strpos($pathinfo, '/perfiles/delPerfil') && preg_match('#^/perfiles/delPerfil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'controlador_delPerfil')), array (  '_controller' => 'AppBundle\\Controller\\perfilesController::delPerfilAction',));
            }

        }

        if (0 === strpos($pathinfo, '/modulos')) {
            // controlador_addModulo
            if ($pathinfo === '/modulos/addModulo') {
                return array (  '_controller' => 'AppBundle\\Controller\\ModulosController::addModuloAction',  '_route' => 'controlador_addModulo',);
            }

            // controlador_readModulo
            if ($pathinfo === '/modulos/readModulo') {
                return array (  '_controller' => 'AppBundle\\Controller\\ModulosController::readModuloAction',  '_route' => 'controlador_readModulo',);
            }

            // controlador_delModulo
            if (0 === strpos($pathinfo, '/modulos/delModulo') && preg_match('#^/modulos/delModulo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'controlador_delModulo')), array (  '_controller' => 'AppBundle\\Controller\\ModulosController::delModuloAction',));
            }

        }

        // controlador_addPerfilMOD
        if (0 === strpos($pathinfo, '/perfilesMOD/addPerfilMOD') && preg_match('#^/perfilesMOD/addPerfilMOD(?:/(?P<idPerfil>[^/]++)(?:/(?P<idModulo>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'controlador_addPerfilMOD')), array (  '_controller' => 'AppBundle\\Controller\\perfilesMODController::addPerfilMODAction',  'idPerfil' => 'GER',  'idModulo' => 'MUS',));
        }

        if (0 === strpos($pathinfo, '/usuarios')) {
            // controlador_addUsuario
            if ($pathinfo === '/usuarios/addUsuario') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsuariosController::addUsuarioAction',  '_route' => 'controlador_addUsuario',);
            }

            // controlador_readUsuario
            if ($pathinfo === '/usuarios/readUsuario') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsuariosController::readUsuarioAction',  '_route' => 'controlador_readUsuario',);
            }

            // controlador_delUsuario
            if (0 === strpos($pathinfo, '/usuarios/delUsuario') && preg_match('#^/usuarios/delUsuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'controlador_delUsuario')), array (  '_controller' => 'AppBundle\\Controller\\UsuariosController::delUsuarioAction',));
            }

            // controlador_updateUsuario
            if ($pathinfo === '/usuarios/updateUsuario') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsuariosController::updateUsuarioAction',  '_route' => 'controlador_updateUsuario',);
            }

            // controlador_loginAction
            if (0 === strpos($pathinfo, '/usuarios/login') && preg_match('#^/usuarios/login(?:/(?P<login>[^/]++)(?:/(?P<password>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'controlador_loginAction')), array (  '_controller' => 'AppBundle\\Controller\\UsuariosController::loginAction',  'login' => 'admin',  'password' => 'admin',));
            }

        }

        // controlador_soap
        if ($pathinfo === '/soap') {
            return array (  '_controller' => 'AppBundle\\Controller\\HelloServiceController::indexAction',  '_route' => 'controlador_soap',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // helloW
        if ($pathinfo === '/hello') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::helloWord',  '_route' => 'helloW',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
