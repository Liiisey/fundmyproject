<?php

namespace App\Controller;

use App\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $projects = $this->getDoctrine()->getRepository(Project::class)->findBy([], ['createdAt' => 'DESC'], 6);
        return $this->render('default/index.html.twig', [
            'projects' => $projects,
        ]);
    }
}
