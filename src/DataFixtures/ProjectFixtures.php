<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ProjectFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $project1 = new Project();
        $project1->setName("Good Girl");
        $project1->setImage("project1.jpg");
        $project1->setExcerpt("Ce film parle de ...");
        $project1->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed auctor leo. In ullamcorper felis orci, at vestibulum velit blandit et. Curabitur enim nunc, fermentum quis magna ultricies, bibendum mollis elit. Donec at gravida velit. In et lectus pharetra, egestas elit non, vehicula purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus ultricies ipsum libero. Aliquam mollis, nulla sed lobortis rhoncus, urna felis elementum ex, in egestas turpis dolor et nibh.");
        $project1->setGoal(5500);
        $project1->addCategory($this->getReference("cat-film"));
        $project1->setUser($this->getReference("user-admin"));
        $manager->persist($project1);
        $this->addReference("project-1", $project1);

        $project2 = new Project();
        $project2->setName("Les yeux dans le bus");
        $project2->setExcerpt("Revivez la grande épopée de l'équipe de France de football lors du mondial de football 2010.");
        $project2->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed auctor leo. In ullamcorper felis orci, at vestibulum velit blandit et. Curabitur enim nunc, fermentum quis magna ultricies, bibendum mollis elit. Donec at gravida velit. In et lectus pharetra, egestas elit non, vehicula purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus ultricies ipsum libero. Aliquam mollis, nulla sed lobortis rhoncus, urna felis elementum ex, in egestas turpis dolor et nibh.");
        $project2->setGoal(2800.50);
        $project2->addCategory($this->getReference("cat-film"));
        $project2->addCategory($this->getReference("cat-sport"));
        $project2->setUser($this->getReference("user-user"));
        $manager->persist($project2);
        $this->addReference("project-2", $project2);

        $project3 = new Project();
        $project3->setName("Dabado");
        $project3->setImage("project3.jpg");
        $project3->setExcerpt("Un jeu fantastique peint à la main. Plongez dans des aventures extra-ordinaires !");
        $project3->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed auctor leo. In ullamcorper felis orci, at vestibulum velit blandit et. Curabitur enim nunc, fermentum quis magna ultricies, bibendum mollis elit. Donec at gravida velit. In et lectus pharetra, egestas elit non, vehicula purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus ultricies ipsum libero. Aliquam mollis, nulla sed lobortis rhoncus, urna felis elementum ex, in egestas turpis dolor et nibh.");
        $project3->setGoal(4850);
        $project3->addCategory($this->getReference("cat-jeux"));
        $project3->setUser($this->getReference("user-user"));
        $manager->persist($project3);
        $this->addReference("project-3", $project3);

        $project4 = new Project();
        $project4->setName("DOOSH");
        $project4->setImage("project4.jpg");
        $project4->setExcerpt("Venez m'accompagner dans mon projet de création musicale avec clip vidéo !");
        $project4->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed auctor leo. In ullamcorper felis orci, at vestibulum velit blandit et. Curabitur enim nunc, fermentum quis magna ultricies, bibendum mollis elit. Donec at gravida velit. In et lectus pharetra, egestas elit non, vehicula purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus ultricies ipsum libero. Aliquam mollis, nulla sed lobortis rhoncus, urna felis elementum ex, in egestas turpis dolor et nibh.");
        $project4->setGoal(9800);
        $project4->addCategory($this->getReference("cat-musique"));
        $project4->addCategory($this->getReference("cat-film"));
        $project4->setUser($this->getReference("user-admin"));
        $manager->persist($project4);
        $this->addReference("project-4", $project4);

        $manager->flush();
    }

    /**
     * @inheritDoc
     */
    public function getDependencies()
    {
        return [
            UserFixtures::class,
            CategoryFixtures::class
        ];
    }
}
