<?php

namespace Redlinux\Conver;

class conver
{
    private function Centenas($VCentena)
    {
        $Numeros[0] = "Cero";
        $Numeros[1] = "Uno";
        $Numeros[2] = "Dos";
        $Numeros[3] = "Tres";
        $Numeros[4] = "Cuatro";
        $Numeros[5] = "Cinco";
        $Numeros[6] = "Seis";
        $Numeros[7] = "Siete";
        $Numeros[8] = "Ocho";
        $Numeros[9] = "Nueve";
        $Numeros[10] = "Diez";
        $Numeros[11] = "once";
        $Numeros[12] = "Doce";
        $Numeros[13] = "Trece";
        $Numeros[14] = "Catorce";
        $Numeros[15] = "Quince";
        $Numeros[20] = "Veinte";
        $Numeros[30] = "Treinta";
        $Numeros[40] = "Cuarenta";
        $Numeros[50] = "Cincuenta";
        $Numeros[60] = "Sesenta";
        $Numeros[70] = "Setenta";
        $Numeros[80] = "Ochenta";
        $Numeros[90] = "Noventa";
        $Numeros[100] = "Ciento";
        $Numeros[101] = "Quinientos";
        $Numeros[102] = "Setecientos";
        $Numeros[103] = "Novecientos";
        if ($VCentena == 1) {
            return $Numeros[100];
        } else if ($VCentena == 5) {
            return $Numeros[101];
        } else if ($VCentena == 7) {
            return ($Numeros[102]);
        } else if ($VCentena == 9) {
            return ($Numeros[103]);
        } else {
            return $Numeros[$VCentena];
        }
    }

    private function Unidades($VUnidad)
    {
        $Numeros[0] = "Cero";
        $Numeros[1] = "Uno";
        $Numeros[2] = "Dos";
        $Numeros[3] = "Tres";
        $Numeros[4] = "Cuatro";
        $Numeros[5] = "Cinco";
        $Numeros[6] = "Seis";
        $Numeros[7] = "Siete";
        $Numeros[8] = "Ocho";
        $Numeros[9] = "Nueve";
        $Numeros[10] = "Diez";
        $Numeros[11] = "once";
        $Numeros[12] = "doce";
        $Numeros[13] = "Trece";
        $Numeros[14] = "Catorce";
        $Numeros[15] = "Quince";
        $Numeros[20] = "Veinte";
        $Numeros[30] = "Treinta";
        $Numeros[40] = "Cuarenta";
        $Numeros[50] = "Cincuenta";
        $Numeros[60] = "Sesenta";
        $Numeros[70] = "Setenta";
        $Numeros[80] = "Ochenta";
        $Numeros[90] = "Noventa";
        $Numeros[100] = "Ciento";
        $Numeros[101] = "Quinientos";
        $Numeros[102] = "Setecientos";
        $Numeros[103] = "Novecientos";

        $tempo = $Numeros[$VUnidad];
        return $tempo;
    }

    private function Decenas($VDecena)
    {
        $Numeros[0] = "Cero";
        $Numeros[1] = "Uno";
        $Numeros[2] = "Dos";
        $Numeros[3] = "Tres";
        $Numeros[4] = "Cuatro";
        $Numeros[5] = "Cinco";
        $Numeros[6] = "Seis";
        $Numeros[7] = "Siete";
        $Numeros[8] = "Ocho";
        $Numeros[9] = "Nueve";
        $Numeros[10] = "Diez";
        $Numeros[11] = "Once";
        $Numeros[12] = "Doce";
        $Numeros[13] = "Trece";
        $Numeros[14] = "Catorce";
        $Numeros[15] = "Quince";
        $Numeros[20] = "Veinte";
        $Numeros[30] = "Treinta";
        $Numeros[40] = "Cuarenta";
        $Numeros[50] = "Cincuenta";
        $Numeros[60] = "Sesenta";
        $Numeros[70] = "Setenta";
        $Numeros[80] = "Ochenta";
        $Numeros[90] = "Noventa";
        $Numeros[100] = "Ciento";
        $Numeros[101] = "Quinientos";
        $Numeros[102] = "Setecientos";
        $Numeros[103] = "Novecientos";
        $tempo = ($Numeros[$VDecena]);
        return $tempo;
    }

