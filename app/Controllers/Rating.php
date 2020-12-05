<?php

namespace App\Controllers;

use \App\Models\RatingModel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Files\UploadedFile;
use CodeIgniter\Config\I18n;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\xlsx;


class Rating extends BaseController
{
    protected $ratingModel;
    public function __construct()
    {
        $this->ratingModel = new RatingModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Daftar Rating&Review',
                'rating' => $this->ratingModel->getRating()
            ];


        return view('pegawai/index', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'email' => [
                'rules' => 'required|is_unique[tbl_rating.email]',
                'label' => 'E-mail',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah ada'
                ]
            ],


        ])) {
            return redirect()->to('/ #contact')->withInput();
        }
        $this->ratingModel->save([
            'email'     => $this->request->getVar('email'),
            'nama'      => $this->request->getVar('nama'),
            'no_hp'     => $this->request->getVar('no_hp'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'rating'    => $this->request->getVar('star'),
            'pesan'     => $this->request->getVar('pesan'),
        ]);
        session()->setFlashdata('pesan', 'Terima Kasih Atas Review anda ');
        return redirect()->to('/#contact');
    }
    // public function delete($id)
    // {
    //     $this->pegawaiModel->delete($id);
    //     session()->setFlashdata('pesan', 'Data Berhasil dihapus');
    //     return redirect()->to('/pegawai');
    // }

    // public function excel()
    // {

    //     $spreadsheet = new Spreadsheet();
    //     $sheet = $spreadsheet->getActiveSheet();
    //     $sheet->setCellValue('A1', 'No');
    //     $sheet->setCellValue('B1', 'No Pegawai');
    //     $sheet->setCellValue('C1', 'Nama');
    //     $sheet->setCellValue('D1', 'Alamat');
    //     $sheet->setCellValue('E1', 'No HP');
    //     $sheet->setCellValue('F1', 'Email');
    //     $sheet->setCellValue('G1', 'Gaji Pokok');
    //     $sheet->setCellValue('H1', 'Jabatan');
    //     $sheet->setCellValue('I1', 'Foto');
    //     $sheet->setCellValue('J1', 'Created At');
    //     $sheet->setCellValue('K1', 'Updated At');

    //     $pegawai = $this->pegawaiModel->getPegawai();
    //     $no = 1;
    //     $x = 2;
    //     foreach ($pegawai as $val) :
    //         $sheet->setCellValue('A' . $x, $no++);
    //         $sheet->setCellValue('B' . $x, $val['no_pegawai']);
    //         $sheet->setCellValue('C' . $x, $val['nama']);
    //         $sheet->setCellValue('D' . $x, $val['alamat']);
    //         $sheet->setCellValue('E' . $x, $val['no_hp']);
    //         $sheet->setCellValue('F' . $x, $val['email']);
    //         $sheet->setCellValue('G' . $x, $val['gaji_pokok']);
    //         $sheet->setCellValue('H' . $x, $val['jabatan']);
    //         $sheet->setCellValue('I' . $x, $val['foto']);
    //         $sheet->setCellValue('J' . $x, $val['created_at']);
    //         $sheet->setCellValue('K' . $x, $val['updated_at']);
    //         $x++;
    //     endforeach;
    //     $writer = new xlsx($spreadsheet);
    //     $filename = 'laporan-data-pegawai';
    //     header('Content-Type: application/vnd.ms-excel');
    //     header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
    //     header('Cache-Control: max-age=0');

    //     $writer->save('php://output');
    // }
    // public function cetak()
    // {
    //     $data = [
    //         'title' => 'Cetak Daftar Pegawai',
    //         'pegawai' => $this->pegawaiModel->getPegawai()
    //     ];

    //     return view('/pegawai/cetak', $data);
    // }
}
