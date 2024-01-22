<?php
require("Alunno.php");
$Alunno1=new Alunno("alberto","asdrubali",12);
$Alunno2=new Alunno("greg","asdrubali",12);
$Alunno3=new Alunno("isupa","asdrubali",60);
$Alunni = [$Alunno1,$Alunno2,$Alunno3];
for($i=0;$i<count($Alunni);$i++){
    $Alunni[$i]->Stampa();
}
?>