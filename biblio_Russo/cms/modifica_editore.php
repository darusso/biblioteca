<?php
        //include 'my_library.php';
        if(isset($_POST['Invio'])){
            
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $citta =  $_POST['citta'];
            
                               
           
            //$data=date_format($data, $format);
            if(empty ($id) || empty($nome) || empty($citta) ){
                echo "<br>Dati mancanti";
            }
            else{                
                
                
                     $conn = mysql_connect("127.0.0.1","biblio","biblio25")
                        or die("DBMS non disponibile");
                     mysql_select_db("bibliodb_russo")
                        or die("DBMS non disponibile");
                    $query="UPDATE INTO editore("
                    . "id,nome,citta) ";
                    $query.= "VALUES(NULL,'$id','$nome','$citta')";
                    $rows=mysql_query($query,$conn)
                        or die("Errori in tabella");
                    if($rows>0){
                        echo "<br>Registrazione avvenuta correttamente!!<br>";
                        echo '<a href="index.php">Vai alla Home!</a>';
                    }
                    else
                        echo "<br>Inserimento fallito";
                    
                
            }
        }
        //else{
        ?>
<h1> Modifica Editore </h1>
<form action="backoffice.php?=1" method="post">
            
            Id: <input type="number" name="id" required>
            <br>
            Nome: <input type="text" name="nome" required>
            <br>
            Città: <input type="text" name="citta" required>
            <br>
            
            <input type="reset" name="cancella" value="cancella">            
            <input type="submit" name="Invio" value="Invio"> 
</form>

