<?php

class Dosen{
    private string $kodeDosen;
    private string $nama;
    private string $jenisKelamin;
    private DateTime $tglLahir;
    private string $alamat;
    private string $noTelepon;

    public function __construct(string $kodeDosen, string $nama, string $jenisKelamin, DateTime $tglLahir, string $alamat, string $noTelepon){
        $this->kodeDosen = $kodeDosen;
        $this->nama = $nama;
        $this->jenisKelamin = $jenisKelamin;
        $this->tglLahir = $tglLahir;
        $this->alamat = $alamat;
        $this->noTelepon = $noTelepon;
    }

    public function getKodeDosen(): string{
        return $this->kodeDosen;
    }

    public function getNama(): string{
        return $this->nama;
    }

    public function getJenisKelamin(): string{
        return $this->jenisKelamin;
    }

    public function getTglLahir(): DateTime{
        return $this->tglLahir;
    }

    public function getAlamat(): string{
        return $this->alamat;
    }

    public function getNoTelepon(): string{
        return $this->noTelepon;
    }

    public function setKodeDosen(string $kodeDosen): void{
        $this->kodeDosen = $kodeDosen;
    }

    public function setNama(string $nama): void{
        $this->nama = $nama;
    }

    public function setJenisKelamin(string $jenisKelamin): void{
        $this->jenisKelamin = $jenisKelamin;
    }

    public function setTglLahir(DateTime $tglLahir): void{
        $this->tglLahir = $tglLahir;
    }

    public function setAlamat(string $alamat): void{
        $this->alamat = $alamat;
    }

    public function setNoTelepon(string $noTelepon): void{
        $this->noTelepon = $noTelepon;
    }

    public function getAge(): int{
        $now = new DateTime();
        $diff = $this->tglLahir->diff($now);
        return $diff->y;
    }

    public function getGender(): string{
        return $this->jenisKelamin == 'L' ? 'Laki-laki' : 'Perempuan';
    }
}