<?php

namespace App\DataFixtures;

use App\Entity\Visit;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class VisitF extends Fixture implements DependentFixtureInterface
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $Visit = new Visit();
        $Visit->setPatient($this->getReference(PatientF::PATIENT1));
        $Visit->setDentist($this->getReference(DentistF::DENTIST1));
        $visitStart = new \DateTime('tomorrow');
        $visitEnd = (clone $visitStart)->modify('+30 minutes');
        $Visit->setStartDate($visitStart);
        $Visit->setEndDate($visitEnd);

        $manager->persist($Visit);
        $manager->flush();
    }

    public function getDependencies()
    {
        return [DentistF::class, PatientF::class];
    }
}
