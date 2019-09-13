<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 11.09.2019
 * Time: 16:26
 */

// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class IndexController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('main.html.twig');
    }
}
