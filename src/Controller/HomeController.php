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

    public function index()
    {
        if (empty($_SESSION)) {
            session_start();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $_SESSION['mdp'][] = $_POST['loginPassword'];
            $_SESSION['errors'][] = 'essai';
            if (isset($_SESSION['mdp'][2])) {
                header('location:/Home/wcs');
            }
        }
        return $this->twig->render('Home/index.html.twig', ['session' => $_SESSION,]);
    }


    public function wcs()
    {
        if (empty($_SESSION)) {
            session_start();
        }
        if (empty($_SESSION['mdp'][2])) {
            header('location:/Home/index');
        }
        return $this->twig->render('Home/wcs.html.twig', ['session' => $_SESSION,]);
    }

    public function quizz()
    {
        if (empty($_SESSION)) {
            session_start();
        }
        if (empty($_SESSION['mdp'][2])) {
            header('location:/Home/index');
        }
        return $this->twig->render('Home/kahoot.html.twig', ['session' => $_SESSION,]);
    }

    public function questions()
    {
        if (empty($_SESSION)) {
            session_start();
        }
        if (empty($_SESSION['mdp'][2])) {
            header('location:/Home/index');
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo 'OK';
        }
        return $this->twig->render('Home/questions.html.twig', ['session' => $_SESSION,]);
    }

    public function photos()
    {
        if (empty($_SESSION)) {
            session_start();
        }
        if (empty($_SESSION['mdp'][2])) {
            header('location:/Home/index');
        }
        return $this->twig->render('Home/photos.html.twig', ['session' => $_SESSION,]);
    }
    public function success()
    {
        if (empty($_SESSION)) {
            session_start();
        }
        return $this->twig->render('Home/success.html.twig', ['session' => $_SESSION,]);
    }
}
