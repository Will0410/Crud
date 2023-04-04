<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function idade (int $ano, int $mes = null, int $dia = null) {
        $today = new \DateTime(date('Y-m-d h:i:s'));
        $userBirthday = new \DateTime(\DateTimeImmutable::createFromFormat("Y-m-d", $ano.$mes.$dia));
        $monthDiff = $today->diff($userBirthday);
        return view('idade', ['ano' => $ano, 'mes' => $mes, 'dia' => $dia, 'today' => $today, 'userBirthday' => $userBirthday, 'monthDiff' => $monthDiff]);
     }
}