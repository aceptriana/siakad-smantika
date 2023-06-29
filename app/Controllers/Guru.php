<?php

namespace App\Controllers;

use App\Models\GuruModel;

class Guru extends BaseController
{
    public function index()
    {
        $model = new GuruModel();
        $data['guru'] = $model->findAll();

        return view('guru/index', $data);
    }

    public function create()
    {
        return view('guru/create');
    }

    public function store()
    {
        $model = new GuruModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'mata_pelajaran' => $this->request->getPost('mata_pelajaran'),
            'alamat' => $this->request->getPost('alamat'),
        ];

        $model->insert($data);

        return redirect()->to('/guru');
    }

    public function edit($id)
    {
        $model = new GuruModel();
        $data['guru'] = $model->find($id);

        return view('guru/edit', $data);
    }

    public function update($id)
    {
        $model = new GuruModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'mata_pelajaran' => $this->request->getPost('mata_pelajaran'),
            'alamat' => $this->request->getPost('alamat'),
        ];

        $model->update($id, $data);

        return redirect()->to('/guru');
    }

    public function delete($id)
    {
        $model = new GuruModel();
        $model->delete($id);

        return redirect()->to('/guru');
    }
}
