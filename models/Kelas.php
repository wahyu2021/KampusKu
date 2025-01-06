<?php

class Kelas{
    private $nama_kelas;

    public function __construct($nama_kelas){
        $this->nama_kelas = $nama_kelas;
    }

    public function getNamaKelas(){
        return $this->nama_kelas;
    }

    public function setNamaKelas($nama_kelas){
        $this->nama_kelas = $nama_kelas;
    }
}