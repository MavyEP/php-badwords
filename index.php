<?php
//testo dove si dovrà censurare
  $testo = 'Tutti i politici sono dei ladroni !';
  //stampo comunque il testo con la badword per puro e piu semplice controllo
  echo $testo;
//ottengo la parola che deve essere censurata
  $badword = $_GET["badword"];
//transformo il testo in un array e prendo tutti i singoli elementi
  $testo_diviso = explode(' ', $testo);
  var_dump($testo_diviso);
//creo un if  per vedere se l' array contiene la parola "badword"
  if (in_array($badword , $testo_diviso)) {
    // se la parola é al suo interno sostituisco la parola con gli asterischi censura
    $testo_aggiunta_censura = str_replace($badword , "***" , $testo_diviso);
    var_dump($testo_aggiunta_censura);
    //ottenuto il nuovo array con all interno la censura riunisco tutte le stringhe in una singola stringa =)!
    $testo_censurato = implode(' ', $testo_aggiunta_censura);
    //scrivo la nuova frase censurata
    echo $testo_censurato;
  }
 ?>
