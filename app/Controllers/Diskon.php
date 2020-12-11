<?php

namespace App\Controllers;

use \App\Models\CasingModel;
use \App\Models\MemoriModel;
use \App\Models\MotherboardModel;
use \App\Models\PendinginModel;
use \App\Models\ProcesorModel;
use \App\Models\PsuModel;
use \App\Models\RamModel;
use \App\Models\VgaModel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Files\UploadedFile;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\xlsx;

if (session()->get('level') <> 'Accountant') {
    return redirect()->to('/Dashboard');
}
class Diskon  extends BaseController
{
    protected $casingModel;
    protected $memoriModel;
    protected $motherboardModel;
    protected $pendinginModel;
    protected $procesorModel;
    protected $psuModel;
    protected $ramModel;
    protected $vgaModel;

    public function __construct()
    {
        $this->casingModel = new CasingModel();
        $this->memoriModel = new MemoriModel();
        $this->motherboardModel = new MotherboardModel();
        $this->pendinginModel = new PendinginModel();
        $this->procesorModel = new ProcesorModel();
        $this->psuModel = new PsuModel();
        $this->ramModel = new RamModel();
        $this->vgaModel = new VgaModel();
    }
    // Diskon Casing
    public function indexCasing()
    {
        $data =
            [
                'title' => 'Daftar Casing',
                'validation' => \Config\Services::validation(),
                'casing' => $this->casingModel->getCasing()
            ];

        return view('diskon/Casing', $data);
    }
    public function updateCasing($id)
    {
        if (!$this->validate([
            'diskon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'berlaku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],


        ])) {

            return redirect()->to('/diskon/Casing/' . $this->request->getVar('id'))->withInput();
        }
        $hargaLama = intval($this->request->getVar('harga'));
        $diskon = intval($this->request->getVar('diskon'));
        $this->casingModel->save([
            'id' => $id,
            'harga_new' => $hargaLama - ($hargaLama * $diskon / 100),
            'diskon' => $diskon,
            'berlaku' => $this->request->getVar('berlaku')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/diskon/indexCasing');
    }
    public function excelCasing()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Merk');
        $sheet->setCellValue('C1', 'Nama');
        $sheet->setCellValue('D1', 'Harga Lama');
        $sheet->setCellValue('E1', 'Diskon(%)');
        $sheet->setCellValue('F1', 'Harga Baru');
        $sheet->setCellValue('G1', 'Stok');
        $sheet->setCellValue('H1', 'Berlaku');
        $sheet->setCellValue('I1', 'Created At');
        $sheet->setCellValue('J1', 'Updated At');

        $casing = $this->casingModel->getCasing();
        $no = 1;
        $x = 2;
        foreach ($casing as $val) :
            $sheet->setCellValue('A' . $x, $no++);
            $sheet->setCellValue('B' . $x, $val['merk']);
            $sheet->setCellValue('C' . $x, $val['nama']);
            $sheet->setCellValue('D' . $x, $val['harga']);
            $sheet->setCellValue('E' . $x, $val['diskon']);
            $sheet->setCellValue('F' . $x, $val['harga_new']);
            $sheet->setCellValue('G' . $x, $val['stok']);
            $sheet->setCellValue('H' . $x, $val['berlaku']);
            $sheet->setCellValue('I' . $x, $val['created_at']);
            $sheet->setCellValue('J' . $x, $val['updated_at']);
            $x++;
        endforeach;
        $writer = new xlsx($spreadsheet);
        $filename = 'laporan-data-diskon-Casing';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    //Diskon Memory
    public function indexMemori()
    {
        $data =
            [
                'title' => 'Daftar Memori',
                'validation' => \Config\Services::validation(),
                'memori' => $this->memoriModel->getMemori()
            ];

        return view('diskon/Memori', $data);
    }
    public function updateMemori($id)
    {
        if (!$this->validate([
            'diskon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'berlaku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],


        ])) {

            return redirect()->to('/diskon/Memori/' . $this->request->getVar('id'))->withInput();
        }
        $hargaLama = intval($this->request->getVar('harga'));
        $diskon = intval($this->request->getVar('diskon'));
        $this->memoriModel->save([
            'id' => $id,
            'harga_new' => $hargaLama - ($hargaLama * $diskon / 100),
            'diskon' => $diskon,
            'berlaku' => $this->request->getVar('berlaku')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/diskon/indexMemori');
    }
    public function excelMemori()
    {

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Merk');
        $sheet->setCellValue('C1', 'Nama');
        $sheet->setCellValue('D1', 'Harga Lama');
        $sheet->setCellValue('E1', 'Diskon(%)');
        $sheet->setCellValue('F1', 'Harga Baru');
        $sheet->setCellValue('G1', 'Stok');
        $sheet->setCellValue('H1', 'Berlaku');
        $sheet->setCellValue('I1', 'Created At');
        $sheet->setCellValue('J1', 'Updated At');

        $memori = $this->memoriModel->getMemori();
        $no = 1;
        $x = 2;
        foreach ($memori as $val) :
            $sheet->setCellValue('A' . $x, $no++);
            $sheet->setCellValue('B' . $x, $val['merk']);
            $sheet->setCellValue('C' . $x, $val['nama']);
            $sheet->setCellValue('D' . $x, $val['harga']);
            $sheet->setCellValue('E' . $x, $val['diskon']);
            $sheet->setCellValue('F' . $x, $val['harga_new']);
            $sheet->setCellValue('G' . $x, $val['stok']);
            $sheet->setCellValue('H' . $x, $val['berlaku']);
            $sheet->setCellValue('I' . $x, $val['created_at']);
            $sheet->setCellValue('J' . $x, $val['updated_at']);
            $x++;
        endforeach;
        $writer = new xlsx($spreadsheet);
        $filename = 'laporan-data-diskon-memori';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    //diskon Motherboard
    public function indexMotherboard()
    {
        $data =
            [
                'title' => 'Daftar Motherboard',
                'validation' => \Config\Services::validation(),
                'motherboard' => $this->motherboardModel->getMotherboard()
            ];

        return view('diskon/Motherboard', $data);
    }
    public function updateMotherboard($id)
    {
        if (!$this->validate([
            'diskon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'berlaku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],


        ])) {

            return redirect()->to('/diskon/Motherboard/' . $this->request->getVar('id'))->withInput();
        }
        $hargaLama = intval($this->request->getVar('harga'));
        $diskon = intval($this->request->getVar('diskon'));
        $this->motherboardModel->save([
            'id' => $id,
            'harga_new' => $hargaLama - ($hargaLama * $diskon / 100),
            'diskon' => $diskon,
            'berlaku' => $this->request->getVar('berlaku')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/diskon/indexMotherboard');
    }
    public function excelMotherboard()
    {

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Merk');
        $sheet->setCellValue('C1', 'Nama');
        $sheet->setCellValue('D1', 'Harga Lama');
        $sheet->setCellValue('E1', 'Diskon(%)');
        $sheet->setCellValue('F1', 'Harga Baru');
        $sheet->setCellValue('G1', 'Stok');
        $sheet->setCellValue('H1', 'Berlaku');
        $sheet->setCellValue('I1', 'Created At');
        $sheet->setCellValue('J1', 'Updated At');

        $motherboard = $this->motherboardModel->getMotherboard();
        $no = 1;
        $x = 2;
        foreach ($motherboard as $val) :
            $sheet->setCellValue('A' . $x, $no++);
            $sheet->setCellValue('B' . $x, $val['merk']);
            $sheet->setCellValue('C' . $x, $val['nama']);
            $sheet->setCellValue('D' . $x, $val['harga']);
            $sheet->setCellValue('E' . $x, $val['diskon']);
            $sheet->setCellValue('F' . $x, $val['harga_new']);
            $sheet->setCellValue('G' . $x, $val['stok']);
            $sheet->setCellValue('H' . $x, $val['berlaku']);
            $sheet->setCellValue('I' . $x, $val['created_at']);
            $sheet->setCellValue('J' . $x, $val['updated_at']);
            $x++;
        endforeach;
        $writer = new xlsx($spreadsheet);
        $filename = 'laporan-data-diskon-motherboard';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    //Diskon pendingin
    public function indexPendingin()
    {
        $data =
            [
                'title' => 'Daftar Pendingin',
                'validation' => \Config\Services::validation(),
                'pendingin' => $this->pendinginModel->getPendingin()
            ];

        return view('diskon/Pendingin', $data);
    }
    public function updatePendingin($id)
    {
        if (!$this->validate([
            'diskon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'berlaku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],


        ])) {

            return redirect()->to('/diskon/Pendingin/' . $this->request->getVar('id'))->withInput();
        }
        $hargaLama = intval($this->request->getVar('harga'));
        $diskon = intval($this->request->getVar('diskon'));
        $this->pendinginModel->save([
            'id' => $id,
            'harga_new' => $hargaLama - ($hargaLama * $diskon / 100),
            'diskon' => $diskon,
            'berlaku' => $this->request->getVar('berlaku')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/diskon/indexpendingin');
    }
    public function excelPendingin()
    {

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Merk');
        $sheet->setCellValue('C1', 'Nama');
        $sheet->setCellValue('D1', 'Harga Lama');
        $sheet->setCellValue('E1', 'Diskon(%)');
        $sheet->setCellValue('F1', 'Harga Baru');
        $sheet->setCellValue('G1', 'Stok');
        $sheet->setCellValue('H1', 'Berlaku');
        $sheet->setCellValue('I1', 'Created At');
        $sheet->setCellValue('J1', 'Updated At');

        $pendingin = $this->pendinginModel->getPendingin();
        $no = 1;
        $x = 2;
        foreach ($pendingin as $val) :
            $sheet->setCellValue('A' . $x, $no++);
            $sheet->setCellValue('B' . $x, $val['merk']);
            $sheet->setCellValue('C' . $x, $val['nama']);
            $sheet->setCellValue('D' . $x, $val['harga']);
            $sheet->setCellValue('E' . $x, $val['diskon']);
            $sheet->setCellValue('F' . $x, $val['harga_new']);
            $sheet->setCellValue('G' . $x, $val['stok']);
            $sheet->setCellValue('H' . $x, $val['berlaku']);
            $sheet->setCellValue('I' . $x, $val['created_at']);
            $sheet->setCellValue('J' . $x, $val['updated_at']);
            $x++;
        endforeach;
        $writer = new xlsx($spreadsheet);
        $filename = 'laporan-data-diskon-pendingin';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    //Diskon Processor
    public function indexProcesor()
    {
        $data =
            [
                'title' => 'Daftar Processor',
                'validation' => \Config\Services::validation(),
                'procesor' => $this->procesorModel->getProcesor()
            ];

        return view('diskon/Procesor', $data);
    }
    public function updateProcesor($id)
    {
        if (!$this->validate([
            'diskon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'berlaku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],


        ])) {

            return redirect()->to('/diskon/Procesor/' . $this->request->getVar('id'))->withInput();
        }
        $hargaLama = intval($this->request->getVar('harga'));
        $diskon = intval($this->request->getVar('diskon'));
        $this->procesorModel->save([
            'id' => $id,
            'harga_new' => $hargaLama - ($hargaLama * $diskon / 100),
            'diskon' => $diskon,
            'berlaku' => $this->request->getVar('berlaku')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/diskon/indexProcesor');
    }
    public function excelProcesor()
    {

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Merk');
        $sheet->setCellValue('C1', 'Nama');
        $sheet->setCellValue('D1', 'Harga Lama');
        $sheet->setCellValue('E1', 'Diskon(%)');
        $sheet->setCellValue('F1', 'Harga Baru');
        $sheet->setCellValue('G1', 'Stok');
        $sheet->setCellValue('H1', 'Berlaku');
        $sheet->setCellValue('I1', 'Created At');
        $sheet->setCellValue('J1', 'Updated At');

        $procesor = $this->procesorModel->getProcesor();
        $no = 1;
        $x = 2;
        foreach ($procesor as $val) :
            $sheet->setCellValue('A' . $x, $no++);
            $sheet->setCellValue('B' . $x, $val['merk']);
            $sheet->setCellValue('C' . $x, $val['nama']);
            $sheet->setCellValue('D' . $x, $val['harga']);
            $sheet->setCellValue('E' . $x, $val['diskon']);
            $sheet->setCellValue('F' . $x, $val['harga_new']);
            $sheet->setCellValue('G' . $x, $val['stok']);
            $sheet->setCellValue('H' . $x, $val['berlaku']);
            $sheet->setCellValue('I' . $x, $val['created_at']);
            $sheet->setCellValue('J' . $x, $val['updated_at']);
            $x++;
        endforeach;
        $writer = new xlsx($spreadsheet);
        $filename = 'laporan-data-diskon-procesor';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    //PSU Diskom
    public function indexPsu()
    {
        $data =
            [
                'title' => 'Daftar Power Supply',
                'validation' => \Config\Services::validation(),
                'psu' => $this->psuModel->getPsu()
            ];

        return view('diskon/Psu', $data);
    }
    public function updatePsu($id)
    {
        if (!$this->validate([
            'diskon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'berlaku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],


        ])) {

            return redirect()->to('/diskon/Psu/' . $this->request->getVar('id'))->withInput();
        }
        $hargaLama = intval($this->request->getVar('harga'));
        $diskon = intval($this->request->getVar('diskon'));
        $this->psuModel->save([
            'id' => $id,
            'harga_new' => $hargaLama - ($hargaLama * $diskon / 100),
            'diskon' => $diskon,
            'berlaku' => $this->request->getVar('berlaku')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/diskon/indexPsu');
    }
    public function excelPsu()
    {

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Merk');
        $sheet->setCellValue('C1', 'Nama');
        $sheet->setCellValue('D1', 'Harga Lama');
        $sheet->setCellValue('E1', 'Diskon(%)');
        $sheet->setCellValue('F1', 'Harga Baru');
        $sheet->setCellValue('G1', 'Stok');
        $sheet->setCellValue('H1', 'Berlaku');
        $sheet->setCellValue('I1', 'Created At');
        $sheet->setCellValue('J1', 'Updated At');

        $psu = $this->psuModel->getPsu();
        $no = 1;
        $x = 2;
        foreach ($psu as $val) :
            $sheet->setCellValue('A' . $x, $no++);
            $sheet->setCellValue('B' . $x, $val['merk']);
            $sheet->setCellValue('C' . $x, $val['nama']);
            $sheet->setCellValue('D' . $x, $val['harga']);
            $sheet->setCellValue('E' . $x, $val['diskon']);
            $sheet->setCellValue('F' . $x, $val['harga_new']);
            $sheet->setCellValue('G' . $x, $val['stok']);
            $sheet->setCellValue('H' . $x, $val['berlaku']);
            $sheet->setCellValue('I' . $x, $val['created_at']);
            $sheet->setCellValue('J' . $x, $val['updated_at']);
            $x++;
        endforeach;
        $writer = new xlsx($spreadsheet);
        $filename = 'laporan-data-diskon-psu';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    //Diskon RAM
    public function indexRam()
    {
        $data =
            [
                'title' => 'Daftar RAM',
                'validation' => \Config\Services::validation(),
                'ram' => $this->ramModel->getRam()
            ];

        return view('diskon/Ram', $data);
    }
    public function updateRam($id)
    {
        if (!$this->validate([
            'diskon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'berlaku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],


        ])) {

            return redirect()->to('/diskon/Ram/' . $this->request->getVar('id'))->withInput();
        }
        $hargaLama = intval($this->request->getVar('harga'));
        $diskon = intval($this->request->getVar('diskon'));
        $this->ramModel->save([
            'id' => $id,
            'harga_new' => $hargaLama - ($hargaLama * $diskon / 100),
            'diskon' => $diskon,
            'berlaku' => $this->request->getVar('berlaku')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/diskon/indexRam');
    }
    public function excelRam()
    {

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Merk');
        $sheet->setCellValue('C1', 'Nama');
        $sheet->setCellValue('D1', 'Harga Lama');
        $sheet->setCellValue('E1', 'Diskon(%)');
        $sheet->setCellValue('F1', 'Harga Baru');
        $sheet->setCellValue('G1', 'Stok');
        $sheet->setCellValue('H1', 'Berlaku');
        $sheet->setCellValue('I1', 'Created At');
        $sheet->setCellValue('J1', 'Updated At');

        $ram = $this->ramModel->getRam();
        $no = 1;
        $x = 2;
        foreach ($ram as $val) :
            $sheet->setCellValue('A' . $x, $no++);
            $sheet->setCellValue('B' . $x, $val['merk']);
            $sheet->setCellValue('C' . $x, $val['nama']);
            $sheet->setCellValue('D' . $x, $val['harga']);
            $sheet->setCellValue('E' . $x, $val['diskon']);
            $sheet->setCellValue('F' . $x, $val['harga_new']);
            $sheet->setCellValue('G' . $x, $val['stok']);
            $sheet->setCellValue('H' . $x, $val['berlaku']);
            $sheet->setCellValue('I' . $x, $val['created_at']);
            $sheet->setCellValue('J' . $x, $val['updated_at']);
            $x++;
        endforeach;
        $writer = new xlsx($spreadsheet);
        $filename = 'laporan-data-diskon-ram';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    //VGA Diskon
    public function indexVga()
    {
        $data =
            [
                'title' => 'Daftar VGA',
                'validation' => \Config\Services::validation(),
                'vga' => $this->vgaModel->getVga()
            ];

        return view('diskon/Vga', $data);
    }
    public function updateVga($id)
    {
        if (!$this->validate([
            'diskon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'berlaku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],


        ])) {

            return redirect()->to('/diskon/Vga/' . $this->request->getVar('id'))->withInput();
        }
        $hargaLama = intval($this->request->getVar('harga'));
        $diskon = intval($this->request->getVar('diskon'));
        $this->vgaModel->save([
            'id' => $id,
            'harga_new' => $hargaLama - ($hargaLama * $diskon / 100),
            'diskon' => $diskon,
            'berlaku' => $this->request->getVar('berlaku')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/diskon/indexVga');
    }
    public function excelVga()
    {

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Merk');
        $sheet->setCellValue('C1', 'Nama');
        $sheet->setCellValue('D1', 'Harga Lama');
        $sheet->setCellValue('E1', 'Diskon(%)');
        $sheet->setCellValue('F1', 'Harga Baru');
        $sheet->setCellValue('G1', 'Stok');
        $sheet->setCellValue('H1', 'Berlaku');
        $sheet->setCellValue('I1', 'Created At');
        $sheet->setCellValue('J1', 'Updated At');

        $vga = $this->vgaModel->getVga();
        $no = 1;
        $x = 2;
        foreach ($vga as $val) :
            $sheet->setCellValue('A' . $x, $no++);
            $sheet->setCellValue('B' . $x, $val['merk']);
            $sheet->setCellValue('C' . $x, $val['nama']);
            $sheet->setCellValue('D' . $x, $val['harga']);
            $sheet->setCellValue('E' . $x, $val['diskon']);
            $sheet->setCellValue('F' . $x, $val['harga_new']);
            $sheet->setCellValue('G' . $x, $val['stok']);
            $sheet->setCellValue('H' . $x, $val['berlaku']);
            $sheet->setCellValue('I' . $x, $val['created_at']);
            $sheet->setCellValue('J' . $x, $val['updated_at']);
            $x++;
        endforeach;
        $writer = new xlsx($spreadsheet);
        $filename = 'laporan-data-diskon-vga';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
