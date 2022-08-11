<?php
function subscribe($nom,$prenom,$email,$hash){
$db= new PDO("mysql:host=localhost;dbname=data_db","dayanechronos","#cortana4002");
$request= $db->prepare("insert into users(nom,prenom,email,password) values(?,?,?,?)");
$request->execute([$nom,$prenom,$email,$hash]);}