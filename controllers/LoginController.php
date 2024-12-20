<?php

class LoginController {
    public function showLoginForm() {
        // Affiche le formulaire de connexion
        include('../app/views/login.php');
    }

    public function handleLogin() {
        // Récupérer les données du formulaire
        email =_POST['email'];
        password =_POST['password'];

        // Appel à la classe Auth pour vérifier les informations de connexion
        auth = new Auth();user = auth->login(email, password);
    }
        if (user) {
   $_SESSION['user_id'] =user['id'];
            _SESSION['role'] =user['role'];
            header('Location: /');
            exit;
        } else {
            error = "Email ou mot de passe incorrect.";
            include('../app/views/login.php'); // Renvoyer à la vue avec l'erreur
        }

}
 
