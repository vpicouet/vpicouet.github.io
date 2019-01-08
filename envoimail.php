<?php
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";
//$headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";
$headers .= 'From: '.$_POST['email']. "\r\n";
$headers .= 'X-Mailer: PHP'. phpversion() .'\r\n';
//sujet du mail
$subject = "Nouveau mail pour Ilios";
//message du mail
$message = '<html>
                <head>
                    <title>Bonjour !</title>
                </head>
                <body>
                    <h1>Vous avez reçu un mail</h1>
                        <h3>Contenu du message de '.$_POST['name'].':</h3>
                        <p>'.$_POST['message'].'</p>

                        <h3>Citations :</h3>
                        <p>'.$_POST['auteurCitation'].'</p>
                        <p>'.$_POST['citation'].'</p>

                        <h3>Textes :</h3>
                        <p>'.$_POST['auteurTexte'].'</p>
                        <p>'.$_POST['texte'].'</p>

                         <h3>Liens :</h3>
                        <p>'.$_POST['lien'].'</p>

                    <footer>Envoyé via le formulaire du site web.</footer>
                </body>
            </html>';
 
//addresse de destination du mail
$TO="ilios@ilios.io";
 
 
while (list($key, $val) = each($_POST)) {if(!empty($val)) {$message .= "$key : $val\n";}}
if (mail($TO, $subject, $message,$headers)){
    //echo "Mail envoyé avec succès !";
    echo "<script>
            window.location.href = 'https://ilios.io';
          </script>";
}else {
    echo "Error...";
}
?>


