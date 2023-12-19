<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\modeldaerah;

class Riwayat extends BaseController
{

    protected $modeldaerah;
    public function __construct()
    {
        $this->modeldaerah = new modeldaerah();
    }
    public function index()
    {
        $komik = $this->modeldaerah->getdaerah();
        // dd($komik);
        // $komik =$this->komikmodel->findAll();
        $data = [
            'title' => 'daftar komik',
            'daerah' => $this->modeldaerah->getdaerah()
        ];
        return view('gubernur/index', $data);
    }
    public function detail($slug)
    {
        // $komik = $this->komikmodel->getkomik($slug);
        // dd($komik);
        $data = [
            'title' => 'detail komik',
            'daerah' => $this->modeldaerah->getdaerah($slug)
        ];


        return view('gubernur/detail', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'form tambah data komik',
            'validation' => \config\Services::validation()
        ];
        return view('gubernur/create', $data);
    }

    public function save()
    {
        if (
            !$this->validate([
                'nama_gubernur' => 'required|is_unique[daerah.nama_gubernur]']
            )
        ) {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to('/riwayat/create');
        }


        $slug = url_title($this->request->getVar('nama_gubernur'), '-', true);
        $this->modeldaerah->save([
            'nama_gubernur' => $this->request->getVar('nama_gubernur'),
            'slug' => $slug,
            'tahun_menjabat' => $this->request->getVar('tahun_menjabat'),
            'periode' => $this->request->getVar('periode'),
            'wakil_gubernur' => $this->request->getVar('wakil_gubernur'),
            'asal_partai' => $this->request->getVar('asal_partai'),]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
        return redirect()->to('/');
    }

    public function edit($slug)
    {

        $data = [
            'title' => 'form tambah data ',
            // 'validation' => \config\Services::validation(),
            'daerah' => $this->modeldaerah->getdaerah($slug)
        ];
        return view('gubernur/edit', $data);
    }

    public function update($id)
    {

        // if (
        //     !$this->validate([
        //         'nama_gubernur' => 'required|is_unique[daerah.nama_gubernur]']
        //     )
        // ) {
        //     $validation = \Config\Services::validation();
        //     dd($validation);
        //     return redirect()->to('/riwayat/edit');
        // }

        $slug = url_title($this->request->getVar('nama_gubernur'), '_', true);
        $this->modeldaerah->save([
            'id' => $id,
            'nama_gubernur' => $this->request->getVar('nama_gubernur'),
            'slug' => $slug,
            'tahun_menjabat' => $this->request->getVar('tahun_menjabat'),
            'periode' => $this->request->getVar('periode'),
            'wakil_gubernur' => $this->request->getVar('wakil_gubernur'),
            'asal_partai' => $this->request->getVar('asal_partai'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/');

    }

    public function delete($id)
    {
        $this->modeldaerah->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/');

    }
}
