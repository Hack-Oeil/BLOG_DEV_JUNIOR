<?php
 
namespace App\Controller;

use Yoop\AbstractController;

use App\Repository\UserRepository;

class AuthController extends AbstractController
{
    public function auth() 
    {  
        if (isset($_SESSION['user'])) {
            header('Location: profile.php');
            exit;
        }
        return $this->render('auth');
    }

    public function authProcess() 
    {  
        if (isset($_SESSION['user'])) {
            header('Location: profile.php');
            exit;
        }
        $repo = new UserRepository();
        $pdo = $repo->getPDO();
        $username = trim($_POST['username'] ?? '');
        $password = trim($_POST['password'] ?? '');

        // SHA1 sur le mot de passe
        $password_hashed = sha1($password);

        // Requête préparée pour éviter les injections SQL
        $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
        $stmt->bindParam(':username', $username, \PDO::PARAM_STR);
        $stmt->bindParam(':password', $password_hashed, \PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(\PDO::FETCH_ASSOC);

        if ($user) {
            $_SESSION['user'] = $user;
            header('Location: profile.php');
            exit;
        } else {
            return $this->render('auth', ['message' => 'Identifiants incorrects.']);
        }
    }

    public function deconnect() 
    {
        $_SESSION = [];
        session_destroy();
        header('Location: index.php');
        exit;
    }
}