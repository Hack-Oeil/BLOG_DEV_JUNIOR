<?php
 
namespace App\Controller;

use Yoop\AbstractController;

use App\Repository\ArticleRepository;

class ApiController extends AbstractController
{
    public function print() 
    {  
        return $this->render('api');
    }

    public function process() 
    {  

        $username = trim($_POST['username'] ?? '');
        $password = trim($_POST['password'] ?? '');

        if ($username === 'sysuser' && $password === 'GGW3LLPL4Y3D') {
            $success = true;
            $message = 'Bien joué le flag est: '. $this->getFlag();;
        } else {
            $success = false;
            $message = 'Identifiants incorrects. Essayez encore.';
        }
        
        return $this->render('api', [
            'success'   => $success,
            'message'   => $message
        ]);
    }
}