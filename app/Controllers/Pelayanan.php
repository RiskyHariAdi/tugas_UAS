<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PelayananModel;

class Pelayanan extends Controller
{

    public function __construct()
    {

        // Mendeklarasikan class PelayananModel menggunakan $this->pelayanan
        $this->pelayanan = new PelayananModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Ambil Antrian'
        ];
        $data['pelayanan'] = $this->pelayanan->getPelayanan();
        echo view('admin/pelayanan/index', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Pelayanan'
        ];
        // Memanggil function getPelayanan($id) dengan parameter $id di dalam PelayananModel dan menampungnya di variabel array pelayanan
        $data['pelayanan'] = $this->pelayanan->getPelayanan($id);
        // Mengirim data ke dalam view
        return view('admin/pelayanan/edit', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Pelayanan'
        ];
        return view('admin/pelayanan/create', $data);
    }

    public function delete($id)
    {
        // Memanggil function delete_pelayanan() dengan parameter $id di dalam PelayananModel dan menampungnya di variabel hapus
        $hapus = $this->pelayanan->delete_pelayanan($id);

        // Jika berhasil melakukan hapus
        if ($hapus) {
            // Deklarasikan session flashdata
            session()->setFlashdata('danger', 'Deleted pelayanan berhasil!');
            // Redirect ke halaman Pelayanan
            return redirect()->to(base_url('pelayanan'));
        }
    }
    public function update($id)
    {
        // Mengambil value dari form dengan method POST
        $name = $this->request->getPost('nama');
        $code = $this->request->getPost('kode');
        $desc = $this->request->getPost('keterangan');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'nama' => $name,
            'kode' => $code,
            'keterangan' => $desc
        ];

        /* 
    Membuat variabel ubah yang isinya merupakan memanggil function 
    update_pelayanan dan membawa parameter data beserta id
    */
        $ubah = $this->pelayanan->update_pelayanan($data, $id);

        // Jika berhasil melakukan ubah
        if ($ubah) {
            // Deklarasikan session flashdata
            session()->setFlashdata('warning', 'Updated pelayanan berhasil!');
            // Redirect ke halaman pelayanan
            return redirect()->to(base_url('pelayanan'));
        }
    }


    public function store()
    {
        // Mengambil value dari form dengan method POST
        $name = $this->request->getPost('nama');
        $code = $this->request->getPost('kode');
        $desc = $this->request->getPost('keterangan');


        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'nama' => $name,
            'kode' => $code,
            'keterangan' => $desc
        ];

        /* 
    Membuat variabel simpan yang isinya merupakan memanggil function 
    insert_pelayanan dan membawa parameter data 
    */
        $simpan = $this->pelayanan->insert_pelayanan($data);

        // Jika simpan berhasil, maka ...
        if ($simpan) {
            // Deklarasikan session flashdata dengan tipe success
            session()->setFlashdata('success', 'Created pelayanan successfully');
            // Redirect halaman ke pelayanan
            return redirect()->to(base_url('pelayanan'));
        }
    }
}
