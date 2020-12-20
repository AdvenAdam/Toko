<?php

namespace App\Controllers;

use \App\Models\TransaksiModel;
use \App\Models\RamModel;
use \App\Models\MemoriModel;
use \App\Models\CasingModel;
use \App\Models\MotherboardModel;
use \App\Models\PendinginModel;
use \App\Models\ProcesorModel;
use \App\Models\PsuModel;
use \App\Models\VgaModel;
use Config\Validation;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\xlsx;

class Trx extends BaseController
{
    protected $trxModel;
    protected $ramModel;
    protected $memoriModel;
    protected $casingModel;
    protected $motherboardModel;
    protected $pendinginModel;
    protected $procesorModel;
    protected $psuModel;
    protected $vgaModel;

    public function __construct()
    {
        $this->trxModel = new TransaksiModel();
        $this->ramModel = new RamModel();
        $this->memoriModel = new MemoriModel();
        $this->casingModel = new CasingModel();
        $this->motherboardModel = new MotherboardModel();
        $this->pendinginModel = new PendinginModel();
        $this->procesorModel = new ProcesorModel();
        $this->psuModel = new PsuModel();
        $this->vgaModel = new VgaModel();
        helper('number');
        helper('form');
        helper('date');
    }


    public function index()
    {
        $data =
            [
                'title' => 'Daftar Transaksi',
                'transaksi'  => $this->trxModel->getTrx(),
                'masuk' => 0,

            ];

        return view('transaksi/index', $data);
    }
    public function delete($id)
    {
        $this->trxModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus');
        return redirect()->to('/trx');
    }

    public function excel()
    {

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Jenis');
        $sheet->setCellValue('C1', 'Pelanggan');
        $sheet->setCellValue('D1', 'Customer Service');
        $sheet->setCellValue('E1', 'Nilai');
        $sheet->setCellValue('F1', 'Rincian');
        $sheet->setCellValue('G1', 'Created At');
        $sheet->setCellValue('H1', 'Updated At');

        $procesor = $this->procesorModel->getProcesor();
        $no = 1;
        $x = 2;
        foreach ($procesor as $val) :
            $sheet->setCellValue('A' . $x, $no++);
            $sheet->setCellValue('B' . $x, $val['jenis']);
            $sheet->setCellValue('C' . $x, $val['pelanggan']);
            $sheet->setCellValue('D' . $x, $val['customer_service']);
            $sheet->setCellValue('E' . $x, $val['nilai']);
            $sheet->setCellValue('F' . $x, $val['rincian']);
            $sheet->setCellValue('G' . $x, $val['created_at']);
            $sheet->setCellValue('H' . $x, $val['updated_at']);
            $x++;
        endforeach;
        $writer = new xlsx($spreadsheet);
        $filename = 'laporan-data-transaksi';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

    // save data dari transaksi di front
    public function Save()
    {
        $cart = \Config\Services::cart();
        // mengambbil stok
        if (!$this->validate([
            'pelanggan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => ' Nama {field} harus diisi'
                ]
            ],
        ])) {
            return redirect()->to('/shop/cart')->withInput();
        }
        $i = 1;
        // mengulang sebanyak jumlah data cart
        for ($counter = 1; $counter <= count($cart->contents()); $counter++) {
            $a = $i++;
            $kategori = $this->request->getVar('kategori' . $a);
            $id = $this->request->getVar('id' . $a);
            $qty = intval($this->request->getVar('qty' . $a));
            $this->trxModel->save([
                'pelanggan'        => $this->request->getVar('pelanggan'),
                'jenis'            => $this->request->getVar('jenis'),
                'nilai'            => $this->request->getVar('nilai' . $a),
                'customer_service' => $this->request->getVar('customer'),
                'rincian'          => $this->request->getVar('rincian' . $a)
            ]);
            // mengurangi stok
            if ($kategori == 'casing') {
                $stokBarang = $this->casingModel->getStok($id);
                foreach ($stokBarang as $val) {
                    $stok = intval($val['stok']);
                }
                $this->casingModel->save([
                    'id' => $id,
                    'stok' => $stok - $qty,
                ]);
            }
            if ($kategori == 'memori') {
                $stokBarang = $this->memoriModel->getStok($id);
                foreach ($stokBarang as $val) {
                    $stok = intval($val['stok']);
                }
                $this->memoriModel->save([
                    'id' => $id,
                    'stok' => $stok - $qty,
                ]);
            }
            if ($kategori == 'motherboard') {
                $stokBarang = $this->motherboardModel->getStok($id);
                foreach ($stokBarang as $val) {
                    $stok = intval($val['stok']);
                }
                $this->motherboardModel->save([
                    'id' => $id,
                    'stok' => $stok - $qty,
                ]);
            }
            if ($kategori == 'pendingin') {
                $stokBarang = $this->pendinginModel->getStok($id);
                foreach ($stokBarang as $val) {
                    $stok = intval($val['stok']);
                }
                $this->pendinginModel->save([
                    'id' => $id,
                    'stok' => $stok - $qty,
                ]);
            }
            if ($kategori == 'procesor') {
                $stokBarang = $this->procesorModel->getStok($id);
                foreach ($stokBarang as $val) {
                    $stok = intval($val['stok']);
                }
                $this->procesorModel->save([
                    'id' => $id,
                    'stok' => $stok - $qty,
                ]);
            }
            if ($kategori == 'psu') {
                $stokBarang = $this->psuModel->getStok($id);
                foreach ($stokBarang as $val) {
                    $stok = intval($val['stok']);
                }
                $this->psuModel->save([
                    'id' => $id,
                    'stok' => $stok - $qty,
                ]);
            }
            if ($kategori == 'ram') {
                $stokBarang = $this->ram->getStok($id);
                foreach ($stokBarang as $val) {
                    $stok = intval($val['stok']);
                }
                $this->ram->save([
                    'id' => $id,
                    'stok' => $stok - $qty,
                ]);
            }
            if ($kategori == 'vga') {
                $stokBarang = $this->vgaModel->getStok($id);
                foreach ($stokBarang as $val) {
                    $stok = intval($val['stok']);
                }
                $this->vgaModel->save([
                    'id' => $id,
                    'stok' => $stok - $qty,
                ]);
            }
        }
        $data = [
            'title' => 'Invoice Transaksi',
            'cart' => $cart
        ];

        return view('layout/front/BuktiTrx', $data);
    }
}
