<?php

namespace App\DataFixtures;

use App\Entity\Patient;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class PatientF extends Fixture
{
    private $passwordEncoder;

    public const PATIENT1 = 'Patient Jan Kowalski';

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $patient = new Patient();
        $patient->setRoles(['ROLE_USER', 'ROLE_PATIENT']);
        $patient->setEmail('anithaly@gmail.com');
        $patient->setPassword($this->passwordEncoder->encodePassword($patient, 'pass'));
        $patient->setFirstName('Jan');
        $patient->setLastName('Kowalski');

        $manager->persist($patient);
        $manager->flush();

        $this->addReference(self::PATIENT1, $patient);
    }

}
