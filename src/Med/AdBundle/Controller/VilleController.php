<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mohammed
 * Date: 01/01/14
 * Time: 20:21
 * To change this template use File | Settings | File Templates.
 */

namespace Med\AdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class VilleController extends Controller{



public function listeAction(){

    $villes  = $this->getDoctrine()->getRepository("MedAdBundle:Ville")->findAll();

    return array(
        'villes'      => $villes,
    );

}


    public function listeVilleAction(){
        $entities = $this->getDoctrine()->getRepository("MedAdBundle:Ville")->findAll();

        return $this->render('MedAdBundle:Ville:liste_ville.html.twig',
            array('entities' => $entities));

    }

}