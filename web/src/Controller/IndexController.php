<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; // Use Annotation instead of Attribute if using annotations
use Doctrine\ORM\EntityManagerInterface;

class IndexController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $connection = $entityManager->getConnection();
        $databaseName = $connection->getDatabase();
        // dd($connection);
        return $this->render('home/index.html.twig', ["connection" => $connection, "dbname" => $databaseName]);
    }
}
