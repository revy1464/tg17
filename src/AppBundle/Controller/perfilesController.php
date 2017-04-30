<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Perfiles;


class perfilesController extends Controller
{
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Usuarios:index.html.twig', [
            'texto' => "Perfiles del sistema"
        ]);
    }
    
    //CRUD DE UN PERFIL
    
    public function addPerfilAction() {//Agrega un perfil de Usuario
        $perfil= new Perfiles();
        $perfil->setIdperfilUsuario("Sec");
        $perfil->setNombrePerfil("Secretaria");
        $perfil->setDescripcionPerfil("Perfil Agregado desde UsuariosController");
        
        $em=$this->getDoctrine()->getEntityManager();
        $em->persist($perfil);
        $flush=$em->flush();
        
        if($flush!=null){echo "El perfil no se ha creado correctamente";}
        else{echo "Perfil Creado";}
        
        die();// ojo puede asalir error si no se pone, es para evitar que solicite una vista
    }
    
    public function readPerfilAction() {
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
    
    public function delPerfilAction($id) {
        $em=$this->getDoctrine()->getEntityManager();
        $perfilID=$em->getRepository("AppBundle:Perfiles");//Aqui va la clases 
        $perfil=$perfilID->find($id);
        $em->remove($perfil);
        
        $flush=$em->flush();
        
        if($flush!=null){echo "El perfil no se ha eliminado";}
        else{echo "Perfil eliminado";}                 
        die();
        }

    

}
