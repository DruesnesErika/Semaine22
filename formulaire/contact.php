<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Jarditou" content="Jarditou" />
    <title>Jarditou</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <img src="images/jarditou_logo.jpg" class=img-fluid alt="Logo Jarditou" title="Logo Jarditou" width="200px">
            </div>
            <div class="col-lg-4 ">
                <p class="fs-2 text-center">Tout le jardin</p>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Jarditou.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tableau.html">Tableau</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contact.html">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Votre promotion" aria-label="Votre promotion">
                    <button class="btn btn-outline-success" type="submit">Recherche</button>
                </form>
            </div>
        </nav>
        <img src="images/promotion.jpg" class=img-fluid alt="Promotion" title="Promotion" width="100%">
        <p>*Ces zones sont obligatoires</p>
        <form action="script.php" method="POST">
            <legend class="h2">Vos coordonn&eacute;es</legend>
            <div class="row g-3">
                <label for="nom">Nom*</label><input type="text" class="form-control" name="nom" id="nom" placeholder="Veuillez saisir votre nom" required title="Entrez votre nom (que des caractères entre a et z)"><span id="missNom"></span><br>
                <?php 
    if ( isset($_GET["erreur"]) && $_GET["erreur"] == "nom") 
    {
        echo"Le nom doit être renseigné.";  
    }
    ?> 
                <label for="prenom">Pr&eacute;nom*</label><input type="text" class="form-control" name="prenom" id="prenom" placeholder="Veuillez saisir votre pr&eacute;nom" required title="Entrez votre pr&eacute;nom (que des caractères entre a et z)">
                <span id="missPrenom"></span><br>
                <?php 
    if ( isset($_GET["erreur"]) && $_GET["erreur"] == "prenom") 
    {
        echo"Le prénom doit être renseigné.";  
    }
    ?> 
                <p>Sexe*</p>
                <input id="feminin" type="radio" name="sexe" value="Feminin" class="form-check-input"> F&eacute;minin
                <input id="masculin" type="radio" name="sexe" value="Masculin" class="form-check-input"> Masculin
                <input id="neutre" type="radio" name="sexe" value="Neutre" class="form-check-input"> Neutre
                <br><span id="missSexe"></span><br>
                <?php 
    if ( isset($_GET["erreur"]) && $_GET["erreur"] == "sexe") 
    {
        echo"Le sexe doit être renseigné.";  
    }
    ?> 
                <label for="date">Date de Naissance*</label><input type="date" class="form-control" name="ddn" id="date" required title="Entrez votre date de naissance"><span id="missDate"></span><br>
                <?php 
    if ( isset($_GET["erreur"]) && $_GET["erreur"] == "ddn") 
    {
        echo"La date de naissance doit être renseignée.";  
    }
    ?> 
                <label for="codepostal">Code postal*</label><input type="text" class="form-control" name="codepostal" id="codepostal" required title="Entrez votre code postal"><span id="missCodepostal"></span><br>
                <?php 
    if ( isset($_GET["erreur"]) && $_GET["erreur"] == "codepostal") 
    {
        echo"Le codepostal doit être renseigné.";  
    }
    ?> 
                <label for="adresse">Adresse</label><input type="text" class="form-control" name="adresse" id="adresse"><br>
       
                <label for="ville">Ville</label><input type="text" class="form-control" name="ville" id="ville"><br>
                

                <label for="email">Email*</label><input type="text" class="form-control" name="email" id="email" placeholder="dave.loper@afpa.fr" required title="Entrez votre adresse email"><span id="missEmail"></span>
                <?php 
    if ( isset($_GET["erreur"]) && $_GET["erreur"] == "email") 
    {
        echo"L'email doit être renseigné.";  
    }
    ?> 
            </div>
            <br>
            <legend class="h2">Votre demande</legend>
            <p>Sujet*</p>
            <select class="form-select" id=selector aria-label="Default select example">
            <option disabled selected>Veuillez sélectionner un sujet</option>
            <option value="commande">Mes commandes</option>
            <option value="question">Question sur un produit</option>
            <option value="reclamation">R&eacute;clamation</option>
            <option value="autres">Autres</option>
          </select><span id="missSelector"></span>
            <br>
            <p>Votre question*:</p>
            <div class="form-floating">
                <textarea class="form-control" name="messagetext" id="floatingTextarea2" style="height: 100px"></textarea>
            </div><span id="missFloatingTextarea2"></span>
            <?php 
    if ( isset($_GET["erreur"]) && $_GET["erreur"] == "messagetext") 
    {
        echo"Le message doit être renseigné.";  
    }
    ?> 
            <br>
            <input type="checkbox" id=checkbox value="J'accepte le traitement informatique de ce formulaire." required title="Cochez cette case pour continuer"> *J'accepte le traitement informatique de ce formulaire
            <br><span id="missCheckbox"></span><br>
            <input type="submit" class="btn btn-dark" href="#" id=boutonenvoi value="Envoyer">
            <input type="reset" class="btn btn-dark" href="#" value="Annuler">
        </form>
        <br>
        <br>
        <footer>
            <ul class="nav bg-dark" style="margin:auto">
                <li class="nav-item text-muted">
                    <a class="nav-link text-reset" href="#">mention légales</a>
                </li>
                <li class="nav-item text-muted">
                    <a class="nav-link text-reset" href="#">horaires</a>
                </li>
                <li class="nav-item text-muted">
                    <a class="nav-link text-reset" href="#">plan du site</a>
                </li>
            </ul>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="jarditoucontact.js"></script>
</body>

</html>