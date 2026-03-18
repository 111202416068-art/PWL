<?php
class mahasiswa
{
    private $nim, $makul;
    public $nama;

    public function setData ($nim, $nama, $makul)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->makul = $makul;
    }

    public function getData()
    {
        return [
            $this->nim, 
            $this->nama, 
            $this->makul
        ];
    }
}