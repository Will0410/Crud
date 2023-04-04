<?php

  namespace App\Http\Controllers;

  use APP\Models\User;

  class CalculoController extends Controller{

    public function conta (int $number1 , int $number2, String $operacao){

      switch($operacao){

        case 'todos':

          $adicao = $number1 + $number2;

          $subtracao = $number1 - $number2;

          $divisao = $number1 / $number2;

          $multiplicacao = $number1 * $number2;

          echo "Adição : " . $adicao.'<br>'

            . "Subtração : " . $subtracao.'<br>'

            . "Divisão : "  . $divisao.'<br>'

            . "Multiplicação : " . $multiplicacao.'<br>';

            break;

        case 'soma':

          $resultado = $number1 + $number2;

          echo 'Nessa operação o resultado é: ' . $resultado;

          break;

        case 'subtração':

          $resultado = $number1 - $number2;

          echo 'Nessa operação o resultado é: ' . $resultado;

          break;

        case 'divisão':

          $resultado = $number1 / $number2;

          echo 'Nessa operação o resultado é: ' . $resultado;

          break;

        case 'multiplicação':

          $resultado = $number1 * $number2;

          echo 'Nessa operação o resultado é: ' . $resultado;

          break;

          default;

          echo 'Operação invalida escolha outra opção: <br><br> soma <br> subtração <br> multiplicação <br> divisão <br><br><br> Se quiser ver todas, digite: todos';

        };
    }
  }