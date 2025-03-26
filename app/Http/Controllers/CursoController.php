<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function suma()
    {
        $a=9;
        $b=9;
        $c=$a+$b;
        $resultado= "la suma es ".$c;
    return $resultado;

    }
    public function multiplicacion()
    {
        $a=9;
        $b=9;
        $c=$a*$b;
        $resultado= "la multiplicacion es ".$c;
    return $resultado;

    }
    public function division()
    {
        $a=9;
        $b=9;
        $c=$a/$b;
        $resultado= "la division es ".$c;
    return $resultado;

    }
    public function resta()
    {
        $a=9;
        $b=9;
        $c=$a-$b;
        $resultado= "la resta es ".$c;
    return $resultado;

    }
}
