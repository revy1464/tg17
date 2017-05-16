<?php

namespace AppBundle\Controller;

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
    
    //CRUD DE UN Usuario
    
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
    
    public function readUsuarioAction() {
        $em=$this->getDoctrine()->getEntityManager();
        $usuariosShow=$em->getRepository("AppBundle:Usuario");//Aqui va la clases 
        $usuarios=$usuariosShow->findAll();
                
        foreach ($usuarios as $usuario ){
            echo $usuario->getIdusuario()."<br/><hr/><hr/>";
            echo $usuario->getCedulaUsuario()."<br/><hr/>";
            echo $usuario->getNombreUsuario()."<br/><hr/>";
            echo $usuario->getApellidoUsuario()."<br/><hr/>";
            echo $usuario->getDireccioUsuario()."<br/><hr/>";
            echo $usuario->getTelefonoUsuario()."<br/><hr/>";
            echo $usuario->getCelularUsuario()."<br/><hr/>";
            echo $usuario->getFechaNacimientoUsuario()->format("d/m/Y")."<br/><hr/>";
            echo $usuario->getEmailUsuario()."<br/><hr/>";
            echo $usuario->getProfesionUsuario()."<br/><hr/>";
        }
        die();
    }
    
    public function delUsuarioAction($id) {
        $em=$this->getDoctrine()->getEntityManager();
        $usuarioID=$em->getRepository("AppBundle:Usuario");//Aqui va la clases 
        $Usuario=$usuarioID->find($id);
        $em->remove($Usuario);
        
        $flush=$em->flush();
        
        if($flush!=null){echo "El Usuario no se ha eliminado";}
        else{echo "Usuario eliminado";}                 
        die();
        }
        
    public function updateUsuarioAction(){
        $em=$this->getDoctrine()->getEntityManager();
        $usuarioID=$em->getRepository("AppBundle:Usuario");//Aqui va la clases 
        $usuario=$usuarioID->find(1);
        $usuario->setCedulaUsuario("1114819324");
        $usuario->setNombreUsuario("Juan Manuel");
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
        
        if($flush!=null){echo "El Usuario no se ha modificado correctamente";}
    else{echo "Usuario modificado";}
    die();
        }
        
    public function loginAction($login, $password) {
        $em=$this->getDoctrine()->getEntityManager();
        $usuarioID=$em->getRepository("AppBundle:Usuario");//Aqui va la clases 
        $Usuario=$usuarioID->findBy(array("loginUsuario"=>$login));
        
        if($Usuario[0]->getPasswordUsuario()==$password){
            echo "true";
        }else{echo "false";}
        die();
    }

   

}
