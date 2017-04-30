<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\PerfilesModulos;
use AppBundle\Entity\Perfiles;
use AppBundle\Entity\Modulos;


class perfilesMODController extends Controller
{
    
    //CRUD DE UN PERFIL
    
    public function addPerfilMODAction($idPerfil,$idModulo) {//Agrega un perfil de Usuario
        $em=$this->getDoctrine()->getEntityManager();
        $moduloID=$em->getRepository("AppBundle:modulos");
        $modulo=$moduloID->find($idModulo); //Realizo una consulta con el id del modulo y con ella creo una instancia modulo      
        
        $pefilID=$em->getRepository("AppBundle:perfiles");
        $perfil=$pefilID->find($idPerfil);  
        
        $perfilM= new PerfilesModulos();
        $perfilM->setIdPerfilesModulos(1);
        $perfilM->setPerfilesperfilUsuario($perfil);
        $perfilM->setModulosmodulos($modulo);
        
        
        
        $em->persist($perfilM);
        $flush=$em->flush();
        
        if($flush!=null){echo "El perfilModulos no se ha creado correctamente";}
        else{echo "Perfil Modulo Creado";}
        
        die();// ojo puede asalir error si no se pone, es para evitar que solicite una vista
    }
   /* 
    public function readPerfilMODAction() {
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
    
    public function delMODPerfilAction($id) {
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
