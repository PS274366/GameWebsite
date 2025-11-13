<?php
    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class LoginRouter extends AbstractController 
    {
        #[Route('/api/login', name: 'login', methods: ['POST', 'OPTIONS'])]
        public function login(Request $request): Response
        {
            $response = new Response();
            $response->headers->set('Content-Type','application/json');
            $response->headers->set('Access-Control-Allow-Origin', 'http://127.0.0.1:8080');
            $response->headers->set('Access-Control-Allow-Methods', 'POST, OPTIONS');
            $response->headers->set('Access-Control-Allow-Headers', 'Content-Type');
            $response->setStatusCode(Response::HTTP_OK);


            $response->setContent($request->getContent());
            return $response;
        }
    }