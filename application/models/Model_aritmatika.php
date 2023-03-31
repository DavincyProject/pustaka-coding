<?php

class Model_aritmatika extends CI_Model
{
    public $nilai1, $nilai2, $hasil;

    public function penjumlahan($n1, $n2)
    {
        $this->nilai1 = $n1;
        $this->nilai2 = $n2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}
