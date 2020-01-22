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
        $goodgirl = new Project();
        $goodgirl->setName("Good Girl");
        $goodgirl->setImage("project1.jpg");
        $goodgirl->setExcerpt("Ce film parle de ...");
        $goodgirl->setDescription("Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium amet at aut blanditiis corporis culpa deleniti dignissimos eos ex facilis inventore iusto laudantium odit, quibusdam rerum, sapiente sequi temporibus.");
        $goodgirl->setGoal(5500.00);
        $goodgirl->prePersist();
        $goodgirl->addCategory($this->getReference("category-film")); //implements category
        $goodgirl->setUser($this->getReference("regina"));
        $this->addReference("Good Girl", $goodgirl); //implements contribution
        $manager->persist($goodgirl);

        $lesyeuxdanslebus = new Project();
        $lesyeuxdanslebus->setName("Les yeux dans le bus");
        $lesyeuxdanslebus->setImage("placeholder.png");
        $lesyeuxdanslebus->setExcerpt("Revivez la grande épopée de l'équipe de France de football lors du mondial de football 2010.");
        $lesyeuxdanslebus->setDescription("Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium amet at aut blanditiis corporis culpa deleniti dignissimos eos ex facilis inventore iusto laudantium odit, quibusdam rerum, sapiente sequi temporibus.");
        $lesyeuxdanslebus->setGoal(5500.00);
        $lesyeuxdanslebus->addCategory($this->getReference("category-film")); //implements category
        $lesyeuxdanslebus->addCategory($this->getReference("category-sport")); //implements category
        $lesyeuxdanslebus->setUser($this->getReference("regina"));
        $this->addReference("Les yeux dans le bus", $lesyeuxdanslebus); //implements contribution
        $manager->persist($lesyeuxdanslebus);

        $dabado = new Project();
        $dabado->setName("Dabado");
        $dabado->setImage("project3.jpg");
        $dabado->setExcerpt("Un jeu fantastique peint à la main. Plongez dans des aventures extra-ordinaires !");
        $dabado->setDescription("Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium amet at aut blanditiis corporis culpa deleniti dignissimos eos ex facilis inventore iusto laudantium odit, quibusdam rerum, sapiente sequi temporibus.");
        $dabado->setGoal(5500.00);
        $dabado->addCategory($this->getReference("category-jeux")); //implements category
        $dabado->setUser($this->getReference("regina"));
        $this->addReference("Dabado", $dabado); //implements contribution
        $manager->persist($dabado);

        $doosh = new Project();
        $doosh->setName("DOOSH");
        $doosh->setImage("project4.jpg");
        $doosh->setExcerpt("Venez m'accompagner dans mon projet de création musicale avec clip vidéo !");
        $doosh->setDescription("Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium amet at aut blanditiis corporis culpa deleniti dignissimos eos ex facilis inventore iusto laudantium odit, quibusdam rerum, sapiente sequi temporibus.");
        $doosh->setGoal(5500.00);
        $doosh->addCategory($this->getReference("category-film")); //implements category
        $doosh->addCategory($this->getReference("category-musique")); //implements category
        $doosh->setUser($this->getReference("regina"));
        $this->addReference("DOOSH", $doosh); //implements contribution
        $manager->persist($doosh);


        $manager->flush();
    }


    /**
     * @inheritDoc
     */
    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
            UserFixtures::class
        ];
    }
}
