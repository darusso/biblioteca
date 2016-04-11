<?php
class LibriDal{
private $hDB;
public function __construct($hDB) {
    $this->hDB = DataManager::get_connection();
}
 public function get_last_position($id=0)
    {
        $sql="Select max(posizione) as posizione from libri where id=$id";
        return mysql_query($sql);
    }
public function add($codice_libro=0, $fkAutore=0, $fkEditore=0, $titolo="", $numero_pagine=0, $prezzo=0.0, $data_di_acquisto='')
            {
        $this->get_last_position()+1;
        $sql="Insert into libri(codice_libro, fkAutore, fkEditore, titolo, numero_pagine, prezzo)"
                ." values($codice_libro,$fkAutore,$fkEditore,'$titolo', $numero_pagine,$prezzo";
       
        return mysql_query($sql);        
                    
            }
public function update($codice_libro=0, $fkAutore=0, $fkEditore=0, $titolo="", $numero_pagine=0, $prezzo=0.0, $data_di_acquisto='')
            {
        $sql="Update libri set codice_libro='$codice_libro', fkAutore = '$fkAutore', fkEditore = '$fkEditore', titolo = '$titolo', numero_pagine = $numero_pagine, prezzo = $prezzo
                .where codice_libro = $codice_libro"
                ;       
        return mysql_query($sql);
            }
 public function delete($codice_libro)
            {
                {            
            $sql= "Delete from libri where codice_libro=$codice_libro";
            return mysql_query($sql);
                }  
                    
            }


}

