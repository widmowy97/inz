<?php

namespace App\DataFixtures;

use App\Entity\Dentist;
use App\Entity\Patient;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class DentistF extends Fixture implements DependentFixtureInterface
{
    private $passwordEncoder;

    public const DENTIST1 = 'Dentist Justyna Wrona';

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $dentist = new Dentist();
        $dentist->setRoles(['ROLE_USER', 'ROLE_DENTIST']);
        $dentist->setEmail('dentist@doctor.com');
        $dentist->setPassword($this->passwordEncoder->encodePassword($dentist, 'pass'));
        $dentist->setFirstName('Justyna');
        $dentist->setLastName('Wrona');
        $dentist->setSpecialization($this->getReference(SpecializationF::REF_KANALOWE));

        $manager->persist($dentist);
        $manager->flush();

        $this->addReference(self::DENTIST1, $dentist);
    }

    public function getDependencies()
    {
        return [SpecializationF::class];
    }

}
