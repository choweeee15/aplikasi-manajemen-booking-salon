<?php

namespace App\Controllers;

use App\Models\LapanganModel;
use App\Models\GambarLapanganModel;
use App\Models\PenggunaModel;

class LapanganController extends BaseController
{
    public function index()
    {
        $lapanganModel = new LapanganModel();
        $gambarLapanganModel = new GambarLapanganModel();
        $data['lapangan'] = $lapanganModel->findAll();

        foreach ($data['lapangan'] as $key => $lapangan) {
            $data['lapangan'][$key]['gambar'] = $gambarLapanganModel->where('lapangan_id', $lapangan['id'])->findAll();
        }

        echo view('header');
        echo view('menu');
        echo view('lapangan_view', $data);
        echo view('footer');
    }


    public function create()
{
    $penggunaModel = new PenggunaModel(); // Memuat model pengguna untuk mengambil data stylist
    $pengguna = $penggunaModel->findAll(); // Mengambil semua data stylist dari tabel pengguna
    
    // Kirim data pengguna ke view
    $data = [
        'pengguna' => $pengguna
    ];

    // Tampilkan halaman dengan data pengguna
    echo view('header');
    echo view('menu');
    echo view('lapangan_form', $data); // Mengirim data ke view lapangan_form
    echo view('footer');
}


    public function store()
    {
        $lapanganModel = new LapanganModel();
        $gambarModel = new GambarLapanganModel();

        $lapanganData = [
            'nama'      => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'lokasi'    => $this->request->getPost('lokasi'),
            'tipe'      => $this->request->getPost('tipe'),
            'harga'     => $this->request->getPost('harga'),
            'status'    => $this->request->getPost('status')
        ];

        $lapanganModel->insert($lapanganData);
        $lapanganId = $lapanganModel->getInsertID();

        $files = $this->request->getFiles()['gambar'];
        foreach ($files as $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move('uploads/lapangan', $newName);

                $gambarModel->insert([
                    'lapangan_id' => $lapanganId,
                    'file' => $newName
                ]);
            }
        }

        return redirect()->to('/lapangan');
    }
    public function edit($id)
{
    $lapanganModel = new LapanganModel();
    $gambarLapanganModel = new GambarLapanganModel();
    $penggunaModel = new \App\Models\PenggunaModel(); // Tambahkan model pengguna

    $data['lapangan'] = $lapanganModel->find($id);

    if (!$data['lapangan']) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Lapangan tidak ditemukan');
    }

    $data['gambar_lapangan'] = $gambarLapanganModel->where('lapangan_id', $id)->findAll();
    $data['pengguna'] = $penggunaModel->findAll(); // Ambil semua data pengguna

    echo view('header');
    echo view('menu');
    echo view('lapangan_edit', $data);
    echo view('footer');
}
public function update($id)
{
    $lapanganModel = new LapanganModel();
    $gambarLapanganModel = new GambarLapanganModel();

    $validationRules = [
        'nama' => 'required|min_length[3]',
        'deskripsi' => 'required|min_length[5]',
        'lokasi' => 'required',
        'tipe' => 'required',
        'harga' => 'required|numeric',
        'status' => 'required',
    ];

    if (!$this->validate($validationRules)) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    $data = [
        'nama' => $this->request->getPost('nama'),
        'deskripsi' => $this->request->getPost('deskripsi'),
        'lokasi' => $this->request->getPost('lokasi'),
        'tipe' => $this->request->getPost('tipe'),
        'harga' => $this->request->getPost('harga'),
        'status' => $this->request->getPost('status'),
    ];

    $lapanganModel->update($id, $data);

    if ($this->request->getPost('delete_images')) {
        $deleteIds = $this->request->getPost('delete_images');
        foreach ($deleteIds as $deleteId) {
            $gambar = $gambarLapanganModel->find($deleteId);
            if ($gambar) {
                $filePath = FCPATH . 'uploads/lapangan/' . $gambar['file'];
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
                $gambarLapanganModel->delete($deleteId);
            }
        }
    }

    if ($this->request->getFileMultiple('gambar')) {
        $gambarFiles = $this->request->getFileMultiple('gambar');
        foreach ($gambarFiles as $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                $fileName = $file->getRandomName();
                $file->move(FCPATH . 'uploads/lapangan', $fileName);

                $gambarData = [
                    'lapangan_id' => $id,
                    'file' => $fileName,
                ];
                $gambarLapanganModel->save($gambarData);
            }
        }
    }

    return redirect()->to(base_url('lapangan'))->with('success', 'Data lapangan berhasil diperbarui');
}


    // public function update($id)
    // {
    //     $lapanganModel = new LapanganModel();
    //     $gambarLapanganModel = new GambarLapanganModel();

    //     $validationRules = [
    //         'nama' => 'required|min_length[3]',
    //         'deskripsi' => 'required|min_length[5]',
    //         'lokasi' => 'required',
    //         'tipe' => 'required',
    //         'harga' => 'required|numeric',
    //         'status' => 'required',
    //     ];

    //     if (!$this->validate($validationRules)) {

    //         return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    //     }

    //     $data = [
    //         'nama' => $this->request->getPost('nama'),
    //         'deskripsi' => $this->request->getPost('deskripsi'),
    //         'lokasi' => $this->request->getPost('lokasi'),
    //         'tipe' => $this->request->getPost('tipe'),
    //         'harga' => $this->request->getPost('harga'),
    //         'status' => $this->request->getPost('status'),
    //     ];

    //     $lapanganModel->update($id, $data);

    //     if ($this->request->getPost('delete_images')) {
    //         $deleteIds = $this->request->getPost('delete_images');
    //         foreach ($deleteIds as $deleteId) {
    //             $gambar = $gambarLapanganModel->find($deleteId);
    //             if ($gambar) {

    //                 unlink(FCPATH . 'uploads/lapangan/' . $gambar['file']);

    //                 $gambarLapanganModel->delete($deleteId);
    //             }
    //         }
    //     }

    //     if ($this->request->getFileMultiple('gambar')) {
    //         $gambarFiles = $this->request->getFileMultiple('gambar');
    //         foreach ($gambarFiles as $file) {

    //             if ($file->isValid() && !$file->hasMoved()) {

    //                 $fileName = $file->getRandomName();
    //                 $file->move(FCPATH . 'uploads/lapangan', $fileName);

    //                 $gambarData = [
    //                     'lapangan_id' => $id,
    //                     'file' => $fileName,
    //                 ];
    //                 $gambarLapanganModel->save($gambarData);
    //             }
    //         }
    //     }

    //     return redirect()->to(base_url('lapangan'))->with('success', 'Data lapangan berhasil diperbarui');
    // }


    public function delete($id)
    {
        $lapanganModel = new LapanganModel();
        $gambarModel = new GambarLapanganModel();

        $gambarList = $gambarModel->where('lapangan_id', $id)->findAll();
        foreach ($gambarList as $g) {
            if (file_exists('uploads/lapangan/' . $g['file'])) {
                unlink('uploads/lapangan/' . $g['file']);
            }
        }

        $gambarModel->where('lapangan_id', $id)->delete();
        $lapanganModel->delete($id);

        return redirect()->to('/lapangan');
    }
}
