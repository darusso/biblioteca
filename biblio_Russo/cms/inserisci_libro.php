<?php
/*$newURL="index.php?bkoff=1";
header('Location: '.$newURL);*/
?>
<?php
        //include 'my_library.php';
        if(isset($_POST['Invio'])){
            $codice_libro=$_POST['codlibro'];
            $autore = $_POST['autore'];
            $titolo =  $_POST['titolo'];
            $editore = $_POST['editore'];
            $numero_pagine = $_POST['npagine'];
            $prezzo = $_POST['prezzo'];
            $data_acquisto = $_POST['data_acquisto'];
                               
            $format="Y-m-d";
            //$data=date_format($data, $format);
            if(empty($codice_libro) || empty($autore) || empty($titolo) || empty($editore) || empty($numero_pagine) || empty($prezzo)|| empty($data_acquisto) ){
                echo "<br>Dati mancanti";
            }
            else{                
                
                
                     $conn = mysql_connect("127.0.0.1","biblio","biblio25")
                        or die("DBMS non disponibile");
                     mysql_select_db("bibliodb_russo")
                        or die("DBMS non disponibile");
                    $query="INSERT INTO libri("
                    . "codice_libro,autore,titolo,editore,numero_pagine,prezzo,data_acquisto) ";
                    $query.= "VALUES(NULL,'$codice_libro','$autore','$titolo','$editore','$numero_pagine','$prezzo','$data_acquisto')";
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
<h1> Inserisci Libro </h1>
<form action="backoffice.php?=1" method="post">
            
            Codice Libro: <input type="text" name="codlibro" required>
            <br>
            Autore: <input type="text" name="autore" required>
            <br>
            Titolo: <input type="text" name="titolo" required>
            <br>
            Editore: <input type="text" name="editore" required>
            <br>
            Numero Pagine:<input type="text" name="npagine" required>
            <br>
            Prezzo: <input type="number" name="prezzo" required>
            <br>
            Data acquisto:<input type="date" name="data_acquisto" required>
            <br>
            <input type="reset" name="cancella" value="cancella">            
            <input type="submit" name="Invio" value="Invio"> 
</form>



