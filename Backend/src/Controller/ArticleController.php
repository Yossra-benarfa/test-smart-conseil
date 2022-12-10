<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;

 
/**
 * @Route("/api", name="api_")
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article_index", methods={"GET"})
     */
    public function index(): Response
    {
        $articles = $this->getDoctrine()
            ->getRepository(article::class)
            ->findAll();
 
        $data = [];
 
        foreach ($articles as $article) {
           $data[] = [
                    'id' => $article -> getId(),
                    'title' => $article -> getTitle(),
                    'image' => $article -> getImage(),
                    'headerImage' => $article -> getHeaderImage(),
                    'introduction' => $article -> getDescription(),
                    'description' => $article -> getdescription(),
                    'lastMod' => $article -> getLastMod(),
                    'language' => $article -> getLanguage(),
                    'keyWords' => $article -> getKeyWords(),
                    'state' => $article -> getState(),
                    'numVisit' => $article -> getNumVisit(),
                    'itTheme' => $article -> getItTheme(),
                    'idUser' => $article -> getIdUser(),
                    'idHost' => $article -> getIdHost(),
           ];
        }
        $response = new Response();
        $response->setContent(json_encode($data));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
 
    }
 
    /**
     * @Route("/article", name="article_new", methods={"POST"})
     */
    public function new(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
 
        $article = new Article();
        $article->setName($request->request->get('image'));
        $article->set($request->request->get('title'));
 
        $entityManager->persist($article);
        $entityManager->flush();
 
        return $this->json('Created new article successfully with id ' . $article->getId());
    }
}
