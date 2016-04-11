<?php
/*$newURL="index.php?bkoff=1";
header('Location: '.$newURL);*/
?>
<?php
        //include 'my_library.php';
        if(isset($_POST['Invio'])){
            
            $nome = $_POST['nome'];
            $citta =  $_POST['citta'];
            
                               
           
            //$data=date_format($data, $format);
            if(empty($nome) || empty($citta) ){
                echo "<br>Dati mancanti";
            }
            else{                
                
                
                     $conn = mysql_connect("127.0.0.1","biblio","biblio25")
                        or die("DBMS non disponibile");
                     mysql_select_db("bibliodb_russo")
                        or die("DBMS non disponibile");
                    $query="INSERT INTO editore("
                    . "nome,citta) ";
                    $query.= "VALUES(NULL,'$nome','$citta')";
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
<h1> Inserisci Editore </h1>
<form action="backoffice.php?=1" method="post">
            
            
            Nome: <input type="text" name="nome" required>
            <br>
            Città: <input type="text" name="citta" required>
            <br>
            
            <input type="reset" name="cancella" value="cancella">            
            <input type="submit" name="Invio" value="Invio"> 
</form>

