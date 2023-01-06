<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewController extends AbstractController
{
    #[Route('/view', name: 'app_view')]
    public function index(): Response
    {

        $wochentag = date("l");

        $example_user = [
            'name'          => 'Frank',
            'nachname'      => 'Meier',
            'Geburtsdatum'  => '12.08.1968'
        ];    

        $example_array = array("Porsche","BMW","Mercedes","Ferari","Fiat");

        return $this->render('view/index.html.twig', [
            'date' => $wochentag,
            'user' => $example_user,
            'arr' => $example_array,
        ]);
    }
}
