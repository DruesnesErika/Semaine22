<?php
$prenom = $_POST['prenom'];  
$nom = $_POST['nom'];  
$sexe = $_POST['sexe'];  
$ddn = $_POST['ddn'];  
$codepostal = $_POST['codepostal'];   
$email = $_POST['email'];  
$messagetext = $_POST['messagetext'];

if (empty($_POST["prenom"]) )
{       
    header("Location:contact.php?erreur=prenom");
    exit;
} 

if (empty($_POST["nom"]) )
{
    header("Location:contact.php?erreur=nom");
    exit;
} 

if (empty($_POST["sexe"]) )
{       
    header("Location:contact.php?erreur=sexe");
    exit;
} 

if (empty($_POST["ddn"]) )
{
    header("Location:contact.php?erreur=ddn");
    exit;
} 

if (empty($_POST["codepostal"]) )
{       
    header("Location:contact.php?erreur=codepostal");
    exit;
} 

if (empty($_POST["email"]) )
{
    header("Location:contact.php?erreur=email");
    exit;
} 

if (empty($_POST["messagetext"]) )
{
    header("Location:contact.php?erreur=messagetext");
    exit;
} 

?>