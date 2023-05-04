<?php

// Dato un array di numeri, scrivere un programma che mi permetta di avere la media SOLO dei numeri pari contenuti all’interno dell’array

// $array =[1,2,3,4,5,6,7,8,9,10];
// $somma=0;
// $contatore=0;

//    for ($i=0; $i<count($array); $i++){
//       if ($array[$i]%2==0){

//          $somma= $somma + $array[$i];
//          $contatore++;
//       }
//    }

//    $media = $somma/$contatore;

//    print_r($media);


   // Dato un array di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” a seconda del genere

   $utenti = [

      [
          'nome' => 'Cinzia',
  
          'cognome' => 'Loconsole',
  
          'genere' => 'donna'
      ],
  
      [
          'nome' => 'Fabio',
  
          'cognome' => 'Massa',
  
          'genere' => 'uomo'
      ],
  
      [
          'nome' => 'Carmine',
  
          'cognome' => 'Strollo',
  
          'genere' => 'uomo'
      ],
  
  ];
  
  foreach ($utenti as $value) {
  
      if($value['genere']== 'donna'){
  
          echo "Buongiorno sign.ra ".$value['nome']." ".$value['cognome']. "\n";
  
      } else {
  
          echo "Buongiorno Sig. ".$value['nome']." ".$value['cognome']. "\n";
  
      }
  }



// Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3, stampare “PHP” al posto del numero; se multiplo di 5 deve stampare “JAVASCRIPT”; se multiplo di 3 e 5 (15) deve stampare “HACKADEMY62".

// 

for($i=1;$i<=100;$i++){
   
   if($i%15==0){
      echo "HACKADEMY62 \n";
   }
   else if($i%5==0){
      echo "JAVASCRIPT \n";
   }
   else if($i%3==0){
      echo "PHP \n";
   }
   else{
      echo "$i \n";
   }
}

?>



