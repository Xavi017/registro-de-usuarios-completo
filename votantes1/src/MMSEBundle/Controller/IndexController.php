<?php

namespace MMSEBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use MMSEBundle\Entity\Controlusuarios;

class IndexController extends Controller {

    public function registroAction() {
        return $this->render('MMSEBundle:Index:registro.html.twig');
    }
    
      
    public function savevAction(Request $request) {
        
        $ced=$request->get('ced');
        $lugar=$request->get('lugar');
        
        $ced=trim($ced);
        

        $em = $this->getDoctrine()->getManager();
        $db = $em->getConnection();
 
        $query = "SELECT * FROM usuarios where cedula=$ced";
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $po=$stmt->fetchAll();

		if($po){
            $controlusuarios = new controlusuarios();

            $controlusuarios->setnombres($po[0]['nombres'] . " ". $po[0]['apellidos']);
            $controlusuarios->setcedula($po[0]['cedula']);
            $controlusuarios->setregistro($lugar);
            $controlusuarios->setfecha(new \Datetime("now", new \DatetimeZone("America/Bogota")));
            $em->persist($controlusuarios);
            $em->flush();
            return new Response("<div class='alert alert-success' ><span class='glyphicon glyphicon-floppy-saved'></span> Se registro correctamente la "."'$lugar'"." del usuario ".$po[0]['nombres'] . " ". $po[0]['apellidos']."!.</div>");

            }else{
                return new Response("<div class='alert alert-danger' ><span class='glyphicon glyphicon-floppy-saved'></span> El usuario no se encuentra registrado, por favor comuniquese con el administrador!.</div>");
            }
    }


}
