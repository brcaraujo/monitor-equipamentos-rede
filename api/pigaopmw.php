<?php

// exec("ping -n 1 -w 1 " . '10.3.30.59', $output, $result);

// var_dump($output);
// exit;

$SIVPMW = array(array("ip" => "10.198.31.01", "local" => "CK-IN LATAM", "status"=> ""),
                array("ip" => "10.198.31.27", "local" => "CK-IN LATAM", "status"=> ""),  
                array("ip" => "10.198.31.03", "local" => "CK-IN LATAM", "status"=> ""),  
                array("ip" => "10.198.31.04", "local" => "CK-IN LATAM", "status"=> ""),  
                array("ip" => "10.198.31.05", "local" => "CK-IN GOL", "status"=> ""),  
                array("ip" => "10.198.31.06", "local" => "CK-IN GOL", "status"=> ""),  
                array("ip" => "10.198.31.07", "local" => "CK-IN GOL", "status"=> ""),  
                array("ip" => "10.198.31.8", "local" => "CK-IN GOL", "status"=> ""),  
                array("ip" => "10.198.31.9", "local" => "CK-IN AZUL", "status"=> ""),  
                array("ip" => "10.198.31.10", "local" => "CK-IN AZUL", "status"=> ""),  
                array("ip" => "10.198.31.11", "local" => "CK-IN AZUL", "status"=> ""),  
                array("ip" => "10.198.31.12", "local" => "ENTRADA 01", "status"=> ""),  
                array("ip" => "10.198.31.13", "local" => "CK-IN GOL", "status"=> ""),  
                array("ip" => "10.198.31.14", "local" => "CK-IN AZUL", "status"=> ""),  
                array("ip" => "10.198.31.15", "local" => "LOCADORAS", "status"=> ""),  
                array("ip" => "10.198.31.16", "local" => "P.ALIMEN. 01", "status"=> ""),  
                array("ip" => "10.198.31.17", "local" => "ENTRADA 02", "status"=> ""),  
                array("ip" => "10.198.31.18", "local" => "P.ALIMEN. 02", "status"=> ""),  
                array("ip" => "10.198.31.19", "local" => "DESEM. 01", "status"=> ""),  
                array("ip" => "10.198.31.20", "local" => "DESEM. 02", "status"=> ""),  
                array("ip" => "10.198.31.21", "local" => "EMBARQ. 01", "status"=> ""),  
                array("ip" => "10.198.31.22", "local" => "EMBARQ. 02", "status"=> ""),
                array("ip" => "10.198.31.23", "local" => "EMBARQ. 03", "status"=> ""), 
                array("ip" => "10.198.31.24", "local" => "VIDEOWALL", "status"=> ""), 
                array("ip" => "10.198.31.26", "local" => "APOC", "status"=> ""),
                array("ip" => "10.198.31.28", "local" => "EST. INSOLO", "status"=> ""),
                array("ip" => "10.198.31.29", "local" => "C.PÃO EMB.", "status"=> "")  

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