<?php

namespace App\Controller;

use App\T1;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    public function __construct(private T1 $class)
    {
    }

    #[Route('/', 'index')]
    public function index(): Response
    {
        return new Response('OK');
    }
}