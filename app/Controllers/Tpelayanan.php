<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TampilpelayananModel;

class Tpelayanan extends Controller
{

    public function __construct()
    {

        // Mendeklarasikan class ProductModel menggunakan $this->pelayanan
        $this->pelayanan = new TampilpelayananModel();
    }

    public function antrianindex()
    {
        $data = [
            'title' => 'Ambil Antrian'
        ];
        $data['pelayanan'] = $this->pelayanan->getAllData();
        echo view('pages/antrian/index', $data);
    }
}
