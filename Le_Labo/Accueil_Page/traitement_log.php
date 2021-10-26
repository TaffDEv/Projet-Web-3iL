<?php
session_start();

  $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');

  $user = htmlspecialchars($_POST['user']);
  $mdp =  sha1($_POST['mdp']);

  if(!empty($user) or !empty($mdp)){

      $temp1=$bdd->prepare("SELECT * FROM users WHERE name=?");
        $temp1->execute([$user]);

        if($temp1->rowCount() == 1) {
                $user = $temp1->fetch();

                $user_id = $user['id'];
                $user_name = $user['name'];
                $user_mdp = $user['password'];

                if($mdp == $user_mdp){
                    
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['user_name'] = $user_name;
                    $_SESSION['user_mdp'] = $user_mdp;
                    
                    header('location:Accueil_labo_V2.php');

                } else {
                    echo "Mot de passe incorrecte";
                }
                
        } else{
            echo "Utilisateur non trouvé";
        }

  }

  else {	
	
    header('location:Accueil_labo_V1.1.php?error=Elements manquant');
}


?>