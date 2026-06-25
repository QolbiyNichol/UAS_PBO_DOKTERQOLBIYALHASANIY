<?php

/**
 * Abstract Class Mahasiswa
 * Merepresentasikan entitas dasar mahasiswa yang disesuaikan dengan 
 * atribut global pada basis data DB_UAS_PBO_TI1D_DOKTERQOLBIYALHASANIY.
 */
abstract class Mahasiswa {
    
    // Properti/Atribut Terenkapsulasi (Protected)
    protected int $idMahasiswa;
    protected string $namaMahasiswa;
    protected string $nim;
    protected int $semester;
    protected float $tarifUKTNominal; // float di PHP digunakan untuk bilangan desimal (DECIMAL)

    // Constructor untuk inisialisasi data dari database
    public function __construct(int $idMahasiswa, string $namaMahasiswa, string $nim, int $semester, float $tarifUKTNominal) {
        $this->idMahasiswa = $idMahasiswa;
        $this->namaMahasiswa = $namaMahasiswa;
        $this->nim = $nim;
        $this->semester = $semester;
        $this->tarifUKTNominal = $tarifUKTNominal;
    }

    // ================= GETTER AND SETTER =================
    
    public function getIdMahasiswa(): int {
        return $this->idMahasiswa;
    }

    public function setIdMahasiswa(int $idMahasiswa): void {
        $this->idMahasiswa = $idMahasiswa;
    }

    public function getNamaMahasiswa(): string {
        return $this->namaMahasiswa;
    }

    public function setNamaMahasiswa(string $namaMahasiswa): void {
        $this->namaMahasiswa = $namaMahasiswa;
    }

    public function getNim(): string {
        return $this->nim;
    }

    public function setNim(string $nim): void {
        $this->nim = $nim;
    }

    public function getSemester(): int {
        return $this->semester;
    }

    public function setSemester(int $semester): void {
        $this->semester = $semester;
    }

    public function getTarifUKTNominal(): float {
        return $this->tarifUKTNominal;
    }

    public function setTarifUKTNominal(float $tarifUKTNominal): void {
        $this->tarifUKTNominal = $tarifUKTNominal;
    }

    // ================= METODE ABSTRAK =================
    
    /**
     * Menghitung total tagihan semester mahasiswa berdasarkan jenis pembiayaannya.
     * Wajib diimplementasikan oleh kelas anak.
     */
    abstract public function hitungTagihanSemester(): float;

    /**
     * Menampilkan informasi spesifik akademik sesuai dengan kategori pembiayaan mahasiswa.
     * Wajib diimplementasikan oleh kelas anak.
     */
    abstract public function tampilkanSpesifikasiAkademik(): void;
}