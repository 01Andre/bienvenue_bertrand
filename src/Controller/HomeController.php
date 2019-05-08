<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

class HomeController extends AbstractController
{

    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $_SESSION['mdp'][] = $_POST['loginPassword'];
                $_SESSION['errors'][] = 'essai';
                if (isset($_SESSION['mdp'][2])) {
                    header('location:/Home/wcs');
                }
            }
            return $this->twig->render('Home/index.html.twig', ['session' => $_SESSION,]);
        }
    }


    public function wcs()

    {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (!isset($_SESSION['mdp'][2])) {
            header('location:/Home/index');
        }
        return $this->twig->render('Home/wcs.html.twig', ['session' => $_SESSION,]);
    }

    public function quizz()

    {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (!isset($_SESSION['mdp'][2])) {
            header('location:/Home/index');
        }
        return $this->twig->render('Home/kahoot.html.twig', ['session' => $_SESSION,]);
    }
}