<?php        
//si le bouton envoyer a été cliqué  
if (isset($_POST["envoyer"])){   
    //on recupère le nom  
    $nom = $_POST["nom"];  

    //on recupère l'adresse email  
    $email = $_POST["email"];      
    //on recupère l'objet du message  
    $objet = $_POST["objet"];  
    //on recupère le message  
    $message = $_POST["message"];  

    $to = "syhnes@gmail.com";      
    $headers = "From:" . $nom . "  " . $email;    
    //on envoie le message avec la fonction mail  
    $mailResult = mail($to,$objet,$message,$headers);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Confirmation d'envoi</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('sendbackground.png') no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .message-box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(122, 185, 184, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5.7px);
            -webkit-backdrop-filter: blur(5.7px);
            border: 1px solid rgba(122, 185, 184, 0.56);
            padding: 20px;
            border-radius: 15px; 
            text-align: center;
        }
        .retour-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px;
            background: rgba(122, 185, 184, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5.7px);
            -webkit-backdrop-filter: blur(5.7px);
            border: 1px solid rgba(122, 185, 184, 0.56);
            color: black;
            text-decoration: none;
            font-size: bold;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<?php if (isset($mailResult)): ?>
    <div class="message-box">
        <?php 
        if ($mailResult) {
            echo "Votre message est bien envoyé.";
        } else {
            echo "Une erreur s'est produite.";
        }
        ?>
        <br>
        <a href="https://www.david-chardon.fr" class="retour-btn">Retour à la page d'accueil</a>
    </div>
<?php endif; ?>
</body>
</html>
