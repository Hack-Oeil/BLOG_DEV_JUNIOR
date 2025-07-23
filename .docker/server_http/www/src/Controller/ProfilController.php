<?php
 
namespace App\Controller;

use Yoop\AbstractController;

use App\Repository\ArticleRepository;

class ProfilController extends AbstractController
{
    public function profil1() 
    {  
        return $this->render('profil1', ['user' => $_SESSION['user']]);
    }

    public function profil2() 
    {
        return $this->render('profil2', ['user' => $_SESSION['user']]);
    }
}