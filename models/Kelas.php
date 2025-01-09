<?php

class Kelas{
    private string $namaKelas;

    public function __construct(string $namaKelas){
        $this->namaKelas = $namaKelas;
    }

    public function getNamaKelas(): string{
        return $this->namaKelas;
    }

    public function setNamaKelas(string $namaKelas): void{
        $this->namaKelas = $namaKelas;
    }
}