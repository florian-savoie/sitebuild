<?php
session_start();
require('actions/database.php');

//Validation du formulaire
if(isset($_POST['validate'])){

    //Vérifier si l'user a bien complété tous les champs
    if(!empty($_POST['pseudo']) AND !empty($_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($_POST['password'])){
        
        //Les données de l'user
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_lastname = htmlspecialchars($_POST['lastname']);
        $user_firstname = htmlspecialchars($_POST['firstname']);
        $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        //Vérifier si l'utilisateur existe déjà sur le site
        $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
        $checkIfUserAlreadyExists->execute(array($user_pseudo));

        if($checkIfUserAlreadyExists->rowCount() == 0){
            
            //Insérer l'utilisateur dans la bdd partie users 
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(pseudo, nom, prenom, mdp)VALUES(?, ?, ?, ?)');
            $insertUserOnWebsite->execute(array($user_pseudo, $user_lastname, $user_firstname, $user_password));

                        //Récupérer les informations de l'utilisateur
            $getInfosOfThisUserReq = $bdd->prepare('SELECT id, pseudo, nom, prenom FROM users WHERE nom = ? AND prenom = ? AND pseudo = ?');
            $getInfosOfThisUserReq->execute(array($user_lastname, $user_firstname, $user_pseudo));

            $usersInfos = $getInfosOfThisUserReq->fetch();

            //Authentifier l'utilisateur sur le site et récupérer ses données dans des variables globales sessions
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $usersInfos['id'];
            $_SESSION['lastname'] = $usersInfos['nom'];
            $_SESSION['firstname'] = $usersInfos['prenom'];
            $_SESSION['pseudo'] = $usersInfos['pseudo'];
            $minesdor = 1 ;
            $centralelec = 1 ;
            $idcentralelec = 4 ;
            $idpuitpetrol = 2 ;
            $idmineberium = 3 ;
        
            //Insérer les ressources de lutilisateur  dans la bdd ressource_player
            $insertUserRessources = $bdd->prepare('INSERT INTO ressource_player (id)VALUES(?)');
            $insertUserRessources->execute(array($usersInfos['id']));


            //Insérer mines d'or  de batiments  dans la bdd batimentproductionplayer
            $insertUserRessources = $bdd->prepare('INSERT INTO batimentproductionplayer (idBatiment,nombresBat,id_player)VALUES(?,?,?)');
            $insertUserRessources->execute(array($minesdor,$minesdor,$usersInfos['id']));

            //Insérer central elect    dans la bdd batimentproductionplayer
            $insertUserRessources = $bdd->prepare('INSERT INTO batimentproductionplayer (idBatiment,nombresBat,id_player)VALUES(?,?,?)');
            $insertUserRessources->execute(array($idcentralelec,$centralelec,$usersInfos['id']));

            //Insérer central elect    dans la bdd batimentproductionplayer
            $insertUserRessources = $bdd->prepare('INSERT INTO batimentproductionplayer (idBatiment,id_player)VALUES(?,?)');
            $insertUserRessources->execute(array($idpuitpetrol,$usersInfos['id']));
            //Insérer central elect    dans la bdd batimentproductionplayer
            
            $insertUserRessources = $bdd->prepare('INSERT INTO batimentproductionplayer (idBatiment,id_player)VALUES(?,?)');
            $insertUserRessources->execute(array($idmineberium,$usersInfos['id']));



            //Rediriger l'utilisateur vers la page d'accueil
            header('Location: index.php');

        }else{
            $errorMsg = "L'utilisateur existe déjà sur le site";
        }

    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }

}