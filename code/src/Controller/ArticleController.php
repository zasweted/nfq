<?php

namespace App\Controller;

use DateTime;
use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class ArticleController extends AbstractController
{

    public function __construct()
    {
        $this->req = Request::createFromGlobals();
    }


    #[Route('/', name: 'home', methods:'GET')]
    public function list(ArticleRepository $articleRepository): Response
    {
              
        return $this->render('pages/index.html.twig', [
            'articles' => $articleRepository->findAll()
        ]);
    }

    #[Route('view/article/{id}', name: 'article_view', methods:'GET')]
    public function view(ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $article = $entityManager->getRepository(Article::class)->find($id);

        return $this->render('pages/view.html.twig', [
            'article' => $article,
        ]);
    }
    #[Route('edit/article/{id}', name: 'article_edit', methods:'GET')]
    public function edit(ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $article = $entityManager->getRepository(Article::class)->find($id);

        return $this->render('pages/edit.html.twig', [
            'article' => $article,
        ]);
    }
    #[Route('/article/{id}', name: 'article_update', methods:'POST')]
    public function update(ManagerRegistry $doctrine, int $id): Response
    {

        $now = new \DateTime();
        $entityManager = $doctrine->getManager();
            
        $article = $entityManager->getRepository(Article::class)->find($id);

        $article->setTitle($this->req->request->get('title'));
        $article->setImage($this->req->request->get('image'));
        $article->setText($this->req->request->get('text'));
        $article->setUpdatedAt($now);
            
            
        $entityManager->persist($article);
        $entityManager->flush();

        return $this->redirectToRoute('home');
    }

        
}