<?php

$data_inicial 	= '27/02/2018';
$data_inicial 	= implode('-', array_reverse(explode('/', substr($data_inicial, 0, 10)))).substr($data_inicial, 10);
$data_inicial 	= new DateTime($data_inicial);

$data_final 	= '27/02/2019';
$data_final 	= implode('-', array_reverse(explode('/', substr($data_final, 0, 10)))).substr($data_final, 10);
$data_final 	= new DateTime($data_final);


//Dias da semana
//Tue, Wed, Thu, Fri, Sat, Sun, Mon
//Ter, Qua, Qui, Sex, Sáb, Dom, Seg

$periodo = new DatePeriod($data_inicial, new DateInterval('P1D'), $data_final);
$validos = [];
foreach($periodo as $item){
    if($item->format("D") == 'Mon'){
        $validos[] = $item->format('d/m/Y');
    }
}
echo "<pre>";
var_dump($validos);