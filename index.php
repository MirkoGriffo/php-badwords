<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    
<?php

$testo = "Inseguendo una libellula in un prato
un giorno che avevo rotto col passato
quando già credevo di esserci riuscito
son caduto
una frase sciocca, un volgare doppio senso
mi ha allarmato, non è come io la penso
ma il sentimento era già un po' troppo denso
e son restato
chissà, chissà chi sei
chissà che sarai
chissà che sarà di noi,
lo scopriremo solo vivendo";
?>

<h4><?php echo $testo; ?></h4>

<p>Il testo è lungo: <?php echo strlen($testo); ?> caratteri</p>

<?php 
    $badword = $_GET["badword"]; 
    ?>

    <h1><?php echo str_replace($badword, "***", $testo); ?></h1>
   

</body>
</html>