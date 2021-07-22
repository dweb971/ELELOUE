<?php

// donnés du formulaire

ini_set('display_errors', 1);

// autoloader
spl_autoload_register(function ($name) {
    echo "Tentative de chargement de $name.\n";
    throw new Exception("Impossible de charger $name.");
});

try {
    // instanciation des classes
    include("script/Connect.php");
    include("script/Reponse.php");

    // creation obj PDO
    $db = new Connect();

    # classe Patient
    $reponse = new Reponse($db);

} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

# traitement form1
$action=$_POST['form'];

switch ($action) {
    case '1':
        # traitement form1
        
        // print_r($_POST['form']);
        $reponse->i($_POST);
        break;

        case '2':
           # traitement form2
      
        //print_r($_POST);
        $reponse->i($_POST);
        break;

            case '3':
                # traitement form3
                // print_r($_POST['form']);
                $reponse->i($_POST);
                break;
    
    default:
        # code...
        break;
}




