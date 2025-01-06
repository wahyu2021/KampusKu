<?php

class Nilai {
    private string $kodeNilai;
    private string $nim;
    private string $namaMhs;
    private string $kodeMK;
    private string $namaMK;
    private float $tugas;
    private float $uts;
    private float $uas;
    private Database $db;

    public function __construct(Database $db, string $kodeNilai, string $nim, string $kodeMK, float $tugas, float $uts, float $uas) {
        $this->db = $db;
        $this->kodeNilai = $kodeNilai;
        $this->nim = $nim;
        $this->kodeMK = $kodeMK;
        $this->tugas = $tugas;
        $this->uts = $uts;
        $this->uas = $uas;
        $this->setNamaMhs();
        $this->setNamaMK();
    }

    private function setNamaMhs(): void {
        $pdo = $this->db->getConnection();
        $stmt = $pdo->prepare("SELECT nama FROM mahasiswa WHERE nim = :nim");
        $stmt->bindParam(":nim", $this->nim);
        $stmt->execute();
        $result = $stmt->fetch();
        $this->namaMhs = $result['nama'] ?? 'Unknown'; // Menangani jika data tidak ditemukan
    }

    private function setNamaMK(): void {
        $pdo = $this->db->getConnection();
        $stmt = $pdo->prepare("SELECT nama FROM matakuliah WHERE kode_mk = :kode_mk");
        $stmt->bindParam(":kode_mk", $this->kodeMK);
        $stmt->execute();
        $result = $stmt->fetch();
        $this->namaMK = $result['nama'] ?? 'Unknown'; // Menangani jika data tidak ditemukan
    }

    public function getKodeNilai(): string {
        return $this->kodeNilai;
    }

    public function getNim(): string {
        return $this->nim;
    }

    public function getNamaMhs(): string {
        return $this->namaMhs;
    }

    public function getKodeMK(): string {
        return $this->kodeMK;
    }

    public function getNamaMK(): string {
        return $this->namaMK;
    }

    public function getTugas(): float {
        return $this->tugas;
    }

    public function getUts(): float {
        return $this->uts;
    }

    public function getUas(): float {
        return $this->uas;
    }

    public function setKodeNilai(string $kodeNilai): void {
        $this->kodeNilai = $kodeNilai;
    }

    public function setNim(string $nim): void {
        $this->nim = $nim;
        $this->setNamaMhs(); // Memperbarui nama mahasiswa
    }

    public function setKodeMK(string $kodeMK): void {
        $this->kodeMK = $kodeMK;
        $this->setNamaMK(); // Memperbarui nama matakuliah
    }

    public function setTugas(float $tugas): void {
        $this->tugas = $tugas;
    }

    public function setUts(float $uts): void {
        $this->uts = $uts;
    }

    public function setUas(float $uas): void {
        $this->uas = $uas;
    }

    public function getNilaiAkhir(): float {
        return ($this->tugas * 0.2) + ($this->uts * 0.3) + ($this->uas * 0.5);
    }
}
