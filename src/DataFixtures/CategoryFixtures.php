<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $categories = ["film", "sport", "musique", "jeux"];

        foreach ($categories as $cat) {
            $category = new Category();
            $category->setName(ucfirst($cat));
            $manager->persist($category);
            $this->addReference("cat-$cat", $category);
        }

        $manager->flush();
    }
}
