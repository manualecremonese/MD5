<?php
//lettura variabile da criptare
$txt= $_GET ['testo'];

//funzione di criptaggio
$txt_cifrato= md5($txt);

echo"<font color='#006600'><strong> Il testo cifrato e': </strong></font>
<br/>".$txt_cifrato."<br/><br/>";
/*
Generare chiave ssh-keygen -t ed25519 -C "your email@example.com" 
git config user.email
git config user.name
clonare da git git clone git@github.com:manualecremonese/MD5.git
git add
git commit
git push
*/
?>

