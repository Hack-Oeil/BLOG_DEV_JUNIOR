<?php
 
namespace App\Controller;

use Yoop\AbstractController;

use App\Repository\ArticleRepository;

class HomeController extends AbstractController
{
/* modele pour flag
    public function print() 
    {  
        $user = $this->getUser();
        if($user) {
            if($this->isSecretData($user->getUsername(),'3a527111aa1aff992')) {
                $flag = $this->getFlag();
            }
        }
        return $this->render('home', ['flag' => $flag??null]);
    }
*/

    public function print() 
    {  
        $repo = new ArticleRepository();
        $pdo = $repo->getPDO();
        $search = $_GET['search']??"";
        if (!empty($search) && trim($_GET['search']) !== '') {
            // ⚠️ Requête volontairement vulnérable pour le challenge
            $stmt = $pdo->query("SELECT * FROM articles WHERE title LIKE '%$search%'");
        } else {
            // Afficher tous les articles si aucune recherche
            $stmt = $pdo->query("SELECT * FROM articles ORDER BY id DESC");
        }
        $results = $stmt->fetchAll();
        
        return $this->render('home', [
            "search"    => $search,
            "results"   => $results
        ]);
    }
}