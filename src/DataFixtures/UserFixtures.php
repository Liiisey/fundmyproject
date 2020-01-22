<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $encoder;

    /**
 * UserFixtures constructor.
 */
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $admin = new User();
        $admin->setFirstname("John");
        $admin->setLastname("Doe");
        $admin->setEmail("john.doe@gmail.com");
        $admin->setPassword($this->encoder->encodePassword($admin, "rootroot"));
        $admin->setRoles(["ROLE_ADMIN"]);
        $this->setReference("john", $admin); //implements userId
        $manager->persist($admin);

        $regina = new User();
        $regina->setFirstname("Regina");
        $regina->setLastname("Fallange");
        $regina->setEmail("regina.fallange@gmail.com");
        $regina->setPassword($this->encoder->encodePassword($regina, "friends"));
        $regina->setRoles(["ROLE_USER"]);
        $this->setReference("regina", $regina); //implements userId
        $manager->persist($regina);

        $manager->flush();
    }
}
