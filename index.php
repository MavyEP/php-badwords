<?php
//testo dove si dovrà censurare
  $testo = 'Tutti i politici sono dei ladroni !';
//ottengo la parola che deve essere censurata
  $badword = $_GET["badword"];
//transformo il testo in un array e prendo tutti i singoli elementi
  $testo_diviso = explode(' ', $testo);
//creo un if  per vedere se l' array contiene la parola "badword"
  if (in_array($badword , $testo_diviso)) {
    // se la parola é al suo interno sostituisco la parola con gli asterischi censura
    $testo_aggiunta_censura = str_replace($badword , "***" , $testo_diviso);
    //ottenuto il nuovo array con all interno la censura riunisco tutte le stringhe in una singola stringa =)!
    $testo_censurato = implode(' ', $testo_aggiunta_censura);
    //prendo la lunghezza del testo
    $lunghezza_testo_censurato = strlen($testo_censurato);
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p><?php echo $testo_censurato . " " . $lunghezza_testo_censurato ?></p>
  </body>
</html>
