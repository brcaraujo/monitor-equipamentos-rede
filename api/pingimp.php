<?php

// exec("ping -n 1 -w 1 " . '10.3.30.59', $output, $result);

// var_dump($output);
// exit;

$SIVPMW = array(array("ip" => "10.198.4.248", "local" => "CARD 01", "status"=> ""),
                array("ip" => "10.198.4.249", "local" => "CARD 02", "status"=> ""),  
                array("ip" => "10.198.4.250", "local" => "ADM 01", "status"=> ""),  
                array("ip" => "10.198.4.251", "local" => "APOC", "status"=> ""),  
                array("ip" => "10.198.4.252", "local" => "ADM 02", "status"=> ""),  
            );


//aqui onde vou fazer o processamento dos sivs

foreach ($SIVPMW as $key => $value) {
    exec("ping -n 1 -w 1 " . $value['ip'], $output, $result);
    // var_dump($result);
    $SIVPMW[$key]['status']=$result;
}


//resposta 

$resposta = json_encode($SIVPMW, true);
echo($resposta);