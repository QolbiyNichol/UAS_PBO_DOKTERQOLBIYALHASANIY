<?php
require_once 'Mahasiswa.php';

class MahasiswaPrestasi extends Mahasiswa {
    private string $namaInstansiBeasiswa;
    private float $minimalIpkSyarat;

    public function __construct(int $idMahasiswa, string $namaMahasiswa, string $nim, int $semester, float $tarifUKTNominal, string $namaInstansiBeasiswa, float $minimalIpkSyarat) {
        parent::__construct($idMahasiswa, $namaMahasiswa, $nim, $semester, $tarifUKTNominal);
        $this->namaInstansiBeasiswa = $namaInstansiBeasiswa;
        $this->minimalIpkSyarat = $minimalIpkSyarat;
    }

    /**
     * METHOD OVERRIDING
     * Logika: Diskon 75% -> Hanya bayar 25% dari tarif asli
     */
    public function hitungTagihanSemester(): float {
        return $this->tarifUKTNominal * 0.25;
    }

    public function tampilkanSpesifikasiAkademik(): void {
        echo "=== SPESIFIKASI MAHASISWA PRESTASI ===\n";
        echo "Nama: " . $this->namaMahasiswa . " | NIM: " . $this->nim . "\n";
        echo "Beasiswa: " . $this->namaInstansiBeasiswa . " | Syarat IPK: " . $this->minimalIpkSyarat . "\n";
        echo "Tarif Asli: Rp " . number_format($this->tarifUKTNominal, 2, ',', '.') . "\n";
        echo "Tagihan Akhir (Diskon 75%): Rp " . number_format($this->hitungTagihanSemester(), 2, ',', '.') . "\n";
        echo "----------------------------------------------\n";
    }

    public function getQuerySelectWhere(): string {
        return "SELECT id_mahasiswa, nama_mahasiswa, nim, semester, tarif_ukt_nominal, jenis_pembiayaan, nama_instansi_beasiswa, minimal_ipk_syarat FROM tabel_mahasiswa WHERE jenis_pembiayaan = 'Prestasi';";
    }
}