<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mohammed
 * Date: 13/01/14
 * Time: 16:33
 * To change this template use File | Settings | File Templates.
 */

namespace Med\AdBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategorieController extends Controller{

    public function ListeCategorieAction()
    {
        $categories = $this->getDoctrine()->getRepository("MedAdBundle:Categorie")->findAll();

        return $this->render("MedAdBundle:Categorie:liste_categorie.html.twig",
            array('categories' => $categories)
        );
    }

}