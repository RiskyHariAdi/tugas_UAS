<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AntrianModel;

class Antrian extends Controller
{

    public function __construct()
    {

        // Mendeklarasikan class AntrianModel menggunakan $this->antrian
        $this->antrian = new AntrianModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Ambil Antrian'
        ];
        return view('pages/antrian/index', $data);
    }


    public function edite()
    {

        $data['antrian'] = $this->antrian->getAntrian();
        echo view('pages/antrian/edit2', $data);
    }



    public function a()
    {
        // Mengambil value dari form dengan method POST

        $oke =  date('y-m-d H:i:s');

        // Membuat array collection yang disiapkan untuk insert ke tablehttps://codeigniter.com/user_guide/database/index.html

        $data = [
            'tanggal' =>  $oke,
            'status' => 'mengantri',
            'waktu_panggil' => null,
            'waktu_selesai' => null,
            'pelayanan_id' => '4',
            'loket_id' => '1'
        ];

        $dataaa = [
            'tanggal' =>  $oke,
            'status' => 'berlansung',
            'waktu_panggil' => null,
            'waktu_selesai' => null,
            'pelayanan_id' => '4',
            'loket_id' => '1'
        ];
        $dataa['antrianstatus'] = $this->antrian->getAntrianstatus('4');
        if ($dataa['antrianstatus'] != null) {
            $simpan = $this->antrian->insert_antrian($data);
        } else {
            $simpan = $this->antrian->insert_antrian($dataaa);
        }




        // Jika simpan berhasil, maka ...
        if ($simpan) {
            // Deklarasikan session flashdata dengan tipe success
            session()->setFlashdata('success', 'Anda telah melakukan pengambilan no antrian, no antrian anda adalah $last_id');
            $data['antrian'] = $this->antrian->getAntrian();
            echo view('pages/antrian/antrian', $data);
        }
    }


    public function b()
    {
        // Mengambil value dari form dengan method POST

        $oke =  date('y-m-d H:i:s');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'tanggal' =>  $oke,
            'status' => 'mengantri',
            'waktu_panggil' => null,
            'waktu_selesai' => null,
            'pelayanan_id' => '5',
            'loket_id' => '1'
        ];

        $dataaa = [
            'tanggal' =>  $oke,
            'status' => 'berlansung',
            'waktu_panggil' => null,
            'waktu_selesai' => null,
            'pelayanan_id' => '5',
            'loket_id' => '1'
        ];


        $dataa['antrianstatus'] = $this->antrian->getAntrianstatus('5');
        if ($dataa['antrianstatus'] != null) {
            $simpan = $this->antrian->insert_antrian($data);
        } else {
            $simpan = $this->antrian->insert_antrian($dataaa);
        }


        // Jika simpan berhasil, maka ...
        if ($simpan) {
            // Deklarasikan session flashdata dengan tipe success
            session()->setFlashdata('success', 'Anda telah melakukan pengambilan no antrian, no antrian anda adalah $last_id');
            $data['antrian'] = $this->antrian->getAntrian();
            echo view('pages/antrian/antrian', $data);
        }
    }


    public function c()
    {
        // Mengambil value dari form dengan method POST

        $oke =  date('y-m-d H:i:s');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'tanggal' =>  $oke,
            'status' => 'mengantri',
            'waktu_panggil' => null,
            'waktu_selesai' => null,
            'pelayanan_id' => '6',
            'loket_id' => '1'
        ];

        $dataaa = [
            'tanggal' =>  $oke,
            'status' => 'berlansung',
            'waktu_panggil' => null,
            'waktu_selesai' => null,
            'pelayanan_id' => '6',
            'loket_id' => '1'
        ];



        $dataa['antrianstatus'] = $this->antrian->getAntrianstatus('6');
        if ($dataa['antrianstatus'] != null) {
            $simpan = $this->antrian->insert_antrian($data);
        } else {
            $simpan = $this->antrian->insert_antrian($dataaa);
        }

        // Jika simpan berhasil, maka ...
        if ($simpan) {
            // Deklarasikan session flashdata dengan tipe success
            session()->setFlashdata('success', 'Anda telah melakukan pengambilan no antrian, no antrian anda adalah $last_id');
            $data['antrian'] = $this->antrian->getAntrian();
            echo view('pages/antrian/antrian', $data);
        }
    }


    public function d()
    {
        // Mengambil value dari form dengan method POST

        $oke =  date('y-m-d H:i:s');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'tanggal' =>  $oke,
            'status' => 'mengantri',
            'waktu_panggil' => null,
            'waktu_selesai' => null,
            'pelayanan_id' => '7',
            'loket_id' => '1'
        ];
        $dataaa = [
            'tanggal' =>  $oke,
            'status' => 'berlansung',
            'waktu_panggil' => null,
            'waktu_selesai' => null,
            'pelayanan_id' => '7',
            'loket_id' => '1'
        ];


        $dataa['antrianstatus'] = $this->antrian->getAntrianstatus('7');
        if ($dataa['antrianstatus'] != null) {
            $simpan = $this->antrian->insert_antrian($data);
        } else {
            $simpan = $this->antrian->insert_antrian($dataaa);
        }


        // Jika simpan berhasil, maka ...
        if ($simpan) {
            // Deklarasikan session flashdata dengan tipe success
            session()->setFlashdata('success', 'Anda telah melakukan pengambilan no antrian, no antrian anda adalah $last_id');
            $data['antrian'] = $this->antrian->getAntrian();
            echo view('pages/antrian/antrian', $data);
        }
    }
}
