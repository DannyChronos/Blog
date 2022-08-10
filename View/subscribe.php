<?php
function filter(string $word)
{
   return htmlentities(htmlspecialchars($word));
}

if(isset($_POST['btn']))
{

$nom=filter($_POST['firstname']);
$prenom =filter($_POST['lastname']);
$email =filter($_POST['email']);
$password =filter($_POST['password']);
$password_conf = filter($_POST['password-repeat']);

if($password==$password_conf)
{
$hash = password_hash($password,PASSWORD_DEFAULT);
 $db= new PDO("mysql:host=localhost;dbname=data_db","dayanechronos","#cortana4002");
$request= $db->prepare("insert into users(nom,prenom,email,password) values(?,?,?,?)");
$request->execute([$nom,$prenom,$email,$hash]);

header('location:./login.php');

}
else 
{
    echo'Mot de passe invalide';
}
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Subscribe</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body>
    <div class="register-photo">
        <div id="subscribe" class="form-container" style="width: 90%;">
            <div class="image-holder"></div>
            <form method="post" action="">
                <h2 class="text-center" style="font-family: Amaranth, sans-serif;font-weight: bold;"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="text" name="firstname" placeholder="Firstname"></div>
                <div class="form-group"><input class="form-control" type="text" name="lastname" placeholder="Lastname"></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="font-weight: bold;" name="btn">Sign Up</button></div><a class="already" href="./login.php"style="font-family: Amaranth, sans-serif;font-weight: bold;">You already have an account? Login here.</a>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>