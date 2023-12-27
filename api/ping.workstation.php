<?php

// exec("ping -n 1 -w 1 " . '10.3.30.59', $output, $result);

// var_dump($output);
// exit;

$SIVPMW = array(array("ip" => "", "local" => "","hostname"=>"E-PMW-00001", "status"=> ""),
                array("ip" => "", "local" => "","hostname"=>"E-PMW-00002", "status"=> ""),
                array("ip" => "", "local" => "Zezinho","hostname"=>"E-PMW-00003", "status"=> ""),
                array("ip" => "", "local" => "T.I","hostname"=>"E-PMW-00005", "status"=> ""),
                array("ip" => "", "local" => "","hostname"=>"E-PMW-00006", "status"=> ""),
                array("ip" => "", "local" => "SPE","hostname"=>"E-PMW-00007", "status"=> ""),
                array("ip" => "", "local" => "ADM","hostname"=>"E-PMW-00008", "status"=> ""),
                array("ip" => "", "local" => "","hostname"=>"E-PMW-00009", "status"=> ""),
                array("ip" => "", "local" => "APOC","hostname"=>"E-PMW-00010", "status"=> ""),
                array("ip" => "", "local" => "","hostname"=>"E-PMW-00011", "status"=> ""),
                array("ip" => "", "local" => "","hostname"=>"E-PMW-00012", "status"=> ""),
                array("ip" => "", "local" => "EULAIR","hostname"=>"E-PMW-00013", "status"=> ""),
                array("ip" => "", "local" => "","hostname"=>"E-PMW-00014", "status"=> ""),
                array("ip" => "", "local" => "SCI","hostname"=>"E-PMW-00015", "status"=> ""),
                array("ip" => "", "local" => "","hostname"=>"E-PMW-00016", "status"=> ""),
                array("ip" => "", "local" => "","hostname"=>"E-PMW-00017", "status"=> ""),
                array("ip" => "", "local" => "","hostname"=>"E-PMW-00018", "status"=> ""),
                array("ip" => "", "local" => "","hostname"=>"E-PMW-00019", "status"=> ""),
                array("ip" => "", "local" => "","hostname"=>"E-PMW-00020", "status"=> ""),
                array("ip" => "", "local" => "AIR-LINK","hostname"=>"E-PMW-00021", "status"=> ""),
                array("ip" => "", "local" => "","hostname"=>"E-PMW-00022", "status"=> ""),
                array("ip" => "", "local" => "CMES 01","hostname"=>"E-PMW-00023", "status"=> ""),
                array("ip" => "", "local" => "CMES 02","hostname"=>"E-PMW-00024", "status"=> ""),
                array("ip" => "", "local" => "","hostname"=>"E-PMW-00025", "status"=> ""),
                array("ip" => "", "local" => "","hostname"=>"E-PMW-00026", "status"=> ""),
                array("ip" => "", "local" => "","hostname"=>"E-PMW-00027", "status"=> ""),
                array("ip" => "", "local" => "TOTEM","hostname"=>"E-PMW-00028", "status"=> ""),
                array("ip" => "", "local" => "","hostname"=>"E-PMW-00029", "status"=> ""),
                array("ip" => "", "local" => "","hostname"=>"E-PMW-00030", "status"=> ""),
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