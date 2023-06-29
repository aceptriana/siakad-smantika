<?php

namespace App\Controllers;

use App\Models\SiswaModel;
use CodeIgniter\Controller;

class Siswa extends Controller
{
    public function index()
    {
        $model = new SiswaModel();
        $data['siswa'] = $model->findAll();

        return view('siswa/index', $data);
    }

    public function create()
    {
        return view('siswa/create');
    }

    public function store()
    {
        $model = new SiswaModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'kelas' => $this->request->getPost('kelas'),
            'alamat' => $this->request->getPost('alamat')
        ];

        $model->insert($data);

        return redirect()->to(base_url('siswa'));
    }

    public function edit($id)
    {
        $model = new SiswaModel();
        $data['siswa'] = $model->find($id);

        return view('siswa/edit', $data);
    }

    public function update($id)
    {
        $model = new SiswaModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'kelas' => $this->request->getPost('kelas'),
            'alamat' => $this->request->getPost('alamat')
        ];

        $model->update($id, $data);

        return redirect()->to(base_url('siswa'));
    }

    public function delete($id)
    {
        $model = new SiswaModel();
        $model->delete($id);

        return redirect()->to(base_url('siswa'));
    }
}
