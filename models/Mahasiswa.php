<?php

class Mahasiswa{
    private string $nim;
    private string $nama;
    private DateTime $tglLahir;
    private string $jenisKelamin;
    private string $alamat;
    private string $noTelepon;
    private string $namaKelas;

    public function __construct(string $nim, string $nama, DateTime $tglLahir, string $jenisKelamin, string $alamat, string $noTelepon, string $namaKelas){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->tglLahir = $tglLahir;
        $this->jenisKelamin = $jenisKelamin;
        $this->alamat = $alamat;
        $this->noTelepon = $noTelepon;
        $this->namaKelas = $namaKelas;
    }

    public function getNim(): string{
        return $this->nim;
    }

    public function getNama(): string{
        return $this->nama;
    }

    public function getTglLahir(): DateTime{
        return $this->tglLahir;
    }

    public function getJenisKelamin(): string{
        return $this->jenisKelamin;
    }

    public function getAlamat(): string{
        return $this->alamat;
    }

    public function getNoTelepon(): string{
        return $this->noTelepon;
    }

    public function getNamaKelas(): string{
        return $this->namaKelas;
    }

    public function setNim(string $nim): void{
        $this->nim = $nim;
    }

    public function setNama(string $nama): void{
        $this->nama = $nama;
    }

    public function setTglLahir(DateTime $tglLahir): void{
        $this->tglLahir = $tglLahir;
    }

    public function setJenisKelamin(string $jenisKelamin): void{
        $this->jenisKelamin = $jenisKelamin;
    }

    public function setAlamat(string $alamat): void{
        $this->alamat = $alamat;
    }

    public function setNoTelepon(string $noTelepon): void{
        $this->noTelepon = $noTelepon;
    }

    public function setNamaKelas(string $namaKelas): void{
        $this->namaKelas = $namaKelas;
    }

}