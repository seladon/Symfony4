<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LessonsController extends AbstractController
{
    /**
     * @Route("/lessons", name="lessons")
     */
    public function index()
    {
        return $this->render('lessons/index.html.twig', [
            'controller_name' => 'LessonsController',
        ]);
    }
}
