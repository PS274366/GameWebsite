<?php

namespace App\Controller\Routers;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class LoginRouter extends AbstractController
{
    #[Route("/api/login", name: "login", methods: ["POST", "OPTIONS"])]
    public function login(Request $request): Response
    {
        $response = new Response();
        $response->headers->set("Access-Control-Allow-Origin","http://127.0.0.1:8080");
        $response->headers->set("Access-Control-Allow-Methods","POST, OPTIONS");
        $response->headers->set("Access-Control-Allow-Headers","Content-Type, Authorization");

        if ($request->getMethod() === "OPTIONS") {
            $response->setStatusCode(Response::HTTP_NO_CONTENT);
            return $response;
        }

        $response->setContent(json_encode(["response" => "Successfully logged in!"]));
        return $response;
    }
}