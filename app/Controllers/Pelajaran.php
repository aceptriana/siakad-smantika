<?php

namespace App\Controllers;

use App\Models\PelajaranModel;

class Pelajaran extends BaseController
{
    public function index()
    {
        $model = new PelajaranModel();
        $data['pelajaran'] = $model->findAll();

        return view('pelajaran/index', $data);
    }

    public function create()
    {
        return view('pelajaran/create');
    }

    public function store()
    {
        $model = new PelajaranModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
        ];

        $model->insert($data);

        return redirect()->to('/pelajaran');
    }

    public function edit($id)
    {
        $model = new PelajaranModel();
        $data['pelajaran'] = $model->find($id);

        return view('pelajaran/edit', $data);
    }

    public function update($id)
    {
        $model = new PelajaranModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
        ];

        $model->update($id, $data);

        return redirect()->to('/pelajaran');
    }

    public function delete($id)
    {
        $model = new PelajaranModel();
        $model->delete($id);

        return redirect()->to('/pelajaran');
    }
}
