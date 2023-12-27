<?php

// exec("ping -n 1 -w 1 " . '10.3.30.59', $output, $result);

// var_dump($output);
// exit;

$SIVPMW = array(array("ip" => "", "local" => "LEANDRO","hostname"=>"N-PMW-00001", "status"=> ""),
                array("ip" => "", "local" => "VAZIO","hostname"=>"N-PMW-00002", "status"=> ""),
                array("ip" => "", "local" => "VAZIO","hostname"=>"N-PMW-00003", "status"=> ""),
                array("ip" => "", "local" => "JULIANO OLD","hostname"=>"N-PMW-00004", "status"=> ""),
                array("ip" => "", "local" => "HELLOISA","hostname"=>"N-PMW-00005", "status"=> ""),
                array("ip" => "", "local" => "BRUNO T.I","hostname"=>"N-PMW-00006", "status"=> ""),
                array("ip" => "", "local" => "BRUNO","hostname"=>"N-PMW-00007", "status"=> ""),
                array("ip" => "", "local" => "MOISES","hostname"=>"N-PMW-00008", "status"=> ""),
                array("ip" => "", "local" => "ROGERSON","hostname"=>"N-PMW-00009", "status"=> ""),
                array("ip" => "", "local" => "MARCO","hostname"=>"N-PMW-00010", "status"=> ""),
                array("ip" => "", "local" => "WILSON","hostname"=>"N-PMW-00011", "status"=> ""),
                array("ip" => "", "local" => "GUILHERME","hostname"=>"N-PMW-00012", "status"=> ""),
                array("ip" => "", "local" => "EULAIR","hostname"=>"N-PMW-00013", "status"=> ""),
                array("ip" => "", "local" => "JULIANO","hostname"=>"N-PMW-00014", "status"=> "")
            );


//aqui onde vou fazer o processamento dos sivs

foreach ($SIVPMW as $key => $value) {
    exec("ping -n 1 -w 1 " . $value['hostname'], $output, $result);
    // var_dump($result);
    $SIVPMW[$key]['status']=$result;
}


//resposta 

$resposta = json_encode($SIVPMW, true);
echo($resposta);