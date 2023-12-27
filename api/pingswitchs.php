<?php

// exec("ping -n 1 -w 1 " . '10.3.30.59', $output, $result);

// var_dump($output);
// exit;

$SIVPMW = array(array("ip" => "10.85.18.200", "local" => "SW CORE", "status"=> ""),
array("ip" => "10.85.18.203", "local" => "CPD ARUBA", "status"=> ""),
array("ip" => "10.85.18.204", "local" => "SW TPS3", "status"=> ""),
// array("ip" => "10.85.18.237", "local" => "SW SCI", "status"=> ""),
array("ip" => "10.85.18.210", "local" => "SW CUT", "status"=> ""),
array("ip" => "10.85.18.213", "local" => "SW TPS1", "status"=> ""),
array("ip" => "10.85.18.216", "local" => "SW ELO", "status"=> ""),
array("ip" => "10.85.18.215", "local" => "SW TPS3", "status"=> ""),
array("ip" => "10.85.18.202", "local" => "SW TAPJ", "status"=> ""),
array("ip" => "10.85.18.223", "local" => "SW ESTAPAR", "status"=> ""),
array("ip" => "10.85.18.217", "local" => "SW TWR", "status"=> ""),
array("ip" => "10.85.18.218", "local" => "SW TWR BKP", "status"=> ""),
array("ip" => "10.85.18.211", "local" => "SW TWR02", "status"=> ""),
array("ip" => "10.85.18.224", "local" => "CPD HAWEI", "status"=> ""),


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