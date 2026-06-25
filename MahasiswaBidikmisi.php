<?php
require_once 'Mahasiswa.php';

class MahasiswaBidikmisi extends Mahasiswa {
    // Atribut Spesifik Anak
    private string $nomorKipKuliah;
    private float $danaSakuSubsidi;

    // Constructor
    public function __construct(int $idMahasiswa, string $namaMahasiswa, string $nim, int $semester, float $tarifUKTNominal, string $nomorKipKuliah, float $danaSakuSubsidi) {
        parent::__construct($idMahasiswa, $namaMahasiswa, $nim, $semester, $tarifUKTNominal);
        $this->nomorKipKuliah = $nomorKipKuliah;
        $this->danaSakuSubsidi = $danaSakuSubsidi;
    }

    // Implementasi Metode Abstrak
    public function hitungTagihanSemester(): float {
        return 0.0; // Bebas biaya UKT
    }

    public function tampilkanSpesifikasiAkademik(): void {
        echo "=== SPESIFIKASI MAHASISWA BIDIKMISI ===\n";
        echo "Nama: " . $this->namaMahasiswa . " | NIM: " . $this->nim . "\n";
        echo "No KIP-K: " . $this->nomorKipKuliah . " | Subsidi Saku: Rp " . number_format($this->danaSakuSubsidi, 2, ',', '.') . "\n";
    }

    /**
     * Method untuk mendapatkan query SQL khusus Mahasiswa Bidikmisi
     */
    public function getQuerySelectWhere(): string {
        return "SELECT id_mahasiswa, nama_mahasiswa, nim, semester, tarif_ukt_nominal, jenis_pembiayaan, nomor_kip_kuliah, dana_saku_subsidi 
                FROM tabel_mahasiswa 
                WHERE jenis_pembiayaan = 'Bidikmisi';";
    }
}