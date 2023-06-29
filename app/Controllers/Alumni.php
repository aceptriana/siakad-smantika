<?php

namespace App\Controllers;

use App\Models\AlumniModel;

class Alumni extends BaseController
{
    public function index()
    {
        $model = new AlumniModel();
        $data['alumni'] = $model->findAll();

        return view('alumni/index', $data);
    }

    public function create()
    {
        return view('alumni/create');
    }

    public function store()
    {
        $model = new AlumniModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'tahun_lulus' => $this->request->getPost('tahun_lulus'),
            'alamat' => $this->request->getPost('alamat'),
        ];

        $model->insert($data);

        return redirect()->to('/alumni');
    }

    public function edit($id)
    {
        $model = new AlumniModel();
        $data['alumni'] = $model->find($id);

        return view('alumni/edit', $data);
    }

    public function update($id)
    {
        $model = new AlumniModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'tahun_lulus' => $this->request->getPost('tahun_lulus'),
            'alamat' => $this->request->getPost('alamat'),
        ];

        $model->update($id, $data);

        return redirect()->to('/alumni');
    }

    public function delete($id)
    {
        $model = new AlumniModel();
        $model->delete($id);

        return redirect()->to('/alumni');
    }
}
