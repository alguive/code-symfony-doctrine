<?php

namespace App\Controller;

use App\Entity\Starship;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function homepage(
        EntityManagerInterface $entityManager,
    ): Response {
//        $ships = $entityManager->createQuery('select s from App\Entity\Starship s')->getResult();
        $ships = $entityManager->createQueryBuilder()
            ->select('s')
            ->from(Starship::class, 's')
            ->getQuery()
            ->getResult();

        $myShip = $ships[array_rand($ships)];

        return $this->render('main/homepage.html.twig', [
            'myShip' => $myShip,
            'ships' => $ships,
        ]);
    }
}
