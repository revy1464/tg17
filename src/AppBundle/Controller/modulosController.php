<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Modulos;
/**
 * Description of ModulosController
 *
 * @author Usuario
 */
class ModulosController extends Controller{
    

        //CREACION DE UN MODULO
        
    public function addModuloAction() {//Agrega un perfil de Usuario
        $modulo= new Modulos();
        $modulo->setIdModulos("MUS");
        $modulo->setNombreModulo("Modulo Usuarios");
        $modulo->setDescripcionModulo("Permite gestionar los usuario del sistema");
        
        $em=$this->getDoctrine()->getEntityManager();
        $em->persist($modulo);
        $flush=$em->flush();
        
        if($flush!=null){echo "El modulo no se ha creado correctamente";}
        else{echo "Modulo Creado";}
        
        die();
    }
    
    public function readModuloAction(){
        $em=$this->getDoctrine()->getEntityManager();
        $moduloShow=$em->getRepository("AppBundle:Modulos");//Aqui va la clases 
        $modulos=$moduloShow->findAll();
                
        foreach ($modulos as $modulo ){
            echo $modulo->getIdModulo()."<br/>";
            echo $modulo->getNombreModulo()."<br/>";
            echo $modulo->getDescripcionModulo()."<br/><hr/>";
        }
        die();
    }
    
    public function delModuloAction($id) {
        $em=$this->getDoctrine()->getEntityManager();
        $moduloID=$em->getRepository("AppBundle:Modulos");//Aqui va la clases 
        $modulo=$moduloID->find($id);
        $em->remove($modulo);
        
        $flush=$em->flush();
        
        if($flush!=null){echo "El Modulo no se ha eliminado";}
        else{echo "Modulo eliminado";}                 
        die();
    }
}
