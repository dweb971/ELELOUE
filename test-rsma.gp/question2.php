<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
  </head>
	<body>

    <div class="container" id="first">
        <!--début container first -->
        <div class="row">
            <!-- début div row-->
            <div class="col-md-9">
                <!--début col-9-->
                <img src="img/images.jpg" alt="logo-rsma" width=100px;>
            </div>
            <!--fin div 9-->
            <div class="col-md-1">
                <a href="https://fr-fr.facebook.com/RSMAGuadeloupe/">
                    <img class="logos" src="img/fb.png" alt="logo-facebook" width="50px">
                </a>
            </div>
            <!--fin div -->
            <div class="col-md-1">
                <a href="https://twitter.com/rsma_guadeloupe">
                    <img class="logos" src="img/twitter.png" alt="logo-twitter" width="50px">
                </a>
            </div>
            <!--fin div 1-->
            <div class="col-md-1">
                <a href="https://www.instagram.com/rsma_guadeloupe/?hl=fr">
                    <img class="logos" src="img/ig.png" alt="logo" width="50px">
                </a>
            </div>
            <!--fin div 1-->
        </div>
        <!--fin row -->
    </div>
    <!--fincontainer  -->

  <div class="container">
  <form action="traitement.php" method="post">

<p>Question2</p>

<div>
<input type="text" id="" name="question" value="25+30" readonly>
</div>
<br>
<p>Reponse</p>

<div>
<input type="checkbox" name="25+30" id="" value="55">
<label for="Reponse1">55</label>
</div>

<div>
<input type="checkbox" id="" name="25+30" value="50">
<label for="reponse2">50</label>
</div>
<br>
<div>
<?php 
$id = $_GET["idIn"];
?>
  <input type="hidden" name="id" value="<?php echo $id ?>" id="" required>
</div>

<div>
  <input type="hidden" name="form" value="2" id="" required>
    </div>

    <div>
<button type="submit"> Validé </button>
</div>

</form>

  

    <!-- Scripts -->
   

    <footer id="trois">
        <div class="image">
            <img  src="img/sengager.png" alt="logo engagement" width="120px">
            <img  src="img/drapeaueurope.png" alt="" width="110px">
        </div>
    </footer> 
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
