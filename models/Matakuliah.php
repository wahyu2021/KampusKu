<?php

class Matakuliah{
    private string $kodeMK;
    private string $namaMK;
    private int $sks;

    public function __construct(string $kodeMK, string $namaMK, int $sks){
        $this->kodeMK = $kodeMK;
        $this->namaMK = $namaMK;
        $this->sks = $sks;
    }

    public function getKodeMK(): string{
        return $this->kodeMK;
    }

    public function getNamaMK(): string{
        return $this->namaMK;
    }

    public function getSks(): int{
        return $this->sks;
    }

    public function setKodeMK(string $kodeMK): void{
        $this->kodeMK = $kodeMK;
    }

    public function setNamaMK(string $namaMK): void{
        $this->namaMK = $namaMK;
    }

    public function setSks(int $sks): void{
        $this->sks = $sks;
    }
}