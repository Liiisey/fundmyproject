<?php

namespace App\Controller;

use App\Entity\Project;
use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */

    public function index()
    {
        //Rechercher les données en base de données
        $projects = $this->getDoctrine()->getRepository(Project::class)->findAll();

        //Envoyer les données à la vue
        return $this->render('default/index.html.twig', [
            'projects' => $projects,
        ]);
    }

    public function headerCategories(){
        $categories=$this->getDoctrine()->getRepository(Category::class)->findAll();
        return $this->render('default/_categories.html.twig',['categories'=>$categories]);
    }
}
