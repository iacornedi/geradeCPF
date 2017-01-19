<?php
/* Gerador de CPF
 *
 * Um simples gerador de CPFs validos.
 * A estrutura do codigo é bem simples, fiz mais por
 *curiosidade do que por necessidade. Talvez seja util
 *para alguém de alguma forma.
 *
 */
//Insira 9 digitos qualquer.
$cpf = '142584698';
/*Primeiro digito verificador
 *Calculo para o primeiro digito verificador
 */
$a = substr($cpf, 0,1) * 10;
$b = substr($cpf, 1,1) * 9;
$c = substr($cpf, 2,1) * 8;
$d = substr($cpf, 3,1) * 7;
$e = substr($cpf, 4,1) * 6;
$f = substr($cpf, 5,1) * 5;
$g = substr($cpf, 6,1) * 4;
$h = substr($cpf, 7,1) * 3;
$i = substr($cpf, 8,1) * 2;
$DigitVerific1 = ($a + $b + $c + $d + $e + $f + $g + $h + $i) % 11;
if ($DigitVerific1 < 2)
{
    $DigitVerific1 = 0;
}
else
{
    $DigitVerific1 = 11 - $DigitVerific1;
}
/*Segundo digito verificador
 *Calculo para o segundo digito verificador
 */
$a = substr($cpf, 0,1) * 11;
$b = substr($cpf, 1,1) * 10;
$c = substr($cpf, 2,1) * 9;
$d = substr($cpf, 3,1) * 8;
$e = substr($cpf, 4,1) * 7;
$f = substr($cpf, 5,1) * 6;
$g = substr($cpf, 6,1) * 5;
$h = substr($cpf, 7,1) * 4;
$i = substr($cpf, 8,1) * 3;
$j = $DigitVerific1 * 2;
$DigitVerific2 = ($a + $b + $c + $d + $e + $f + $g + $h + $i + $j) % 11;
if ($DigitVerific2 < 2)
{
    $DigitVerific2 = 0;
}
else
{
    $DigitVerific2 = 11 - $DigitVerific2;
}
/*
 *Para ficar bunitinho =)
 */
$cpf .= $DigitVerific1;
$cpf .= $DigitVerific2;
echo "------------------\n";
echo "|CPF: $cpf|\n";
echo "------------------\n";
?>