<?php

/*  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Maneira 1 - índice manual <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< */

$dia = date('d');
$mes = date('m');
$ano = date('Y');
$diaescrito = date('l');

$mesEsc = [
    '01' => 'Janeiro',
    '02' => 'Fevereiro',
    '03' => 'Março',
    '04' => 'Abril',
    '05' => 'Maio',
    '06' => 'Junho',
    '07' => 'Julho',
    '08' => 'Agosto',
    '09' => 'Setembro',
    '10' => 'Outubro',
    '11' => 'Novembro',
    '12' => 'Dezembro'
];

$diaExib = [
    'Sunday' => 'Domingo',
    'Monday' => 'Segunda-Feira',
    'Tuesday' => 'Terça-Feira',
    'Wednesday' => 'Quarta-Feir',
    'Thursday' =>  'Quinta-Feira',
    'Friday' => 'Sexta-Feira',
    'Saturday' =>  'Sábado'
];

echo $result = $diaExib[$diaescrito] . ',' . $dia . ' de ' . $mesEsc[$mes] . ' de ' . $ano; 


/*  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Maneira 2 - índice automatico <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< */

$diaAAA = date('d');  //Pega o dia
$mesNeg = date('m') - 1; // Pega o mes
$ano = date('Y');
$diaescritoAutomatico = date('w'); //pega o nome da semana 

$diaExibAuto = [
    'Domingo',
    'Segunda-Feira',
    'Terça-Feira',
    'Quarta-Feir',
    'Quinta-Feira',
    'Sexta-Feira',
    'Sábado'
];

$mesEscAuto = [
    'Janeiro',
    'Fevereiro',
    'Março',
    'Abril',
    'Maio',
    'Junho',
    'Julho',
    'Agosto',
    'Setembro',
    'Outubro',
    'Novembro',
    'Dezembro'
];


 echo $resultAuto = $diaExibAuto[$diaescritoAutomatico] . ',' . $diaAAA . ' de ' . $mesEscAuto[$mesNeg] . ' de ' . $ano; 



/*  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>  Maneira 3 - Criando uma função  <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< */
/* Obs : Esta maneira esta toda comentada  */

/* function dataAtu()
{
    $dia = date('d');
    $mes = date('m');
    $ano = date('Y');

    switch ($mes) {
        case "1":
            $mesEsc = "Janeiro";
            break;
        case "2":
            $mesEsc = "Fevereiro";
            break;
        case "3":
            $mesEsc = "Março";
            break;
        case "4":
            $mesEsc = "Abril";
            break;
        case "5":
            $mesEsc = "Maio";
            break;
        case "6":
            $mesEsc = "Junho";
            break;
        case "7":
            $mesEsc = "Julho";
            break;
        case "8":
            $mesEsc = "Agosto";
            break;
        case "9":
            $mesEsc = "Setembro";
            break;
        case "10":
            $mesEsc = "Outubro";
            break;
        case "11":
            $mesEsc = "Novembro";
            break;
        case "12":
            $mesEsc = "Dezembro";
            break;
    }


    $diaescrito = date('l');
    switch ($diaescrito) {
        case "Sunday":
            $diaEsc = "Domingo";
            break;
        case "Monday":
            $diaEsc = "Segunda-Feira";
            break;
        case "Tuesday":
            $diaEsc = "Terça-Feira";
            break;
        case "Wednesday":
            $diaEsc = "Quarta-Feira";
            break;
        case "Thursday":
            $diaEsc = "Quinta-Feira";
            break;
        case "Friday":
            $diaEsc = "Sexta-Feira";
            break;
        case "Saturday":
            $diaEsc = "Sábado";
            break;
    }

    return $result = $diaEsc . ',' . $dia . ' de ' . $mesEsc . ' de ' . $ano;
} */

/* echo dataAtu(); */