    private function NumerosALetras($Numero)
    {


        $Decimales = 0;
        //$Numero = intval($Numero);
        $letras = "";

        while ($Numero != 0) {

            // '*---> Validaci�n si se pasa de 100 millones

            if ($Numero >= 1000000000) {
                $letras = "Error en Conversi�n a Letras";
                $Numero = 0;
                $Decimales = 0;
            }

            // '*---> Centenas de Mill�n
            if (($Numero < 1000000000) and ($Numero >= 100000000)) {
                if ((Intval($Numero / 100000000) == 1) and (($Numero - (Intval($Numero / 100000000) * 100000000)) < 1000000)) {
                    $letras .= (string)"Cien Millones ";
                } else {
                    $letras = $letras & $this->Centenas(Intval($Numero / 100000000));
                    if ((Intval($Numero / 100000000) <> 1) and (Intval($Numero / 100000000) <> 5) and (Intval($Numero / 100000000) <> 7) and (Intval($Numero / 100000000) <> 9)) {
                        $letras .= (string)"Cientos ";
                    } else {
                        $letras .= (string)" ";
                    }
                }
                $Numero = $Numero - (Intval($Numero / 100000000) * 100000000);
            }

            // '*---> Decenas de Mill�n
            if (($Numero < 100000000) and ($Numero >= 10000000)) {
                if (Intval($Numero / 1000000) < 16) {
                    $tempo = $this->Decenas(Intval($Numero / 1000000));
                    $letras .= (string)$tempo;
                    $letras .= (string)" Millones ";
                    $Numero = $Numero - (Intval($Numero / 1000000) * 1000000);
                } else {
                    $letras = $letras & $this->Decenas(Intval($Numero / 10000000) * 10);
                    $Numero = $Numero - (Intval($Numero / 10000000) * 10000000);
                    if ($Numero > 1000000) {
                        $letras .= $letras & " y ";
                    }
                }
            }

            // '*---> Unidades de Mill�n
            if (($Numero < 10000000) and ($Numero >= 1000000)) {
                $tempo = (Intval($Numero / 1000000));
                if ($tempo == 1) {
                    $letras .= (string)" Un Mill�n ";
                } else {
                    $tempo = $this->Unidades(Intval($Numero / 1000000));
                    $letras .= (string)$tempo;
                    $letras .= (string)" Millones ";
                }
                $Numero = $Numero - (Intval($Numero / 1000000) * 1000000);
            }

            // '*---> Centenas de Millar
            if (($Numero < 1000000) and ($Numero >= 100000)) {
                $tempo = (Intval($Numero / 100000));
                $tempo2 = ($Numero - ($tempo * 100000));
                if (($tempo == 1) and ($tempo2 < 1000)) {
                    $letras .= (string)"Cien Mil ";
                } else {
                    $tempo = $this->Centenas(Intval($Numero / 100000));
                    $letras .= (string)$tempo;
                    $tempo = (Intval($Numero / 100000));
                    if (($tempo <> 1) and ($tempo <> 5) and ($tempo <> 7) and ($tempo <> 9)) {
                        $letras .= (string)"Cientos ";
                    } else {
                        $letras .= (string)" ";
                    }
                }
                $Numero = $Numero - (Intval($Numero / 100000) * 100000);
            }

            // '*---> Decenas de Millar
            if (($Numero < 100000) and ($Numero >= 10000)) {
                $tempo = (Intval($Numero / 1000));
                if ($tempo < 16) {
                    $tempo = $this->Decenas(Intval($Numero / 1000));
                    $letras .= (string)$tempo;
                    $letras .= (string)" Mil ";
                    $Numero = $Numero - (Intval($Numero / 1000) * 1000);
                } else {
                    $tempo = $this->Decenas(Intval($Numero / 10000) * 10);
                    $letras .= (string)$tempo;
                    $Numero = $Numero - (Intval(($Numero / 10000)) * 10000);
                    if ($Numero > 1000) {
                        $letras .= (string)" y ";
                    } else {
                        $letras .= (string)" Mil ";
                    }
                }
            }


            // '*---> Unidades de Millar
            if (($Numero < 10000) and ($Numero >= 1000)) {
                $tempo = (Intval($Numero / 1000));
                if ($tempo == 1) {
                    //$letras .= (string) "un";
                } else {
                    $tempo = $this->Unidades(Intval($Numero / 1000));
                    $letras .= (string)$tempo;
                }
                $letras .= (string)" Mil ";
                $Numero = $Numero - (Intval($Numero / 1000) * 1000);
            }

            // '*---> Centenas
            if (($Numero < 1000) and ($Numero > 99)) {
                if ((Intval($Numero / 100) == 1) and (($Numero - (Intval($Numero / 100) * 100)) < 1)) {
                    $letras = $letras & "Cien ";
                } else {
                    $temp = (Intval($Numero / 100));
                    $l2 = $this->Centenas($temp);
                    $letras .= (string)$l2;
                    if ((Intval($Numero / 100) <> 1) and (Intval($Numero / 100) <> 5) and (Intval($Numero / 100) <> 7) and (Intval($Numero / 100) <> 9)) {
                        $letras .= "Cientos ";
                    } else {
                        $letras .= (string)" ";
                    }
                }

                $Numero = $Numero - (Intval($Numero / 100) * 100);
            }

            // '*---> Decenas
            if (($Numero < 100) and ($Numero > 9)) {
                if ($Numero < 16) {
                    $tempo = $this->Decenas(Intval($Numero));
                    $letras .= $tempo;
                    $Numero = $Numero - Intval($Numero);
                } else {
                    $tempo = $this->Decenas(Intval(($Numero / 10)) * 10);
                    $letras .= (string)$tempo;
                    $Numero = $Numero - (Intval(($Numero / 10)) * 10);
                    if ($Numero > 0.99) {
                        $letras .= (string)" y ";
                    }
                }
            }

            // '*---> Unidades
            if (($Numero < 10) and ($Numero > 0.99)) {
                $tempo = $this->Unidades(Intval($Numero));
                $letras .= (string)$tempo;

                $Numero = $Numero - Intval($Numero);
            }


            // '*---> Decimales
            if ($Decimales > 0) {

                // $letras .=(string) " con ";
                // $Decimales= $Decimales*100;
                // echo ("*");
                // $Decimales = number_format($Decimales, 2);
                // echo ($Decimales);
                // $tempo = $this->Decenas(Intval($Decimales));
                // $letras .= (string) $tempo;
                // $letras .= (string) "centavos";
            } else {
                if (($letras <> "Error en Conversi�n a Letras") and (strlen(Trim($letras)) > 0)) {
                    $letras .= (string)" ";
                }
            }
            return $letras;
        }
    }
    private function decimal($x, $Numero){
        $resultado=$x;
        $Decimales = explode('.',$Numero);
        $x = $this->NumerosALetras($Decimales[1]);
        $resultado=str_replace(" .",' con ',$resultado.'.'.$x);

        return $resultado;
    }

    //favor de teclear a mano la cantidad numerica a convertir y asignarla a $tt
    public function string($n)
    {
        $tt = $n;

        //$tt = $tt+0.009;
        $Numero = intval($tt);
        $Decimales = $tt - Intval($tt);
        $Decimales = $Decimales * 100;
        $Decimales = Intval($Decimales);
        $x = $this->NumerosALetras($Numero);
        $x = $this->decimal($x, $n);

        if ($n == 1) {
            $x = 'Uno';
        }
        return $x;
    }
}

