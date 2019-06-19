<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController {

  /**
     * @Route("/", name="homepage", methods={"GET"})
     */
    public function getHomepage() {
      return $this->render('homepage.html.twig', []);
  }


  /**
     * @Route("/", name="save", methods={"POST"})
     */
    public function savePost(Request $request) {
      $post = new Post();
      $post->setUsername($request->request->get('username'));
      $post->setContent($request->request->get('content'));

      $entityManager = $this->getDoctrine()->getManager();
      $entityManager->persist($post);
      $entityManager->flush();

      return new Response('', 204);
  }





}


?>