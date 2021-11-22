<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)    
    {
        $this->passwordEncoder=$passwordEncoder;
    }


    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $roles[] = 'ROLE_ADMIN';

        $user->setEmail('donatien.letonnelier@gmail.com');
        $user ->setRoles($roles);
        $user->setPassword($this->passwordEncoder->encodePassword($user,'mpDonatien'));
        $manager->persist($user);
        
        $manager->flush();
    }
}
