<?php
require_once 'Mahasiswa.php';

class MahasiswaBidikmisi extends Mahasiswa {
    private string $nomorKipKuliah;
    private float $danaSakuSubsidi;

    public function __construct(int $idMahasiswa, string $namaMahasiswa, string $nim, int $semester, float $tarifUKTNominal, string $nomorKipKuliah, float $danaSakuSubsidi) {
        parent::__construct($idMahasiswa, $namaMahasiswa, $nim, $semester, $tarifUKTNominal);
        $this->nomorKipKuliah = $nomorKipKuliah;
        $this->danaSakuSubsidi = $danaSakuSubsidi;
    }

    /**
     * METHOD OVERRIDING
     * Logika: Bebas biaya kuliah ditanggung KIP-Kuliah (0)
     */
    public function hitungTagihanSemester(): float {
        return 0.00;
    }

    public function tampilkanSpesifikasiAkademik(): void {
        echo "=== SPESIFIKASI MAHASISWA BIDIKMISI ===\n";
        echo "Nama: " . $this->namaMahasiswa . " | NIM: " . $this->nim . "\n";
        echo "No KIP-K: " . $this->nomorKipKuliah . " | Subsidi Saku: Rp " . number_format($this->danaSakuSubsidi, 2, ',', '.') . "\n";
        echo "Tagihan Akhir: Rp " . number_format($this->hitungTagihanSemester(), 2, ',', '.') . " (GRATIS NEGARA)\n";
        echo "----------------------------------------------\n";
    }

    public function getQuerySelectWhere(): string {
        return "SELECT id_mahasiswa, nama_mahasiswa, nim, semester, tarif_ukt_nominal, jenis_pembiayaan, nomor_kip_kuliah, dana_saku_subsidi FROM tabel_mahasiswa WHERE jenis_pembiayaan = 'Bidikmisi';";
    }
}