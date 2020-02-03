<?php

namespace App\DataFixtures;

use App\Entity\Contribution;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ContributionFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $contribution = new Contribution();
        $contribution->setAmount(20);
        $contribution->setUser($this->getReference("user-user"));
        $contribution->setProject($this->getReference("project-1"));
        $manager->persist($contribution);

        $manager->flush();
    }

    /**
     * @inheritDoc
     */
    public function getDependencies()
    {
        return [
            UserFixtures::class,
            ProjectFixtures::class
        ];
    }
}
