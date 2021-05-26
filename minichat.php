
    <form action="minichat_post.php" method= "POST">
    <p>
   <label for="nom" >Nom : </label> <input type = "text" name="nom"><br /><br />
   <label for="message" >Message : </label>  <input type = "text" name="message"> <br /><br />
    <input type = "submit" value="Envoyer" >
    
    </p>

    <a href="minichat.php">Rafraichir la page </a>
    
    </form>



    <?php
    
    try {
        $db= new PDO ('mysql:host=localhost;dbname=tp_openclassroom;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
    } 
    
    catch (Exception $error) {
       die ($error->getMessage());
    }
    
    $response = $db->query("SELECT * FROM minichat ORDER BY ID DESC LIMIT 0 , 10 ");

    while($données = $response->fetch()) {

        echo "<p>" . htmlspecialchars($données["nom"]). " :" . " " . htmlspecialchars($données["message"]) . "</p>";
    }

    
    
    ?>
