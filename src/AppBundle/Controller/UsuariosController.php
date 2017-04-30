<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Usuario;



class UsuariosController extends Controller
{
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Usuarios:index.html.twig', [
            'texto' => "Probando desde el controlador de Usuario"
        ]);
    }
    
    //CRUD DE UN PERFIL
    
    public function addUsuarioAction() {//Agrega un perfil de Usuario
        $date = new \DateTime('1989-01-25');// Ojo presente un error, $date = new DateTime('1989-01-25'); notese la diferencia
        $usuario= new Usuario();
        $usuario->setIdUsuario(1);
        $usuario->setCedulaUsuario("1114819324");
        $usuario->setNombreUsuario("Jose Manuel");
        $usuario->setApellidoUsuario("Conde Escobar");
        $usuario->setDireccioUsuario("Carrera 13C # 15-65 El Cerrito");
        $usuario->setTelefonoUsuario("0322566613");
        $usuario->setCelularUsuario("3177498512");
        $usuario->setFechaNacimientoUsuario($date);
        $usuario->setEmailUsuario("jose.conde@correounivalle.edu.co");
        $usuario->setProfesionUsuario("Gerente");
        $usuario->setLoginUsuario("jose1464");
        $usuario->setPasswordUsuario("servicio123");
        
        $em=$this->getDoctrine()->getEntityManager();
        $em->persist($usuario);
        $flush=$em->flush();
        
        if($flush!=null){echo "El Usuario no se ha creado correctamente";}
        else{echo "Usuario Creado";}
        
        die();// ojo puede asalir error si no se pone, es para evitar que solicite una vista
    }
    
    /*public function readUsuarioAction() {
        $em=$this->getDoctrine()->getEntityManager();
        $perfilesShow=$em->getRepository("AppBundle:Perfiles");//Aqui va la clases 
        $perfiles=$perfilesShow->findAll();
                
        foreach ($perfiles as $perfil ){
            echo $perfil->getIdperfilUsuario()."<br/>";
            echo $perfil->getNombrePerfil()."<br/>";
            echo $perfil->getDescripcionPerfil()."<br/><hr/>";
        }
        die();
    }
    
    public function delUsuarioAction($id) {
        $em=$this->getDoctrine()->getEntityManager();
        $perfilID=$em->getRepository("AppBundle:Perfiles");//Aqui va la clases 
        $perfil=$perfilID->find($id);
        $em->remove($perfil);
        
        $flush=$em->flush();
        
        if($flush!=null){echo "El perfil no se ha eliminado";}
        else{echo "Perfil eliminado";}                 
        die();
        }*/

    

}
