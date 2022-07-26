   <?php
            $servername = 'database-rds-php.cfea1hbhzrza.us-east-1.rds.amazonaws.com';
            $username = 'root';
            $password = 'sarahNH25';
            $basedonn= 'users';
            //On établit la connexio       
            //

            $db = new PDO("mysql:host=$servername;dbname=$basedonn", $username, $password);

try{


            //$sql = "CREATE DATABASE historique";
           //$db->exec($sql);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  //      echo 'Base de données créée bien créée !';
//        echo "Connexion réussi ";



//var_dump($recipes);

}catch (PDOException $e){
        die("Erreur:".$e->getMessage());
}


//ici on est connecté a la base 


//$sql ="INSERT INTO `USERS`(`NamePrenom`, `Email`, `password`) VALUES ('ninanait','nina@gmail.com','dfvdfrvbr')";
      
    
//$requete = $db->query($sql);
 
      
//On recupere les donnee
//$user = $requete->fetchAll(); 
      

//var_dump($user);
//$requete = execute();
    
?>  

    
