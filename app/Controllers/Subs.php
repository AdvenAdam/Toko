<?php

namespace App\Controllers;

use \App\Models\SubsModel;
use CodeIgniter\Config\Config;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\xlsx;


class Subs extends BaseController
{
    protected $subsModel;
    public function __construct()
    {
        $this->subsModel = new SubsModel();
    }
    // Belum dieksekusi ke view dashboard admin
    public function index()
    {
        $data =
            [
                'title' => 'Daftar Subscribe',
                'Sub' => $this->subsModel->getRating()
            ];


        return view('pegawai/index', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'emailsub' => [
                'rules' => 'required|is_unique[tbl_subscribe.emailsub]|valid_email',
                'label' => 'E-mail',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah ada',
                    'valid_email' => 'Masukan {field} yang valid'
                ]
            ],


        ])) {
            return redirect()->to('/#subscribe')->withInput();
        }
        $this->subsModel->save([
            'emailsub'     => $this->request->getVar('emailsub'),
        ]);
        session()->setFlashdata('pesan2', 'Email Berhasil ditambahkan');
        return redirect()->to('/#subscribe');
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
