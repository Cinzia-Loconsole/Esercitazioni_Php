<?php

// ESERCIZIO PASSWORD

// - Ripetere l’esercizio del controllo password;
// - Implementare un metodo che faccia reinserire la password qualora le regole non fossero rispettate e che interrompa il programma in caso di password accettata.
// - Imporre un limite ai tentativi di inserimento password.


// minimo 8 caratteri
// almeno un carattere maiuscolo
// almeno un carattere speciale
// almeno un numero


$psw = readline ("Inserisci una password: \n");

    function lunghezza ($password){
    if(strlen($password)>=8){
       return true;
    } else {
        return false;
    }
    }


function maiuscolo ($password){
for($i=0; $i<strlen($password); $i++){
    if (ctype_upper($password[$i])){
        return true;
    }
} return false;
}




function number ($password){
for($i=0; $i<strlen($password); $i++){
    if(is_numeric($password[$i])){
        return true;
    }
    } return false;
    }





function special ($password){

// $spec = ['@','#','!'];

// for($i=0; $i<strlen($password); $i++){
//         if(in_array($password[$i],$spec)){
//             return true;
//     }
//     } return false;
//     }


if (preg_match('/[\'^£$%&*()}{@#~?><,|=_+¬-]/', $password)){
        return true;
    }else{
        return false;
    }}



function finalPsw($password){
    return (lunghezza($password) && maiuscolo($password) && number($password) && special($password));
    
//     $x=lunghezza($password);
//     $y=maiuscolo($password);
//     $n=number($password);
//     $s=special($password);
//     if($x && $y && $n && $s){
//         return true;
//     } else {
//     return false;
// }
}


// if(finalPsw($psw)){
//     echo "La password è corretta \n";
// } else {
//     echo "La pssword non è corretta \n";
// }





// for($i=0; $i<5; $i++){
// // while(finalPsw($psw)){
//     if(finalPsw($psw)){
//         echo "La password è corretta \n";
//     } else {
//     echo "La password non è corretta \n";
//     $psw = readline ("Inserisci nuovamente la password: \n");
// }}

// while(finalPsw($psw) == false){
//     echo "La password non è corretta \n";
//     $psw = readline ("Inserisci nuovamente la password: \n");
// }

for($i=0; $i<3; $i++){
    if(finalPsw($psw) == false){
        echo "La password non è corretta \n";
        $psw = readline ("Inserisci nuovamente la password: \n");
    }
}



?>

