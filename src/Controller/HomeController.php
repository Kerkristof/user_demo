<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UsersRepository;

class HomeController extends AbstractController
{

    /**
     * [index description]
     * @Route("/", name="app_home")
     * @param  UsersRepository $users_repo [description]
     * @return Response                    [description]
     */
    public function index(UsersRepository $users_repo): Response
    {
        $users = $users_repo->findAll();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'users' => $users,
        ]);
    }
}
