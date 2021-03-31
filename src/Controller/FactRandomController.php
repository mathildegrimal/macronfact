<?php

namespace App\Controller;

use App\Entity\Facts;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FactRandomController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/fact/random", name="fact_random")
     */
    public function index(): Response
    {

        $random = rand(1, 21);
        
        
        $fact = $this->entityManager->getRepository(Facts::class)->findOneBy([
            'id' => $random
        ]);

        // dd($fact);

        return $this->render('fact_random/index.html.twig', [
            'fact' => $fact
        ]);
    }
}
