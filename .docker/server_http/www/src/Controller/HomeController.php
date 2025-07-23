<?php
 
namespace App\Controller;

use Yoop\AbstractController;

use App\Repository\ArticleRepository;

class HomeController extends AbstractController
{
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
            "results"   => $results, 
            'user'      => $_SESSION['user']??null
        ]);
    }
}