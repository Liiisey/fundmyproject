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
        $admin->setFirstname("Pierre");
        $admin->setLastname("Jehan");
        $admin->setEmail("pierre.jehan@gmail.com");
        $admin->setPassword($this->encoder->encodePassword($admin, "pjehan"));
        $admin->setRoles(["ROLE_ADMIN"]);
        $manager->persist($admin);
        $this->addReference("user-admin", $admin);

        $user = new User();
        $user->setFirstname("John");
        $user->setLastname("Doe");
        $user->setEmail("john.doe@gmail.com");
        $user->setPassword($this->encoder->encodePassword($admin, "john"));
        $manager->persist($user);
        $this->addReference("user-user", $user);

        $manager->flush();
    }
}
