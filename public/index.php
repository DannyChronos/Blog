<?php
    session_start();

    $requete=$_SERVER['REQUEST_URI'];

    if ($requete=='/subscribe') {
        require_once('../Controller/InscriptionController');
    }
    elseif ($requete=='/login') {
        require_once('../Controller/connectionController');
    }
    elseif ($requete=='/') {
        require_once('../View/index.php');
    }
    elseif ($requete=='/home') {
        require_once('../Controller/homeController');
    }
    elseif ($requete=='/post') {
        require_once('../View/post.php');
    }
    elseif ($requete=='/about') {
        require_once('../View/about.php');
    }
    elseif ($requete=='/contact') {
        require_once('../View/contact.php');
    }
    else {
        echo("Pages en cours");
    }