<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Acceuil</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/untitled.css">
</head>

<body>
    <?php include"assets/other/nav.php";?>

    <header class="masthead" style="background-image:url('./assets/img/8788.png');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading">
                        <h1 style="font-family: Amaranth, sans-serif;">Bienvenue <?=($_SESSION["user"]);?></h1><span class="subheading"><button class="btn btn-primary btn-block" id="create" onclick="openForm()" type="button" style="font-weight: bold;" name="btn">Creer un Post</button></span>
                        <?php include"assets/other/popup.php";?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8">    
                <?php
                  if(isset($_POST['button'])){
                     session_start();
                    $database=new PDO("mysql:host=localhost;dbname=data_db","dayanechronos","#cortana4002");
                    $request_1=$database->query("select * from article where id='".$_SESSION['identify']."' order by id_article desc");
                    
                    while($art=$request_1->fetch()) {
                        $_SESSION['title']=$art["titre"];
                        $_SESSION['subtitle']=$art['soustitre'];
                ?>
                    <div class="post-preview" style="font-family: Lora, sans-serif;">
                        <h2 class="post-title"><?=($art["titre"])?></h2>
                        <h4 class="post-subtitle"><?=($art["soustitre"])?></h4>
                    <p class="post-meta">Posted by <?= $_SESSION['user']?> ;Start on <?=($art["date_article"])?></p>
                </div>
                <form action="" method="post">
                 <div class="btn-group" role="group" style="width: 200px;">
                    <button class="btn btn-primary buton1" type="submit" style="background-color: blue;height:50px;" name="bouton1">Voir+</button>
                    <button class="btn btn-primary buton1" type="submit" style="margin-left: 10%;background-color: green;height:50px;" name="bouton2">Modifier</button>
                    <button class="btn btn-primary buton1" type="submit" style="margin-left: 10%;background-color: red;height:50px;" name="bouton3">Supprimer</button>
                </div>
                </form>
                <hr>
                <?php 
                }
                $count++;
                array_push($tab,$count);
                $_SESSION['tab']=$tab;
                }
                elseif (!isset($_POST['button'])) {
                     $database=new PDO("mysql:host=localhost;dbname=data_db","dayanechronos","#cortana4002");
                    $request_1=$database->query("select * from article where id='".$_SESSION['identify']."' order by id_article desc");
                    while($art=$request_1->fetch()) {
                        $_SESSION['title']=$art["titre"];
                        $_SESSION['subtitle']=$art['soustitre'];
                ?>
                    <div class="post-preview" style="font-family: Lora, sans-serif;">
                        <h2 class="post-title"><?=($art["titre"])?></h2>
                        <h4 class="post-subtitle"><?=($art["soustitre"])?></h4>
                    <p class="post-meta">Posted by <?= $_SESSION['user']?> ;Start on <?=($art["date_article"])?></p>
                </div>
                <form action="" method="post">
                 <div class="btn-group" role="group" style="width: 200px;">
                    <button class="btn btn-primary buton1" type="submit" style="background-color: blue;height:50px;" name="bouton1">Voir+</button>
                    <button class="btn btn-primary buton1" type="submit" style="margin-left: 10%;background-color: green;height:50px;" name="bouton2">Modifier</button>
                    <button class="btn btn-primary buton1" type="submit" style="margin-left: 10%;background-color: red;height:50px;" name="bouton3">Supprimer</button>
                </div>
                </form>
                <hr>
                <?php 
                }
                }
                ?>
            </div>
            
        </div>
    </div>
    <?php include"assets/other/footer.php";?> 

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/clean-blog.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>