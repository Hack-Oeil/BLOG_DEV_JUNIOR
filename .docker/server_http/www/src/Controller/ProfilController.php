<?php
 
namespace App\Controller;

use Yoop\AbstractController;

use App\Repository\ArticleRepository;

class ProfilController extends AbstractController
{
    public function profil1() 
    {  
        if (!isset($_SESSION['user'])) {
            header('Location: login.php');
            exit;
        }
        return $this->render('profil1', ['user' => $_SESSION['user']]);
    }

    public function profil2() 
    {
        if (!isset($_SESSION['user'])) {
            header('Location: login.php');
            exit;
        }
        return $this->render('profil2', ['user' => $_SESSION['user']]);
    }
}