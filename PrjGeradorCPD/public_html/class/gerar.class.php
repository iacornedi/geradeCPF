<?php
/* Gerador de CPF
 *
 * Um simples gerador de CPFs validos.
 * A estrutura do codigo é bem simples, fiz mais por
 *curiosidade do que por necessidade. Talvez seja util
 *para alguém de alguma forma.
 *
 */
class CPF{
    public $cpf;    
    
    function gerarDigitos($gerarcpf){
        $this->cpf = $gerarcpf;
        /*Primeiro digito verificador
         *Calculo para o primeiro digito verificador
         */
        $a = substr($this->cpf, 0,1) * 10;
        $b = substr($this->cpf, 1,1) * 9;
        $c = substr($this->cpf, 2,1) * 8;
        $d = substr($this->cpf, 3,1) * 7;
        $e = substr($this->cpf, 4,1) * 6;
        $f = substr($this->cpf, 5,1) * 5;
        $g = substr($this->cpf, 6,1) * 4;
        $h = substr($this->cpf, 7,1) * 3;
        $i = substr($this->cpf, 8,1) * 2;
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
        $a = substr($this->cpf, 0,1) * 11;
        $b = substr($this->cpf, 1,1) * 10;
        $c = substr($this->cpf, 2,1) * 9;
        $d = substr($this->cpf, 3,1) * 8;
        $e = substr($this->cpf, 4,1) * 7;
        $f = substr($this->cpf, 5,1) * 6;
        $g = substr($this->cpf, 6,1) * 5;
        $h = substr($this->cpf, 7,1) * 4;
        $i = substr($this->cpf, 8,1) * 3;
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
        $this->cpf .= $DigitVerific1;
        $this->cpf .= $DigitVerific2;
        
        //echo "RESULTADO $this->cpf";
    }   
}
?>