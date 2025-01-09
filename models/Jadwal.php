<?php

class Jadwal {
    private string $kodeJadwal;
    private string $hari;
    private DateTime $waktuMulai;
    private DateTime $waktuSelesai;
    private string $kodeDosen;
    private string $namaDosen;
    private string $namaKelas;
    private string $kodeMK;
    private string $namaMK;
    private Database $db;

    public function __construct(Database $db, string $kodeJadwal, string $hari, DateTime $waktuMulai, DateTime $waktuSelesai, string $kodeDosen, string $kodeMK, string $namaKelas) {
        $this->db = $db;
        $this->kodeJadwal = $kodeJadwal;
        $this->hari = $hari;
        $this->waktuMulai = $waktuMulai;
        $this->waktuSelesai = $waktuSelesai;
        $this->kodeDosen = $kodeDosen;
        $this->kodeMK = $kodeMK;
        $this->namaKelas = $namaKelas;
        $this->setNamaDosen();
        $this->setNamaMK();
    }

    private function setNamaDosen(): void {
        $pdo = $this->db->getConnection();
        $stmt = $pdo->prepare("SELECT nama FROM dosen WHERE kode_dosen = :kode_dosen");
        $stmt->bindParam(":kode_dosen", $this->kodeDosen);
        $stmt->execute();
        $result = $stmt->fetch();
        $this->namaDosen = $result['nama'] ?? 'Unknown'; // Menangani jika data tidak ditemukan
    }

    private function setNamaMK(): void {
        $pdo = $this->db->getConnection();
        $stmt = $pdo->prepare("SELECT nama FROM matakuliah WHERE kode_mk = :kode_mk");
        $stmt->bindParam(":kode_mk", $this->kodeMK);
        $stmt->execute();
        $result = $stmt->fetch();
        $this->namaMK = $result['nama'] ?? 'Unknown'; // Menangani jika data tidak ditemukan
    }

    public function getKodeJadwal(): string {
        return $this->kodeJadwal;
    }

    public function getHari(): string {
        return $this->hari;
    }

    public function getWaktuMulai(): DateTime {
        return $this->waktuMulai;
    }

    public function getWaktuSelesai(): DateTime {
        return $this->waktuSelesai;
    }

    public function getKodeDosen(): string {
        return $this->kodeDosen;
    }

    public function getNamaDosen(): string {
        return $this->namaDosen;
    }

    public function getNamaKelas(): string {
        return $this->namaKelas;
    }

    public function getKodeMK(): string {
        return $this->kodeMK;
    }

    public function getNamaMK(): string {
        return $this->namaMK;
    }

    public function setKodeJadwal(string $kodeJadwal): void {
        $this->kodeJadwal = $kodeJadwal;
    }

    public function setHari(string $hari): void {
        $this->hari = $hari;
    }

    public function setWaktuMulai(DateTime $waktuMulai): void {
        $this->waktuMulai = $waktuMulai;
    }

    public function setWaktuSelesai(DateTime $waktuSelesai): void {
        $this->waktuSelesai = $waktuSelesai;
    }

    public function setKodeDosen(string $kodeDosen): void {
        $this->kodeDosen = $kodeDosen;
        $this->setNamaDosen(); // Memperbarui nama dosen
    }

    public function setKodeMK(string $kodeMK): void {
        $this->kodeMK = $kodeMK;
        $this->setNamaMK(); // Memperbarui nama matakuliah
    }

    public function setNamaKelas(string $namaKelas): void {
        $this->namaKelas = $namaKelas;
    }
}
