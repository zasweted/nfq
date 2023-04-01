<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/article/{id}', name: 'article_view')]
    public function view(Article $article): Response
    {
        return $this->render('pages/view.html.twig', [
            'article' => $article,
        ]);
    }
    #[Route('/article/{id}', name: 'article_edit')]
    public function edit(Article $article): Response
    {
        return $this->render('pages/edit.html.twig', [
            'article' => $article,
        ]);
    }
    #[Route('/article/{id}', name: 'article_update')]
    public function update(Article $article): Response
    {
        return $this->render('pages/view.html.twig', [
            'article' => $article,
        ]);
    }
}