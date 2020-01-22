<?php

namespace App\Controller;

use App\Entity\Project;
use App\Entity\Category;
use App\Form\ProjectType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */

    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);

        //Rechercher les données en base de données
        $projects = $this->getDoctrine()->getRepository(Project::class)->findAll();
        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();

        //Afficher l'adresse de l'utilisateur quand il est connecté dans le formulaire
        $project = new Project();
        if ($this->getUser()) {
            $project->setEmail($this->getUser()->getEmail());
        }

        //Formulaire des projets
        $projectForm = $this->createForm(ProjectType::class, $project, [
            'action' => $this->generateUrl('project_new')
        ]);

        //Envoyer les données à la vue
        return $this->render('default/index.html.twig', [
            'projects' => $projects,
            'categories' => $categories,
            'projectForm' => $projectForm->createView()
        ]);
    }

    public function headerCategories()
    {
        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
        return $this->render('default/_categories.html.twig', [
            'categories' => $categories,
        ]);
    }

    public function headerProjects()
    {
        $projects = $this->getDoctrine()->getRepository(Project::class)->findAll();
        return $this->render('default/_projects.html.twig', [
            'projects' => $projects,
        ]);
    }
}
