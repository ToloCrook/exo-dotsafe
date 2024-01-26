<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchbarController extends AbstractController
{
    #[Route('/searchbar', name: 'app_searchbar')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $search = $request->get('search');
        $dql = "SELECT t FROM App\Entity\Todo t WHERE t.name LIKE :search";

        $query = $em->createQuery($dql);
        $query->setParameter('search', '%' . $search . '%');

        $result = $query->getResult();

        return $this->render('searchbar/index.html.twig', [
            'todos' => $result,
        ]);
    }
}
