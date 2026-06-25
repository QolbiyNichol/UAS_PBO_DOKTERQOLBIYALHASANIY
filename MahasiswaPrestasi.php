<?php
require_once 'Mahasiswa.php';

class MahasiswaPrestasi extends Mahasiswa {
    // Atribut Spesifik Anak
    private string $namaInstansiBeasiswa;
    private float $minimalIpkSyarat;

    // Constructor
    public function __construct(int $idMahasiswa, string $namaMahasiswa, string $nim, int $semester, float $tarifUKTNominal, string $namaInstansiBeasiswa, float $minimalIpkSyarat) {
        parent::__construct($idMahasiswa, $namaMahasiswa, $nim, $semester, $tarifUKTNominal);
        $this->namaInstansiBeasiswa = $namaInstansiBeasiswa;
        $this->minimalIpkSyarat = $minimalIpkSyarat;
    }

    // Implementasi Metode Abstrak
    public function hitungTagihanSemester(): float {
        return $this->tarifUKTNominal;
    }

    public function tampilkanSpesifikasiAkademik(): void {
        echo "=== SPESIFIKASI MAHASISWA PRESTASI ===\n";
        echo "Nama: " . $this->namaMahasiswa . " | NIM: " . $this->nim . "\n";
        echo "Beasiswa: " . $this->namaInstansiBeasiswa . " | Syarat IPK: " . $this->minimalIpkSyarat . "\n";
    }

    /**
     * Method untuk mendapatkan query SQL khusus Mahasiswa Prestasi
     */
    public function getQuerySelectWhere(): string {
        return "SELECT id_mahasiswa, nama_mahasiswa, nim, semester, tarif_ukt_nominal, jenis_pembiayaan, nama_instansi_beasiswa, minimal_ipk_syarat 
                FROM tabel_mahasiswa 
                WHERE jenis_pembiayaan = 'Prestasi';";
    }
}