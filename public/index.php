<?php
[// public/index.php

require_once '../app/models/Database.php';
require_once '../app/models/Room.php';
require_once '../app/models/Host.php';
require_once '../app/models/Client.php';
require_once '../app/controllers/RoomController.php';
require_once '../app/controllers/HostController.php';
require_once '../app/controllers/ClientController.php';

// Simple routing
if (_SERVER['REQUEST_METHOD'] === 'GET'){ 
    if (isset(_GET['action']) && _GET['action'] === 'createRoom'){

        roomController = new RoomController();
        roomController->createRoom('Room 1', 1);
    }
     else {
        roomController = new RoomController();
        rooms =roomController->showRooms(1); // Example: get rooms for host with ID 1
        include '../app/views/room.php';
    }
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="asset/css/fontawesome.css">
    <link rel="stylesheet" href="asset/css/all.css">
    <title>Landing page</title>
</head>
<body>
    
    <header>
        <div class="container">
            <div class="header-wrap">
                <div class="header-item logo">
                    Line - Up
                </div>
                <div class="header-item">
                    <div class="sub"><a href="">Acceuil</a></div>
                    <div class="sub"><a href="login.html">Connexion</a></div>
                    <div class="sub"><a href="login.html">Inscription</a></div>
                    
                </div>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <div class="hero-wrap">
                <div class="hero-item">

                    <h1 class="title">En File...</h1>
                    <p>Une Solution pour toutes vos problèmes de gestion des fils d'attente.</p>
                    <button>Inscrivez Vous</button>
        
                </div>
        
                <div class="hero-item image">
                    <img src="hero.png" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>

    <section class="infos">

        <div class="container">
            <h1>Profitez de Nos Solutions.</h1>
            <div class="infos-wrap">
                <div class="infos-item">
                    <div class="icon"><i class="fas fa-clock"></i></div>
                    <p class="description">Optimisez votre temps grâce à notre gestion des files d'attente en temps réel.</p>
                </div>
        
                <div class="infos-item">
                    <div class="icon"><i class="fas fa-user-check"></i></div>
                    <p class="description">Améliorez l'expérience client avec des notifications instantanées.</p>
                </div>
        
                <div class="infos-item">
                    <div class="icon"><i class="fas fa-chart-line"></i></div>
                    <p class="description">Accédez à des rapports détaillés et analysez les données de fréquentation.</p>
                </div>
        
                <div class="infos-item">
                    <div class="icon"><i class="fas fa-mobile-alt"></i></div>
                    <p class="description">Utilisez notre application mobile pour gérer les files d'attente à distance.</p>
                </div>
            </div>
        </div>
        

    </section>

    <section class="quote">
        <div class="container">
            <p class="the-quote"><em>"La meilleure des qualités de service est de faire en sorte que le client ne se rende même pas compte qu'il a attendu."</em></p>
            <p class="author"><strong>- Richard Branson, Fondateur de Virgin Group</strong></p>
        </div>
    </section>
    

    <section class="action">
        <div class="container">
            <div class="action-wrap">
                <div class="action-text">
                    <h3 class="action-title">N'attendez Plus ! Profitez de notre Solution Maintenant !</h3>
                    <p class="action-body">
                        Connectez-vous et ne manquez plus rien !
                    </p>
                </div>
                <button class="ghost">Connexion</button>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p class="copyright">
                Copyright &copy; XP Tech LTE 2024
            </p>
        </div>
    </footer>

</body>
<script src="app.js"></script>
</html>