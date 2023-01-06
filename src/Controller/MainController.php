<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

    #[Route('/main', name: 'main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/welcome/{name?}", name="welcome")
     */ 
    public function welcome(Request $request, $name)
    {
        $randNr = random_int(0,10000);
        return new Response('<h1>Welcome ' .$name .'. Ihre Wartenummer lautet ' .$randNr .'</h1>');
    }
}
