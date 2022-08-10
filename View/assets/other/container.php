<?php
    session_start();
    $database=new PDO("mysql:host=localhost;dbname=data_db","dayanechronos","#cortana4002");
   $affichage=$database->query("select * from article,users where id_article='".$_SESSION['id_article']."'");
    $article=$affichage->fetch();
    if($article){
    $_SESSION["image"]=$article["image"];
    $_SESSION["nom_image"]=$article["nom_image"];
    $_SESSION["titre"]=$article["titre"];
    $_SESSION["soustitre"]=$article["soustitre"];
    $_SESSION["contenu"]=$article["contenu"];
    $_SESSION["date"]=$article["date_article"];
    } 
?>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i">
 <header class="masthead" style="background-image:url('./upload/<?=$_SESSION['nom_image'];?>');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="post-heading">
                        <h1><?=($_SESSION["titre"]);?></h1>
                        <h2 class="subheading"><?=($_SESSION["soustitre"]);?></h2><span class="meta">Posted by&nbsp;<a href="acceuil.php"><?=($_SESSION["user"]);?></a>&nbsp;on <?=($_SESSION["date"]);?></span></div>
                </div>
            </div>
        </div>
    </header>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto" style="font-family: Amaranth, sans-serif;">
                    <?=($_SESSION["contenu"]);?>
                </div>
            </div>
        </div>
    </article>