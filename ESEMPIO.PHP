<?php
$file= file_get_contents("./prova.json");
$array=[

];

$json_decoded = json_decode($file);

foreach($json_decoded as $ticket ){
    if($_GET["Aperto"]=="1"){
       if($ticket->STADIO == "Aperto"){
            $array[] = $ticket;
        } 
    }
    if($_GET["Attesa_utente"]=="1"){
        if($ticket->STADIO == "Attesa utente"){
             $array[] = $ticket;
        } 
    }
    if($_GET["Chiuso"]=="1"){
        if($ticket->STADIO == "Chiuso"){
             $array[] = $ticket;
        } 
    }
    if($_GET["In_elaborazione"]=="1"){
        if($ticket->STADIO == "In elaborazione"){
             $array[] = $ticket;
        } 
    }
    
}


//print_r($json_decoded);

echo json_encode($array);