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
        
        /*
        $roles[] = 'ROLE_ADMIN';

        $user->setEmail('adminTest@gmail.com');
        $user ->setRoles($roles);
        $user->setPassword($this->passwordEncoder->encodePassword($user,'mpTestAdmin'));

        $roles[] = 'ROLE_HOTLINER';

        $user->setEmail('hotlinerTest@gmail.com');
        $user ->setRoles($roles);
        $user->setPassword($this->passwordEncoder->encodePassword($user,'mpTestHotliner'));

        $roles[] = 'ROLE_COMMERCIAL';

        $user->setEmail('commercialTest@gmail.com');
        $user ->setRoles($roles);
        $user->setPassword($this->passwordEncoder->encodePassword($user,'mpTestCommercial'));
        */

        $manager->persist($user);
        
        $manager->flush();
    }
}
