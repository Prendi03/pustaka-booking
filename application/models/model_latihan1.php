<?php
class model_latihan extends CI_model
{
    //membuat variable untuk menampung nilai
    public $nilai1, $nilai2, $hasil;

    //method penjumlahan 
    public function jumlah($nil1 = null, $nil2 = null)
    {
        $this->nilai1 = $nil1;
        $this->nilai2 = $nil2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }

}