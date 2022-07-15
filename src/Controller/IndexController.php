<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function index(): Response
    {
        $username = "Guest";
        if ($this->getUser()) {
            $username = $this->getUser()->getUsername();
        }
        return $this->render('index/index.html.twig', [
            'user_name' => $username,
        ]);

    }
}
