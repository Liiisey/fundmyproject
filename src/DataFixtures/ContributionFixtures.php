<?php

namespace App\DataFixtures;

use App\Entity\Contribution;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ContributionFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $contribution = new Contribution();
        $contribution->setAmount(1000.00);
        $this->addReference("amount", $contribution); //implements contribution
        $manager->persist($contribution);

        $manager->flush();
    }
}
