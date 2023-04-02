<?php

namespace App\Controller;

use App\Form\ArticleEditFormType;
use DateTime;
use App\Service\WordCounter;
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

    #[Route('/', name: 'home', methods:'GET')]
    public function list(ArticleRepository $articleRepository, WordCounter $counter): Response
    {
        $counter = new WordCounter();
         $articles = $articleRepository->findAll();
         usort($articles, function($a, $b) {
            if ($a->getUpdatedAt() > $b->getUpdatedAt()) {
                return -1;
            } elseif ($a->getUpdatedAt() < $b->getUpdatedAt()) {
                return 1;
            } else {
                return 0;
            }
        }); 

        return $this->render('pages/index.html.twig', [
            'articles' => $articles,
            'counter' => $counter
        ]);
    }

    #[Route('view/article/{id}', name: 'article_view', methods:'GET')]
    public function view(ManagerRegistry $doctrine, WordCounter $counter, int $id): Response
    {
        $counter = new WordCounter();
        $entityManager = $doctrine->getManager();
        $article = $entityManager->getRepository(Article::class)->find($id);

        return $this->render('pages/view.html.twig', [
            'article' => $article,
            'counter' => $counter
        ]);
    }
    #[Route('edit/article/{id}', name: 'article_edit')]
    public function edit(Request $request, ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();

        $article = $entityManager->getRepository(Article::class)->find($id);
        
        $now = new \DateTime();
        $form = $this->createForm(ArticleEditFormType::class, $article);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $editedArticle = $form->getData();
            $editedArticle->setUpdatedAt($now);
            $entityManager->persist($editedArticle);
            $entityManager->flush();
            return $this->redirectToRoute('home');
        }

        return $this->render('pages/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView()
        ]);
    }
   

        
}