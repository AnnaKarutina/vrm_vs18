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


class IndexController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return new Response(
            '<html><body><h1>Booking App index page</h1></body></html>'
        );
    }
}
