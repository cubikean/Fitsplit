<?php

namespace App\DataFixtures;

use App\Entity\Fitsplit;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{

    private UserPasswordHasherInterface $encoder;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
    }


    
    public function load(ObjectManager $manager): void
    {
       $fitsplit = new Fitsplit();
       $fitsplit->setSlogan("coucou les loulous");
       $fitsplit->setSiret("502384952396723");
       $fitsplit->setDescription("un site de fou pour le sport");
       $fitsplit->setPhone("0651100991");

       $manager->persist($fitsplit);
        $manager->flush();
        
    }
}
