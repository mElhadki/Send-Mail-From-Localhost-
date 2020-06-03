<?php

// isset button Commander 

if(isset($_POST['Commander'])){

    if(!empty($_POST["Produit"] && $_POST['Nom'] && $_POST['tel'] && $_POST['Ville'])){


        $message="";
        $to = "elhadkimariem3@gmail.com"; // this is your Email address
        $from = "elhadkimariem3@gmail.com"; // this is the sender's Email address
        $Nom = $_POST['Nom'];
        $tel= $_POST['tel'];
        $Ville= $_POST['Ville'];
        $Commande = implode("\n\n", $_POST['Produit']);
        $subject = "Commande";
        $message = "Client: " .$Nom . "\n\n Son Numéro : " . $tel . "\n\n Sa ville: " . $Ville. "\n\n a commandé:" . "\n\n" .$Commande. "\n\n" ;
        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);
    
        header('location: view/ThankYou.php');   
           
    }

    else {

        $Error="Veuillez sélectionner au moins un produit et remplir tous les champs";
    }
}

?>

 