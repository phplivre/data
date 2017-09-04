<?php
function data() {
$data = date('D');
$mes = date('M');
$dia = date('d');
$ano = date('Y');

// dias da semana
$semana = array(
'Sun' => 'Domingo',
'Mon' => 'Segunda-Feira',
'Tue' => 'Terca-Feira',
'Wed' => 'Quarta-Feira',
'Thu' => 'Quinta-Feira',
'Fri' => 'Sexta-Feira',
'Sat' => 'Sábado'
);

 // meses do ano
$mes_extenso = array(
'Jan' => 'Janeiro',
'Feb' => 'Fevereiro',
'Mar' => 'Marco',
'Apr' => 'Abril',
'May' => 'Maio',
'Jun' => 'Junho',
'Jul' => 'Julho',
'Aug' => 'Agosto',
'Nov' => 'Novembro',
'Sep' => 'Setembro',
'Oct' => 'Outubro',
'Dec' => 'Dezembro'
);

 // forma que será exibido
return $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano}" . " às " . date('H:i:s');
}

// imprimindo o resultado da função
echo data();
?>
