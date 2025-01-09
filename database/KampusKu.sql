-- Active: 1728734776356@@127.0.0.1@3306@sistem_kampus
-- Membuat database
CREATE DATABASE sistem_kampus;
USE sistem_kampus;

DROP DATABASE sistem_kampus;

-- Tabel kelas
CREATE TABLE kelas (
    nama_kelas CHAR(4) PRIMARY KEY NOT NULL
);

-- Tabel dosen
CREATE TABLE dosen (
    kode_dosen CHAR(4) PRIMARY KEY NOT NULL,
    nama_dosen VARCHAR(100) NOT NULL,
    jenis_kelamin ENUM('L', 'P') NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat TEXT NOT NULL,
    no_telepon VARCHAR(15) NOT NULL
);

-- Tabel matakuliah
CREATE TABLE matakuliah (
    kode_mk CHAR(4) PRIMARY KEY NOT NULL,
    nama_mk VARCHAR(100) NOT NULL,
    jml_sks INT NOT NULL
);

-- Tabel mahasiswa
CREATE TABLE mahasiswa (
    nim CHAR(12) PRIMARY KEY NOT NULL,
    nama_mhs VARCHAR(100) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    jenis_kelamin ENUM('L', 'P') NOT NULL,
    alamat TEXT NOT NULL,
    no_telepon VARCHAR(15) NOT NULL,
    nama_kelas CHAR(4),
    FOREIGN KEY (nama_kelas) REFERENCES kelas(nama_kelas) ON DELETE SET NULL
);

-- Tabel jadwal
CREATE TABLE jadwal (
    kode_jadwal CHAR(10) PRIMARY KEY NOT NULL,
    hari ENUM('Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu') NOT NULL,
    waktu_mulai TIME NOT NULL,
    waktu_berakhir TIME NOT NULL,
    kode_dosen CHAR(4),
    nama_kelas CHAR(4),
    kode_mk CHAR(4),
    FOREIGN KEY (kode_dosen) REFERENCES dosen(kode_dosen) ON DELETE SET NULL,
    FOREIGN KEY (nama_kelas) REFERENCES kelas(nama_kelas) ON DELETE SET NULL,
    FOREIGN KEY (kode_mk) REFERENCES matakuliah(kode_mk) ON DELETE SET NULL
);

-- Tabel nilai
CREATE TABLE nilai (
    kode_nilai CHAR(4) PRIMARY KEY NOT NULL,
    tugas DECIMAL(5,2) NOT NULL,
    uts DECIMAL(5,2) NOT NULL,
    uas DECIMAL(5,2) NOT NULL,
    kode_mk CHAR(4),
    nim CHAR(12),
    FOREIGN KEY (kode_mk) REFERENCES matakuliah(kode_mk) ON DELETE SET NULL,
    FOREIGN KEY (nim) REFERENCES mahasiswa(nim) ON DELETE SET NULL
);

