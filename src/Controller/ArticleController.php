<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/article', name: 'app_article')]
    public function index(Request $request): Response
    {
        $article = new Article();
        $article->setTitle('First Article in this Tutorial'); 

        $em = $this->getDoctrine()->getManager();
        // write one variable into DB
        //$em->persist($article);
        //$em->flush();

        // read one entry from DB into a variable
        
        $getArticle = $em->getRepository(Article::class)->findOneBy([
            'id' => 1
        ]);
        

        // delete one entry (pointed to by a variable) from DB
        $em->remove($getArticle);
        $em->flush();

        //return new Response("Artikel wurde angelegt");
        
        return $this->render('article/index.html.twig', [
            'article' => $getArticle,
        ]);
        
    }
}
