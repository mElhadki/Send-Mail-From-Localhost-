<?php 
ob_start();
?>
<!doctype html>
<html lang="en">
<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- link local CSS -->
    <link rel="stylesheet" href="view/css/home.css">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="view/Images/logo_dopurify.jpg"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">pro
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">مهني</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">منزلي</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">شخصي</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">الرئيسية</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php

if(isset($_POST['Commander'])){

    
    if(!empty($_POST["Produit"] && $_POST['Nom'] && $_POST['tel'] && $_POST['Ville'])){


        $message="";
        //echo "<h3>You Have Select Product</h3>";

        //foreach($_POST["Produit"] as $Produit){

            //echo '<p>' .$Produit. '</p>';
        //}

        $to = "elhadkimariem3@gmail.com"; // this is your Email address
        $from = "elhadkimariem3@gmail.com"; // this is the sender's Email address
        $Nom = $_POST['Nom'];
        $tel= $_POST['tel'];
        $Ville= $_POST['Ville'];
        $Commande = implode("\n\n", $_POST['Produit']);
        $subject = "Form submission";
        $subject2 = "Copy of your form submission";
        $message = "Client: " .$Nom . " Son Numéro : " . $tel . " sa ville: " . $Ville. " a commandé:" . "\n\n" .$Commande;
        $message2 = "Here is a copy of your Commande " . $Nom . "\n\n Votre Commande: \n\n " .$Commande;

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender

        header('location: view/ThankYou.php');
        
           //echo '<p>' .$_POST["Nom"]. '</p>';
            //echo '<p>' .$_POST["tel"]. '</p>';
            //echo '<p>' .$_POST["Ville"]. '</p>';
    }

    else {

        $Error="Please Select at least One Product and fill all the blinks";
    }
}

?>

 
    <!-- Form Commande -->
    <div class="container contact-form">
        <form action="" method="post">
            <h3>REMPLIR LE FORMULAIRE</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="bg">
                            <strong> CHOISIR VOS PRODUITS :</strong><br/>
                            <div>
                                <div class="chiller_cb">
                                    <input id="myCheckbox" type="checkbox" name="Produit[]" value="SIL-1L">
                                    <label for="myCheckbox">SIL 3 PRO / 1L-590 DH</label>
                                    <span></span>
                                </div>
                                <div class="chiller_cb">
                                    <input id="myCheckbox2" type="checkbox" name="Produit[]" value="SIL-5L">
                                    <label for="myCheckbox2">SIL 3 PRO / 5L-2800 DH</label>
                                    <span></span>
                                </div>
                                <div class="chiller_cb">
                                    <input id="myCheckbox3" type="checkbox" name="Produit[]" value="PULV-2L">
                                    <label for="myCheckbox3">PULV 2L / 210 DH</label>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="Nom" class="form-control" placeholder="Nom *"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="tel" class="form-control" placeholder="Tel *"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Ville" class="form-control" placeholder="Ville *"/>
                    </div>
                </div>
                <div class="btnconfirm">
                    <input type="submit" name="Commander" class="btnCommand" value="JE CONFIRME" />
                </div>
               
                <p class="text-danger" style="text-align: center; width:100%;">
                     <?php  
                     if(isset($Error))  
                     {  
                          echo $Error;  
                     }  
                     ?>  
                </p>
            
            </div>
            </form>
    </div>





    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">
                    <!-- Content -->
                    <h5 class="text-uppercase"><img src="view/Images/serviceclient.jpg" alt="service client"></h5>
                    <p>االانتاج : 101 الحي الصناعي تاسيلا, أكادير</p>
                    <p>التوزيع : عمارة سينوان فونتي, أكادير</p>
                </div>
                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">
                    <!-- Content -->
                    <h5 class="text-uppercase"><a href="#">الشروط و الاحكام | </a><a href="#"> سياسة الخصوصية</a></h5>
                    <p>حقوق الطبع و النشر محفوظة 2020</p>
                    <p><strong> DISFASTGROUP MAROC</strong></p>


                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->

        </div>
    </footer>
    <!-- Footer -->








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
</body>

</html>