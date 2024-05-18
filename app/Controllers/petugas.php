<?php

namespace App\Controllers;

use App\Models\PetugasModel;

class petugas extends BaseController
{
    protected $PetugasModel;

    public function __construct()
    {
        $this->PetugasModel = new PetugasModel();
    }

    public function index()
    {
        $data['petugas'] = $this->PetugasModel->findAll();
        return view('petugas/index', $data);
    }

    public function create()
    {
        return view('petugas/create');
    }

    public function store()
    {
        $rules = [
            'nama' => 'required',
            'jabatan' => 'required',
            'tugas' => 'required',
            
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data dari form
        $data = [
            'nama' => $this->request->getVar('nama'),
            'jabatan' => $this->request->getVar('jabatan'),
            'tugas' => $this->request->getVar('tugas'),
           
        ];

        // Simpan data ke database menggunakan model
        $this->PetugasModel->save($data);

        return redirect()->to('/petugas')->with('success', 'Data petugas berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['petugas'] = $this->PetugasModel->find($id);
        return view('petugas/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'nama' => 'required',
            'jabatan' => 'required',
            'tugas' => 'required',
            
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data dari form
        $data = [
            'nama' => $this->request->getVar('nama'),
            'jabatan' => $this->request->getVar('jabatan'),
            'tugas' => $this->request->getVar('tugas'),
            
        ];

        // Update data ke database menggunakan model
        $this->PetugasModel->update($id, $data);

        return redirect()->to('/petugas')->with('success', 'Data petugas berhasil diperbarui.');
    }
    public function delete($id)
    {
        // Hapus data dari database menggunakan model
        $this->PetugasModel->delete($id);

        return redirect()->to('/petugas')->with('success', 'Data petugas berhasil dihapus.');
    }
}
