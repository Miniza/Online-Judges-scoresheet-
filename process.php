<?php

$mysqli = mysqli_connect('localhost', 'root', '','nkathutodatabase') or die(mysqli_error($mysqli));

if(isset($_POST['save'])){
    $date = filter_input(INPUT_POST,'date',FILTER_SANITIZE_URL);
    $name = filter_input(INPUT_POST,'jname',FILTER_SANITIZE_STRING);
    $surname = filter_input(INPUT_POST,'jsurname',FILTER_SANITIZE_STRING);
    $qual = filter_input(INPUT_POST,'jqual',FILTER_SANITIZE_STRING);
    $mail = filter_input(INPUT_POST,'jemail',FILTER_SANITIZE_EMAIL);
    $sname = filter_input(INPUT_POST,'sname',FILTER_SANITIZE_STRING);
    $ssurname = filter_input(INPUT_POST,'ssurname',FILTER_SANITIZE_STRING);
    $sgrade = filter_input(INPUT_POST,'sgrade',FILTER_SANITIZE_NUMBER_INT);
    $sschool = filter_input(INPUT_POST,'sschool',FILTER_SANITIZE_STRING);
    $sgender = filter_input(INPUT_POST,'sgender',FILTER_SANITIZE_STRING);
    $numpro = filter_input(INPUT_POST,'numberpro',FILTER_SANITIZE_NUMBER_INT);
    $arating = filter_input(INPUT_POST,'arating',FILTER_SANITIZE_NUMBER_INT);
    $rrating = filter_input(INPUT_POST,'rrating',FILTER_SANITIZE_NUMBER_INT);
    $srating = filter_input(INPUT_POST,'srating',FILTER_SANITIZE_NUMBER_INT);
    $irating = filter_input(INPUT_POST,'irating',FILTER_SANITIZE_NUMBER_INT);
    $lrating = filter_input(INPUT_POST,'lrating',FILTER_SANITIZE_NUMBER_INT);
    $prating = filter_input(INPUT_POST,'prating',FILTER_SANITIZE_NUMBER_INT);
    $orating = filter_input(INPUT_POST,'orating',FILTER_SANITIZE_NUMBER_INT);
    $total =   $arating+$rrating+$srating+$irating+$lrating+$prating+$orating;
   $mysqli->query("INSERT INTO nkathutotable(date,jname,jsurname,jqual,jemail,sname,ssurname,sgrade,sschool,sgender,numberpro,arating,rrating,srating,irating,lrating,prating,orating,ttotal) VALUES('$date','$name','$surname','$qual','$mail','$sname','$ssurname','$sgrade','$sschool','$sgender','$numpro','$arating','$rrating','$srating','$irating','$lrating','$prating','$orating','$total')") or
            die($mysqli->error);
   header('location:thanks.php');
   exit();
   
}
    

     