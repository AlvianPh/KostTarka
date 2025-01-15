<?php

namespace App\Controllers;

use App\Models\BuktiBayar;

use Dompdf\Dompdf;

use Dompdf\Options;

class LaporanKeuangan extends BaseController
{
    protected $buktiBayarModel;
    public function __construct()
    {
        $this->buktiBayarModel = new BuktiBayar();
    }

    public function index()
    {
        $data = [
            'title' => 'Laporan',
        ];

        $data['bukti_riwayat'] = $this->buktiBayarModel->getPembayaranSuccess();

        echo view('template/headerPemilik', $data);
        echo view('laporan', $data); 
        echo view('template/footer');
    }

    public function cetakPdf()
    {
        $awal = $this->request->getVar('awal');
        $akhir = $this->request->getVar('akhir');
        

        // Validasi input
        if (empty($awal) || empty($akhir)) {
            return redirect()->back()->with('error', 'Tanggal awal dan akhir harus diisi.');
        }

        // Ambil data laporan
        $dataLaporan = $this->buktiBayarModel->getLaporan($awal, $akhir);

        // Inisialisasi totalJumlah
        $totalJumlah = 0;

        // Menjumlahkan nilai dari kolom 'jumlah'
        foreach ($dataLaporan as $laporan) {
            $totalJumlah += $laporan['jumlah']; // Menjumlahkan jumlah
        }

        // Siapkan data untuk dikirim ke view
        $data = [
            'dataLaporan' => $dataLaporan,
            'awal' => $awal,
            'akhir' => $akhir,
            'totalJumlah' => $totalJumlah, // Tambahkan totalJumlah ke data
        ];

        // Generate HTML dari view
        $html = view('cetakPdf', $data);

        // Konfigurasi Dompdf
        $options = new Options();
        $options->set('isRemoteEnabled', true); // Izinkan pemrosesan resource eksternal
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait'); // Atur ukuran dan orientasi kertas
        $dompdf->render();

        // Kirim file PDF ke browser
        $dompdf->stream("laporan_keuangan.pdf", ["Attachment" => 0]); // Attachment 0 = langsung tampil di browser
    }
    
}