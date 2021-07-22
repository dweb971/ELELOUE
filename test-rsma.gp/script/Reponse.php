<?php

class Reponse
{
    public $question;
    public $question2;
    public $question3;

    public $reponse;
    public $reponse2;
    public $reponse3;

    public $idINS;
    private $_DBConnect;


    // methodes
    public function __construct($connectOBJ){
        // instance PDO
        $this->set_DBConnect($connectOBJ->pdo);
         
     }
    
    public function i (array $data)
     {
        // insertion reponse table reponse
        print_r($data);
        

        $dates = date("Y-m-d H:i:s");

        $this->setQuestion($this->nettoyer($data["question"]));
        $this->setReponse($this->nettoyer($data["chaise"]));
        $this->setIdINS($this->nettoyer($data["id"]));

        # insert
        $reqI = "INSERT INTO reponse (idINS, question, reponse, dateAdd, dateUpdate) 
            VALUES ('".$this->getIdINS()."', '".$this->getQuestion()."', '".$this->getReponse()."', '".$dates."', '".$dates."')"; # requete insert rendez_vous
 
            $dbh = $this->get_DBConnect()->query($reqI);
            
            if($dbh && $data["form"] == "1")
            {
                $id = $this->getIdINS();
                # redirection question suivantes
                /* Ceci produira une erreur. Notez la sortie ci-dessus,
                * qui se trouve avant l'appel à la fonction header() */
                header('Location: https://test-rsma.gp/question2.php?idIn='.$id);
                exit;


            } 

            if($dbh && $data["form"] == "2")
            {
                $id = $this->getIdINS();
                # redirection question suivantes
                /* Ceci produira une erreur. Notez la sortie ci-dessus,
                * qui se trouve avant l'appel à la fonction header() */
                header('Location: https://test-rsma.gp/question3.php?idIn='.$id);
                exit;


            } 

            if($dbh && $data["form"] == "3")
            {
                $id = $this->getIdINS();
                # redirection question suivantes
                /* Ceci produira une erreur. Notez la sortie ci-dessus,
                * qui se trouve avant l'appel à la fonction header() */
                header('Location: https://test-rsma.gp/page9.php');
                exit;


            } 

           

    }
    



    public function nettoyer($chaine){

        // securite
        $chaine = trim(strip_tags($chaine));
        return $chaine;

    }

    /**
     * Get the value of _DBConnect
     */ 
    public function get_DBConnect()
    {
        return $this->_DBConnect;
    }

    /**
     * Set the value of _DBConnect
     *
     * @return  self
     */ 
    public function set_DBConnect($_DBConnect)
    {
        $this->_DBConnect = $_DBConnect;

        return $this;
    }

    /**
     * Get the value of question
     */ 
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set the value of question
     *
     * @return  self
     */ 
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get the value of reponse
     */ 
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * Set the value of reponse
     *
     * @return  self
     */ 
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get the value of idINS
     */ 
    public function getIdINS()
    {
        return $this->idINS;
    }

    /**
     * Set the value of idINS
     *
     * @return  self
     */ 
    public function setIdINS($idINS)
    {
        $this->idINS = $idINS;

        return $this;
    }
}