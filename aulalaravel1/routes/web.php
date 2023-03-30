<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/conta/{numero1}/{numero2}/{operacao?}', function (int $x , int $y, String $operacao = 'todos'){

    switch($operacao){
        case 'todos':
        $adicao = $y + $x;
        $subtracao = $y - $x;
        $divisao = $y / $x;
        $multiplicacao = $y * $x;
            echo  "Adição :" . $adicao.'<br>'
            . "Subtração :" . $subtracao.'<br>'
            . "Divisão :"   . $divisao.'<br>'
            . "Multiplicaçaõ :"  .  $multiplicacao.'<br>';
            break;
    case 'soma';
    $resultado = $x + $y;
        echo $resultado;
    
    case 'subtração';
    $resultado = $x - $y;
        echo $resultado;
    break;
    
    case 'divisao';
    $resultado = $x / $y;
        echo $resultado;
        break;

    case 'multiplicacao';
    $resultado = $x * $y;
        echo $resultado;
        break;
        default;
        echo 'operação invalida';
    };

})->where ('will', '[0-9]+' ) ->where('willis', '[0-9]+');

Route::get('/hello/{home}', function (String $home ='William') {

    if($home = count_chars($home,3))
    echo('Quantidade de caracteries invalidos');
    else
    echo('Seja Bem Vindo ao site '.$home);
    
    
});

Route::get('/idade/{ano}/{mes}/{dia}',function (int $x, String $result = 'Data' ){
   
    {
        $result = 2023 - $x;
        echo $result;
        }; 
});



