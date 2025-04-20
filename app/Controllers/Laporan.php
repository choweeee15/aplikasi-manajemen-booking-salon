<?php

namespace App\Controllers;

use App\Models\LaporanModel;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Laporan extends BaseController
{
    protected $laporanModel;

    public function __construct()
    {
        $this->laporanModel = new LaporanModel();
    }

    public function cetak()
    {
        $awal = $this->request->getPost('tanggal_awal');
        $akhir = $this->request->getPost('tanggal_akhir');
        $data['bookings'] = $this->laporanModel->getLaporan($awal, $akhir);

        return view('cetak', $data);
    }

    public function pdf()
    {
        $awal = $this->request->getPost('tanggal_awal');
        $akhir = $this->request->getPost('tanggal_akhir');
        $data['bookings'] = $this->laporanModel->getLaporan($awal, $akhir);

        $dompdf = new Dompdf();
        $html = view('pdf', $data);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream('laporan_pembayaran.pdf', ['Attachment' => false]);
    }

    public function excel()
{
    $awal = $this->request->getPost('tanggal_awal');
    $akhir = $this->request->getPost('tanggal_akhir');
    $bookings = $this->laporanModel->getLaporan($awal, $akhir);

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Menambahkan header kolom
    $sheet->setCellValue('A1', 'No');
    $sheet->setCellValue('B1', 'Pengguna');
    $sheet->setCellValue('C1', 'Tanggal');
    $sheet->setCellValue('D1', 'Lapangan');
    $sheet->setCellValue('E1', 'Total Harga');
    $sheet->setCellValue('F1', 'Metode Pembayaran');
    $sheet->setCellValue('G1', 'Bukti Pembayaran');

    // Menambahkan data
    $no = 1;
    $row = 2;
    $totalPendapatan = 0;

    foreach ($bookings as $b) {
        $sheet->setCellValue('A' . $row, $no++);
        $sheet->setCellValue('B' . $row, $b['nama_pengguna'] ?? '-');
        $sheet->setCellValue('C' . $row, date('d-m-Y', strtotime($b['tanggal'])));
        $sheet->setCellValue('D' . $row, $b['lapangan_nama'] ?? '-');
        $sheet->setCellValue('E' . $row, 'Rp ' . number_format($b['total_harga'], 0, ',', '.'));
        $sheet->setCellValue('F' . $row, ucfirst($b['metode_pembayaran']));

        // Menambahkan link untuk bukti pembayaran
        if (!empty($b['bukti_pembayaran'])) {
            $buktiUrl = base_url('uploads/bukti/' . $b['bukti_pembayaran']);
            $sheet->setCellValue('G' . $row, 'Lihat Bukti');
            // Membuat link ke file bukti pembayaran
            $sheet->getCell('G' . $row)->getHyperlink()->setUrl($buktiUrl);
        } else {
            $sheet->setCellValue('G' . $row, 'Tidak Ada');
        }

        $totalPendapatan += $b['total_harga'];
        $row++;
    }

    // Menambahkan baris total pendapatan
    $sheet->setCellValue('A' . $row, 'Total Pendapatan:');
    $sheet->setCellValue('E' . $row, 'Rp ' . number_format($totalPendapatan, 0, ',', '.'));

    // Menambahkan border pada seluruh tabel
    $styleArray = [
        'borders' => [
            'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                'color' => ['argb' => '000000'],
            ],
        ],
        'alignment' => [
            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, // Rata tengah
            'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,   // Rata tengah vertikal
        ],
    ];

    // Menyapkan range tabel
    $sheet->getStyle('A1:G' . $row)->applyFromArray($styleArray);

    // Mengatur format kolom agar otomatis menyesuaikan ukuran
    $sheet->getColumnDimension('A')->setAutoSize(true);
    $sheet->getColumnDimension('B')->setAutoSize(true);
    $sheet->getColumnDimension('C')->setAutoSize(true);
    $sheet->getColumnDimension('D')->setAutoSize(true);
    $sheet->getColumnDimension('E')->setAutoSize(true);
    $sheet->getColumnDimension('F')->setAutoSize(true);
    $sheet->getColumnDimension('G')->setAutoSize(true);

    // Mengunduh file Excel
    $writer = new Xlsx($spreadsheet);
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="laporan_pembayaran.xlsx"');
    header('Cache-Control: max-age=0');
    $writer->save('php://output');
    exit();
}

}
