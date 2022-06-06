<?php

namespace App\Controller;

use App\Repository\FitsplitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(FitsplitRepository $fitsplitRepository): Response
    {
        $fitsplit = $fitsplitRepository->findAll();

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'fitsplit' => $fitsplit,
        ]);
    }
}
